<?php

/* _global/index.html */
class __TwigTemplate_42e84f4bc2ef5a4ce180fff7f86b4c8e98c51be7e3d744d5a8ba7e22b83bf857 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        </title>
        <meta charset=\"utf-8\">

        <!-- <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\"> -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/font-awesome/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/style.css\">
    </head>
    <body>
        <section class=\"container\">
            <header class=\"row\" id=\"main-header\">
                <div class=\"col col-12 col-lg-6\">
                    <img alt=\"Banner 1\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/site/banner.png\">
                </div>

                <div class=\"col col-12 col-lg-6\">
                    <div class=\"social-icons\">
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                        <a href=\"#\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
                    </div>

                    <div>
                        <form method=\"post\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "search\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <input type=\"text\" placeholder=\"Kljucne reci\" name=\"search\" class=\"form-control\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-outline-dark\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <nav class=\"navbar navbar-expand-lg navbar-light bg-light col col-12\">
                    <a class=\"navbar-brand\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "categories\"><i class=\"fa fa-list\"></i> Kategorije</a>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/register\"><i class=\"fa fa-user-plus\"></i> Registracija</a>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login\"><i class=\"fa fa-sign-in\"></i> Prijava</a>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fa fa-envelope\"></i> Kontakt</a>
                        </ul>
                    </div>
                </nav>
            </header>

            <div>
                ";
        // line 65
        $this->displayBlock('main', $context, $blocks);
        // line 68
        echo "            </div>

            <aside>
                Sajdbar sadrzaj...
            </aside>
            <footer>
                &copy; 2019 Praktikum Internet i veb tehnologije
            </footer>

            <div id=\"bookmarks\"></div>
        </section>

        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>

        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/bookmarks.js\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Aukcije";
    }

    // line 65
    public function block_main($context, array $blocks = [])
    {
        // line 66
        echo "                ...
                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 66,  163 => 65,  157 => 5,  149 => 83,  144 => 81,  140 => 80,  126 => 68,  124 => 65,  113 => 57,  109 => 56,  105 => 55,  95 => 48,  76 => 32,  59 => 18,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\_global\\index.html");
    }
}
