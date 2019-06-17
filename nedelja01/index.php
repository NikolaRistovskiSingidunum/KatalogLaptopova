<?php
use App\Core\Router;
use App\Core\Session\Session;

require_once 'vendor/autoload.php';
require_once 'Configuration.php';
try {
$config = new App\Core\DatabaseConfiguration(
    \Configuration::DATABASE_HOST,
    \Configuration::DATABASE_NAME,
    \Configuration::DATABASE_USER,
    \Configuration::DATABASE_PASS
);

define('BASE', Configuration::BASE);

$router = new Router();
foreach (require_once 'Routes.php' as $route) {
    $router->add($route);
}

$url = strval(filter_input(INPUT_GET, 'URL'));
$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

$foundRoute = $router->find($httpMethod, $url);

$dbCon = new App\Core\DatabaseConnection($config);

$sessionStorageClassName = Configuration::SESSION_STORAGE_CLASS;
$sessionStorage = new $sessionStorageClassName(...Configuration::SESSION_STORAGE_ARGUMENTS);
$session = new Session($sessionStorage);

$fingerprintProviderClassName = Configuration::FINGERPRINT_PROVIDER_CLASS;
$fingerprintProvider = new $fingerprintProviderClassName();
$session->setFingerprintProvider($fingerprintProvider);

$session->reload();
//die($foundRoute->getControllerName());
//die("'App\\Controllers\\'. $foundRoute->getControllerName() . 'Controller'");
$fullControllerName = 'App\\Controllers\\'. $foundRoute->getControllerName() . 'Controller';
$method = $foundRoute->getMethodName();

$parameters = $foundRoute->extractArguments($url);
$controllerInstance = new $fullControllerName($dbCon);
$controllerInstance->setSession($session);

$controllerInstance->__pre();
call_user_func_array([ $controllerInstance, $method ], $parameters);

$controllerInstance->getSession()->save();

$data = $controllerInstance->getData();

# Zahteve upucene za API, da ne idu na Twig:
if ($controllerInstance instanceof App\Core\ApiController) {
    header('Content-type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    echo json_encode($data);
    exit;
}

# Ako nije bio API tip kontrolera, onda ipak renderuje odgovor Twig i pravi HTML:
$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, [
    'cache' => './twig-cache',
    'auto_reload' => true
]);

$data['BASE'] = BASE;

//provera sessije
$data["Admin"] = false;
if ($session->get('userId', null))
$data["Admin"] = true;

try {
echo $twig->render(
    $foundRoute->getControllerName() . '/' . $foundRoute->getMethodName() . '.html',
    $data
);
}
catch (\Twig\Error\Error $e)
{
    $data['twigError'] = "Ovaj opis je samo za debagovanje. Trazeni view ne postoji i ova je alternativna ruta. " . $e->getMessage();
    echo $twig->render(
        'Error' . '/' .'errorAll.html',
        $data
    );  
}

}
catch (\Throwable $e)
{
    \ob_clean();
    header('Location: ' . BASE );
    exit;
}