<?php

/* Main/home.html */
class __TwigTemplate_c302e2a143f84ce86a7a2a6a1cd10077210e6f18da15e4a2b6845d6143d73b11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->blocks = [
            'main' => [$this, 'block_main'],
            'naslov' => [$this, 'block_naslov'],
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
<div class=\"jumbotron\">
    <h1 class=\"display-4\">Hello, world!</h1>
    <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class=\"my-4\">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class=\"lead\">
      <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
    </p>
  </div>

";
    }

    // line 17
    public function block_naslov($context, array $blocks = [])
    {
        // line 18
        echo "Spisak kategorija
";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 17,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/home.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Main\\home.html");
    }
}
