<?php
use App\Core\Router;
use App\Core\Session\Session;

require_once 'vendor/autoload.php';
require_once 'Configuration.php';

$config = new App\Core\DatabaseConfiguration(
    \Configuration::DATABASE_HOST,
    \Configuration::DATABASE_NAME,
    \Configuration::DATABASE_USER,
    \Configuration::DATABASE_PASS
);



$router = new Router();
foreach (require_once 'Routes.php' as $route) {
    $router->add($route);
}



$url = strval(filter_input(INPUT_GET, 'URL'));
$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

// echo "RUTUA JE" . $url;
// die($url . "Zasto je ruta prazna");

$foundRoute = $router->find($httpMethod, $url);

$dbCon = new App\Core\DatabaseConnection($config);

$sessionStorageClassName = Configuration::SESSION_STORAGE_CLASS;
$sessionStorage = new $sessionStorageClassName(...Configuration::SESSION_STORAGE_ARGUMENTS);
$session = new Session($sessionStorage);

$fingerprintProviderClassName = Configuration::FINGERPRINT_PROVIDER_CLASS;
$fingerprintProvider = new $fingerprintProviderClassName();
$session->setFingerprintProvider($fingerprintProvider);

$session->reload();
$fullControllerName = 'App\\Controllers\\'. $foundRoute->getControllerName() . 'Controller';
$method = $foundRoute->getMethodName();

$parameters = $foundRoute->extractArguments($url);
$controllerInstance = new $fullControllerName($dbCon);
$controllerInstance->setSession($session);

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

//print_r($data);
echo $twig->render(
    $foundRoute->getControllerName() . '/' . $foundRoute->getMethodName() . '.html',
    $data // aleternativno koristii ['data'=> data] da bi promenjive u twigu bile dostupune preko data

);
//echo    ($foundRoute->getControllerName() . '/' . $foundRoute->getMethodName());
