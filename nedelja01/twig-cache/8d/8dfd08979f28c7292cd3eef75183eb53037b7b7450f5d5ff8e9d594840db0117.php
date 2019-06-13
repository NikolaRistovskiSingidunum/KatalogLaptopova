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
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/additionalStyle.css\">
    </head>
    <body>
        <section class=\"container\">
            <header class=\"row\" id=\"main-header\">
                <div class=\"col-12 col-12 col-lg-12  bg-white\">
                    <img class=\"banner\" alt=\"Banner 1\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/site/banner.jpg\">
                </div>
<!-- 
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
        // line 34
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
                </div> -->

                <nav class=\"navbar navbar-expand-lg navbar-light bg-light col col-12\">
                    <a class=\"navbar-brand\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "category1/getAllCategories/\"><i class=\"fa fa-list\"></i> Kategorije</a>
                            <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/register\"><i class=\"fa fa-user-plus\"></i> Registracija</a>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "login/getLogin/\"><i class=\"fa fa-sign-in\"></i> Prijava</a> -->
                            <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fa fa-envelope\"></i> Kontakt</a> -->
                            
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fa fa-tags\"></i> Pregledaj po ceni
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                      <a class=\"dropdown-item\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsSortedByPrice/ASC\"><i class=\"fa fa-tag\"></i> Najbolje</a>
                                      <a class=\"dropdown-item\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsSortedByPrice/DESC\"><i class=\"fa fa-tag\"></i> Bezbrizno</a>
                                      
                                    </div>
                                  </li>

                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getShowFilters/\"><i class=\"fa fa-search\"></i> Trazi po filterima</a>
                                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "laptop/getAllLaptopsByCategoryId/All\"><i class=\"fa fa-search\"></i> Pregledaj Laptopove</a>

                                   
                                  
                                 
                                  

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fa fa-briefcase\"></i> Admin
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                          ";
        // line 86
        if ( !($context["Admin"] ?? null)) {
            echo "  
                                          <a class=\"dropdown-item\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "login/getLogin/\"><i class=\"fa fa-sign-in\"></i> Prijava</a>
                                          ";
        }
        // line 89
        echo "                                          ";
        if (($context["Admin"] ?? null)) {
            // line 90
            echo "                                          <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/unlogAdmin\"><i class=\"fa fa-sign-out\"></i> Odjava</a>
                                          <a class=\"dropdown-item\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/getAdminDashboard/\"><i class=\"fa fa-briefcase\"></i> Radna Soba</a>
                                          ";
        }
        // line 93
        echo "                                        </div>
                                      </li>    
                                      
                                     ";
        // line 96
        if (($context["Admin"] ?? null)) {
            // line 97
            echo "                                     <li class=\"nav-item\"><a class=\"nav-link disabled text-danger\" href=\"#\"><i class=\"fa fa-briefcase\"></i>Ulogovani ste</a>
                                     ";
        }
        // line 98
        echo " 


                        </ul>
                    </div>
                </nav>
            </header>

            <div>             
                ";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 110
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
        // line 122
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/formValidation.js\"></script>

        <!-- <script src=\"";
        // line 126
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

    // line 107
    public function block_main($context, array $blocks = [])
    {
        // line 108
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
        return array (  254 => 108,  251 => 107,  245 => 5,  236 => 126,  231 => 124,  227 => 123,  223 => 122,  209 => 110,  207 => 107,  196 => 98,  192 => 97,  190 => 96,  185 => 93,  180 => 91,  175 => 90,  172 => 89,  167 => 87,  163 => 86,  148 => 74,  144 => 73,  136 => 68,  132 => 67,  121 => 59,  117 => 58,  113 => 57,  103 => 50,  84 => 34,  67 => 20,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\_global\\index.html");
    }
}
