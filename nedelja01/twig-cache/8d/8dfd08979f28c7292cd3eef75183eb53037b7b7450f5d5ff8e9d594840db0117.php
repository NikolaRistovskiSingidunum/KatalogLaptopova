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

        <link rel=\"stylesheet\" type=\"text/css\" href=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/css/main.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/css/dropdownmenu.css\">
    </head>
    <body  onload=\"getCategories()\">
        <section>
            <header class=\"site-header\">
                <div class=\"banner\">
                    <img alt=\"Banner 1\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/site/banner.png\">
                </div>
                
                <div class=\"social-links\">
                    <a href=\"#\" target=\"_blank\"><img alt=\"FB\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/fb.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"TW\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/tw.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"IG\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/ig.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"LI\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/li.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"YT\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/yt.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"PT\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/social/pt.png\"></a>

              



                </div>

                <div class=\"search-box\">
                    <form method=\"post\" action=\"/nedelja01/search\">
                        <input type=\"text\" placeholder=\"Kljucne reci\" name=\"search\">
                        <button type=\"submit\"><img alt=\"Lupa\" src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/img/search.png\"></button>
                    </form>
                </div>

                <nav class=\"main-menu\">
                    <ul>
                        <li><a href=\"http://localhost/KatalogLaptopova/KatalogLaptopova/nedelja01/laptop/\">Pocetna</a>
                        <li><a href=\"#\">Kategorije</a>
                        <li><a href=\"#\">Registracija</a>
                        <li><a href=\"#\">Prijava</a>
                        <li><a href=\"#\">Kontakt</a>
                        <li><a href=\"http://localhost/KatalogLaptopova/KatalogLaptopova/nedelja01/filteriForma\">Pretraga</a>
                            
                        <li>
                            <!-- stavimo ovde dropdown button dok ne nadjemo bolje mesto -->
                            <div class=\"dropdown\">
                                    <button class=\"dropbtn\">Kategorije</button>
                                    <div id=\"category\" class=\"dropdown-content\">
                                    <!-- <a href=\"#\">Link 1</a>
                                    <a href=\"#\">Link 2</a>
                                    <a href=\"#\">Link 3</a> -->
                                    </div>
                                  </div>
                    </ul>
                </nav>
            </header>

           
                <main>
                    
                    ";
        // line 66
        $this->displayBlock('main', $context, $blocks);
        // line 69
        echo "                </main>
            

            <aside>
                Sajdbar sadrzaj...
            </aside>
            <footer>
                &copy; 2019 PIiVT
            </footer>

            <div id=\"bookmarks\"></div>
        </section>

        <script src=\"/nedelja01/assets/js/bookmarks.js\"></script>
        <script src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/js/details.js\"></script>
        <script src=\"/KatalogLaptopova/KatalogLaptopova/nedelja01/assets/js/category.js\"></script>
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Aukcije";
    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        // line 67
        echo "                    ...
                    ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  126 => 66,  120 => 5,  97 => 69,  95 => 66,  33 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\_global\\index.html");
    }
}
