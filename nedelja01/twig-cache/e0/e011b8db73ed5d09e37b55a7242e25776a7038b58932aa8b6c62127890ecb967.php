<?php

/* Search/showFilters.html */
class __TwigTemplate_fd540ad0e9d0e251a93b5e5a7f9cab5b89d3d08584f8e3fcef6a580e73890254 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Search/showFilters.html", 1);
        $this->blocks = [
            'main' => [$this, 'block_main'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "
<h6>Mogli je nasao mandarinu</h6>

<form action=\"http://localhost/KatalogLaptopova/KatalogLaptopova/nedelja01/pretragaPoFilterima\" method=\"POST\">
    Cena:<br>
    od: <input type=\"text\" name=\"priceMin\" value=\"\"> do: <input type=\"text\" name=\"priceMax\" value=\"\"> 
    <br>
    Velicina RAMa:<br>
    od: <input type=\"text\" name=\"ramMin\" value=\"\"> do: <input type=\"text\" name=\"ramMax\" value=\"\"> 
    <br>
    Brzina procesora:<br>
    od: <input type=\"text\" name=\"cpuSpeedMin\" value=\"\"> do: <input type=\"text\" name=\"cpuSpeedMax\" value=\"\"> 
    <br>
    Velicina diska:<br>
    od: <input type=\"text\" name=\"diskMin\" value=\"\"> do: <input type=\"text\" name=\"diskMax\" value=\"\"> 
    <br>
    Broj jezgara:<br>
    od: <input type=\"text\" name=\"coreMin\" value=\"\"> do: <input type=\"text\" name=\"coreMax\" value=\"\"> 
    <br>
    <input type=\"checkbox\" name=\"sortByPrice\" value=\"sort\"> Sortiraj po ceni
    <br>
    <input type=\"radio\" name=\"priceSortOrder\" value=\"acs\" checked> Rastuce
    <br>
    <input type=\"radio\" name=\"priceSortOrder\" value=\"decs\"> Opadajuce
    <br>
    Kategorija:<br>
    <input type=\"text\" name=\"category\" value=\"Brz\">
    <br><br>
    <input type=\"submit\" value=\"Submit\">
  </form> 

";
    }

    // line 36
    public function block_title($context, array $blocks = [])
    {
        // line 37
        echo "Pretraga po Kategorijama";
        echo "
";
    }

    public function getTemplateName()
    {
        return "Search/showFilters.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 37,  71 => 36,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Search/showFilters.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Search\\showFilters.html");
    }
}
