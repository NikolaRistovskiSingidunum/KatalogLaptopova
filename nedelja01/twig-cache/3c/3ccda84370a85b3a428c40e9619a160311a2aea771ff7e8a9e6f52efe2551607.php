<?php

/* Laptop/show.html */
class __TwigTemplate_8008cb801266d8fc967825525f7690bf62e1ddda4a0a7572510340f471cbbd85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Laptop/show.html", 1);
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
        echo "<h1> OVO JE NEKI POVECI TEKST a</h1>

<h1>Members</h1>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["laptops"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["laptop"]) {
            // line 8
            echo "<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "name", []));
            echo "</li>
<li>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "price", []));
            echo "</li>
<li>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []));
            echo "</li>
<li>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "operating_system", []));
            echo "</li>
<li>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "keyboard_layout", []));
            echo "</li>
<li>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "is_numpad", []));
            echo "</li>
<br>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laptop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        // line 20
        echo "Katalog Laptopova";
        echo "
";
    }

    public function getTemplateName()
    {
        return "Laptop/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  76 => 17,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  45 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Laptop/show.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Laptop\\show.html");
    }
}
