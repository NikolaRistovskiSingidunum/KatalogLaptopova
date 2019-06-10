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
        <!-- <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/style.css\"> -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/listStyle.css\">
    </head>
    <body>
        <section class=\"container\">
            <header class=\"row\" id=\"main-header\">
                <div class=\"col col-12 col-lg-6\">
                    <img alt=\"Banner 1\" src=\"";
        // line 19
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
        // line 33
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
        // line 49
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "category1/getAllCategories/\"><i class=\"fa fa-list\"></i> Kategorije</a>
                            <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/register\"><i class=\"fa fa-user-plus\"></i> Registracija</a>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "login/getLogin/\"><i class=\"fa fa-sign-in\"></i> Prijava</a> -->
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fa fa-envelope\"></i> Kontakt</a>
                            
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fa fa-tags\"></i> Pregledaj po ceni
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                      <a class=\"dropdown-item\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsSortedByPrice/ASC\"><i class=\"fa fa-tag\"></i> Najbolje</a>
                                      <a class=\"dropdown-item\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsSortedByPrice/DESC\"><i class=\"fa fa-tag\"></i> Bezbrizno</a>
                                      
                                    </div>
                                  </li>

                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getShowFilters/\"><i class=\"fa fa-search\"></i> Trazi po filterima</a>
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsByCategoryId/All\"><i class=\"fa fa-search\"></i> Pregledaj Laptopove</a>

                                   
                                  
                                 
                                  

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fa fa-briefcase\"></i> Admin
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                          ";
        // line 85
        if ( !($context["Admin"] ?? null)) {
            echo "  
                                          <a class=\"dropdown-item\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "login/getLogin/\"><i class=\"fa fa-sign-in\"></i> Prijava</a>
                                          ";
        }
        // line 88
        echo "                                          ";
        if (($context["Admin"] ?? null)) {
            // line 89
            echo "                                          <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/unlogAdmin\"><i class=\"fa fa-sign-out\"></i> Odjava</a>
                                          <a class=\"dropdown-item\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/getAdminDashboard/\"><i class=\"fa fa-briefcase\"></i> Radna Soba</a>
                                          ";
        }
        // line 92
        echo "                                        </div>
                                      </li>    
                                      
                                     ";
        // line 95
        if (($context["Admin"] ?? null)) {
            // line 96
            echo "                                     <li class=\"nav-item\"><a class=\"nav-link disabled text-danger\" href=\"#\"><i class=\"fa fa-briefcase\"></i>Ulogovani ste</a>
                                     ";
        }
        // line 97
        echo " 


                        </ul>
                    </div>
                </nav>
            </header>

            <div>             
                ";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        // line 109
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
        // line 121
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
        

        <!-- <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/bookmarks.js\"></script> -->
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Aukcije";
    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        // line 107
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
        return array (  247 => 107,  244 => 106,  238 => 5,  229 => 125,  223 => 122,  219 => 121,  205 => 109,  203 => 106,  192 => 97,  188 => 96,  186 => 95,  181 => 92,  176 => 90,  171 => 89,  168 => 88,  163 => 86,  159 => 85,  144 => 73,  140 => 72,  132 => 67,  128 => 66,  117 => 58,  113 => 57,  109 => 56,  99 => 49,  80 => 33,  63 => 19,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\_global\\index.html");
    }
}
