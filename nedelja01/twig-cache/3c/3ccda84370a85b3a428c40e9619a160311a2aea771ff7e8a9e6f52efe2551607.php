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
            echo twig_escape_filter($this->env, ("Ime laptopa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_name", []))), "html", null, true);
            echo "</li>
<li>";
            // line 9
            echo twig_escape_filter($this->env, ("Laptop id: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_id", []))), "html", null, true);
            echo "</li>
<li>";
            // line 10
            echo ((("Numericka tastatura: " . twig_get_attribute($this->env, $this->source, $context["laptop"], "is_numpad", []))) ? ("YES") : ("NO"));
            echo "</li>
<li>";
            // line 11
            echo twig_escape_filter($this->env, ("Kreiran: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "created_at", []))), "html", null, true);
            echo "</li>
<li>";
            // line 12
            echo twig_escape_filter($this->env, ("Raspored dugmica na tastaturi: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "keyboard_layout", []))), "html", null, true);
            echo "</li>
<li>";
            // line 13
            echo twig_escape_filter($this->env, ("Proizvodjac: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "manufacturer", []))), "html", null, true);
            echo "</li>
<!-- <li>";
            // line 14
            echo twig_escape_filter($this->env, ("Ime laptopa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_name", []))), "html", null, true);
            echo "</li> -->
<li>";
            // line 15
            echo twig_escape_filter($this->env, ("Operativni sistem: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "operating_system", []))), "html", null, true);
            echo "</li>
<li>";
            // line 16
            echo twig_escape_filter($this->env, ("Cena: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "price", []))), "html", null, true);
            echo "</li>
<li>";
            // line 17
            echo twig_escape_filter($this->env, ("Capacitet RAMa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "ram_capacity", []))), "html", null, true);
            echo "</li>
<li>";
            // line 18
            echo twig_escape_filter($this->env, ("Model Graficke Karte: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "gpu_model", []))), "html", null, true);
            echo "</li>
<li>";
            // line 19
            echo twig_escape_filter($this->env, ("Tip Graficke Karte: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "type", []))), "html", null, true);
            echo "</li>
<li>";
            // line 20
            echo twig_escape_filter($this->env, ("Velicna video memorije graficke karte : " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "video_memory", []))), "html", null, true);
            echo "</li>
<li>";
            // line 21
            echo twig_escape_filter($this->env, ("Kategorija: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "category_name", []))), "html", null, true);
            echo "</li>
<li>";
            // line 22
            echo ((("Da li je Ekran na dodir: " . twig_get_attribute($this->env, $this->source, $context["laptop"], "is_touchscreen", []))) ? ("YES") : ("NO"));
            echo "</li>
<li>";
            // line 23
            echo twig_escape_filter($this->env, ("Rezolucija: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "resolution", []))), "html", null, true);
            echo "</li>
<li>";
            // line 24
            echo twig_escape_filter($this->env, ("CPU Broj Jezgarad: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "core_count", []))), "html", null, true);
            echo "</li>
<li>";
            // line 25
            echo twig_escape_filter($this->env, ("CPU brzina: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "frequency", []))), "html", null, true);
            echo "</li>
<li>";
            // line 26
            echo twig_escape_filter($this->env, ("CPU proizvodjac: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "cpu_manufactor", []))), "html", null, true);
            echo "</li>
<li>";
            // line 27
            echo twig_escape_filter($this->env, ("CPU model: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "cpu_model", []))), "html", null, true);
            echo "</li>
<li>";
            // line 28
            echo twig_escape_filter($this->env, ("img model: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []))), "html", null, true);
            echo "</li>


<!-- <li>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "price", []));
            echo "</li>
<li>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []));
            echo "</li>
<li>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "operating_system", []));
            echo "</li>
<li>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "keyboard_layout", []));
            echo "</li>
<li>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "is_numpad", []));
            echo "</li> -->
<br>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laptop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
    }

    // line 41
    public function block_title($context, array $blocks = [])
    {
        // line 42
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
        return array (  166 => 42,  163 => 41,  158 => 39,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  45 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Laptop/show.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Laptop\\show.html");
    }
}
