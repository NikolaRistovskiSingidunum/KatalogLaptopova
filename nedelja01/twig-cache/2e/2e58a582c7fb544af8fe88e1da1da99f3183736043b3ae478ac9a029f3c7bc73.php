<?php

/* Search/showByFilters.html */
class __TwigTemplate_01881d1da2f40eefb2820992f17911822ffd295524b68a699c2f62e920bd6d49 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Search/showByFilters.html", 1);
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
<p> Pretraga po filterima</p>


";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        // line 11
        echo "Pretraga po Kategorijama";
        echo "
";
    }

    public function getTemplateName()
    {
        return "Search/showByFilters.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Search/showByFilters.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Search\\showByFilters.html");
    }
}
