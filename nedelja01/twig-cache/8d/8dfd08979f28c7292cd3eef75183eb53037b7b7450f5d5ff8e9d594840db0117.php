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

        <link rel=\"stylesheet\" type=\"text/css\" href=\"/nedelja01/assets/css/main.css\">
    </head>
    <body>
        <section>
            <header class=\"site-header\">
                <div class=\"banner\">
                    <img alt=\"Banner 1\" src=\"/nedelja01/assets/img/site/banner.png\">
                </div>

                <div class=\"social-links\">
                    <a href=\"#\" target=\"_blank\"><img alt=\"FB\" src=\"/nedelja01/assets/img/social/fb.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"TW\" src=\"/nedelja01/assets/img/social/tw.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"IG\" src=\"/nedelja01/assets/img/social/ig.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"LI\" src=\"/nedelja01/assets/img/social/li.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"YT\" src=\"/nedelja01/assets/img/social/yt.png\"></a>
                    <a href=\"#\" target=\"_blank\"><img alt=\"PT\" src=\"/nedelja01/assets/img/social/pt.png\"></a>
                </div>

                <div class=\"search-box\">
                    <form method=\"post\" action=\"/nedelja01/search\">
                        <input type=\"text\" placeholder=\"Kljucne reci\" name=\"search\">
                        <button type=\"submit\"><img alt=\"Lupa\" src=\"/nedelja01/assets/img/search.png\"></button>
                    </form>
                </div>

                <nav class=\"main-menu\">
                    <ul>
                        <li><a href=\"#\">Pocetna</a>
                        <li><a href=\"#\">Kategorije</a>
                        <li><a href=\"#\">Registracija</a>
                        <li><a href=\"#\">Prijava</a>
                        <li><a href=\"#\">Kontakt</a>
                    </ul>
                </nav>
            </header>

            <div class=\"intro\">
            <main >
                ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "            </main>
            </div>

            <aside>
                Sajdbar sadrzaj...
            </aside>
            <footer>
                &copy; 2019 PIiVT
            </footer>

            <div id=\"bookmarks\"></div>
        </section>

        <script src=\"/nedelja01/assets/js/bookmarks.js\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Aukcije";
    }

    // line 47
    public function block_main($context, array $blocks = [])
    {
        // line 48
        echo "                ...
                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  104 => 47,  98 => 5,  78 => 50,  76 => 47,  33 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\xampp\\htdocs\\KatalogLaptopova\\KatalogLaptopova\\nedelja01\\views\\_global\\index.html");
    }
}
