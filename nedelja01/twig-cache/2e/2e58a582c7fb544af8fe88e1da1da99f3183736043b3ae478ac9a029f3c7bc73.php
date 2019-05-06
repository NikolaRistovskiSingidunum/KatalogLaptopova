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

<div class=\"laptops\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["laptops"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["laptop"]) {
            // line 10
            echo "    <div class=\"laptop\">
    <data>
    <li>";
            // line 12
            echo twig_escape_filter($this->env, ("Ime laptopa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_name", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 13
            echo twig_escape_filter($this->env, ("Laptop id: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_id", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 14
            echo ((("Numericka tastatura: " . twig_get_attribute($this->env, $this->source, $context["laptop"], "is_numpad", []))) ? ("YES") : ("NO"));
            echo "</li>
    <li>";
            // line 15
            echo twig_escape_filter($this->env, ("Kreiran: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "created_at", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 16
            echo twig_escape_filter($this->env, ("Raspored dugmica na tastaturi: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "keyboard_layout", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 17
            echo twig_escape_filter($this->env, ("Proizvodjac: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "manufacturer", []))), "html", null, true);
            echo "</li>
    <!-- <li>";
            // line 18
            echo twig_escape_filter($this->env, ("Ime laptopa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_name", []))), "html", null, true);
            echo "</li> -->
    <li>";
            // line 19
            echo twig_escape_filter($this->env, ("Operativni sistem: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "operating_system", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 20
            echo twig_escape_filter($this->env, ("Cena: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "price", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 21
            echo twig_escape_filter($this->env, ("Capacitet RAMa: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "ram_capacity", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 22
            echo twig_escape_filter($this->env, ("Model Graficke Karte: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "gpu_model", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 23
            echo twig_escape_filter($this->env, ("Tip Graficke Karte: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "type", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 24
            echo twig_escape_filter($this->env, ("Velicna video memorije graficke karte : " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "video_memory", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 25
            echo twig_escape_filter($this->env, ("Kategorija: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "category_name", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 26
            echo ((("Da li je Ekran na dodir: " . twig_get_attribute($this->env, $this->source, $context["laptop"], "is_touchscreen", []))) ? ("YES") : ("NO"));
            echo "</li>
    <li>";
            // line 27
            echo twig_escape_filter($this->env, ("Rezolucija: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "resolution", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 28
            echo twig_escape_filter($this->env, ("CPU Broj Jezgarad: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "core_count", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 29
            echo twig_escape_filter($this->env, ("CPU brzina: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "frequency", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 30
            echo twig_escape_filter($this->env, ("CPU proizvodjac: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "cpu_manufactor", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 31
            echo twig_escape_filter($this->env, ("CPU model: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "cpu_model", []))), "html", null, true);
            echo "</li>
    <li>";
            // line 32
            echo twig_escape_filter($this->env, ("img model: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []))), "html", null, true);
            echo "</li>
    </data>
    <img src= ";
            // line 34
            echo twig_escape_filter($this->env, ("/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/laptops/" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []))), "html", null, true);
            echo "></img>
    <button onclick=";
            // line 35
            echo twig_escape_filter($this->env, (("getStorageDetails(" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_id", []))) . ")"), "html", null, true);
            echo "> Detalji </button>
    <div id=";
            // line 36
            echo twig_escape_filter($this->env, ("Details" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "laptop_id", []))), "html", null, true);
            echo ">Detalji</div>
    <!-- <li>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "price", []));
            echo "</li>
    <li>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "image_path", []));
            echo "</li>
    <li>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "operating_system", []));
            echo "</li>
    <li>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "keyboard_layout", []));
            echo "</li>
    <li>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["laptop"], "is_numpad", []));
            echo "</li> -->
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laptop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>



";
    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        // line 50
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
        return array (  184 => 50,  181 => 49,  173 => 44,  164 => 41,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 10,  43 => 9,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Search/showByFilters.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\Search\\showByFilters.html");
    }
}
