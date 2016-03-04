<?php

/* base.html.twig */
class __TwigTemplate_8cc05ff0f60e1704a89856d26c660f406586de5843b13de9516fc1aa8ae63a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer_menu' => array($this, 'block_footer_menu'),
            'myJavascript' => array($this, 'block_myJavascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
    </head>

    <body>
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "DeMarco - кухни, мебель под заказ, Киев!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "\"></script>
            <!--[if (gt IE 9)|!(IE)]><!-->
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow/wow.js"), "html", null, true);
        echo "\"></script>
            <!--[endif]-->
        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "<!--========================================================
                      HEADER
=========================================================-->
            ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 112
        echo "<!--========================================================
                                    CONTENT
=========================================================-->
            <div id=\"content\">
                ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "            </div>
<!--========================================================
                                      FOOTER
=========================================================-->
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"brand\">
                                <a href=\"/\">
                                    <h1 class=\"brand_name\">DEMARCO</h1>
                                    <!--<figure class=\"brand_logo\">
                                        <img src=\"img/logo.png\" alt=\"logo\">
                                      </figure>-->
                                </a>
                            </div>
                            <div class=\"privacy_policy\">
                                <div class=\"copyright\">© <span id=\"copyright-year\"></span> All Rights Reserved</div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <nav class=\"nav\">
                                ";
        // line 140
        $this->displayBlock('footer_menu', $context, $blocks);
        // line 159
        echo "                            </nav>
                        </div>
                    </div>
                </div>
            </footer>
            <!--JS-->
            ";
        // line 165
        $this->displayBlock('myJavascript', $context, $blocks);
        // line 200
        echo "        ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "                <header id=\"header\" class=\"large_header\">
                    <div class=\"header-top parallax parallax-bg-1\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"brand\">
                                        <a href=\"./\">
                                            <figure class=\"brand_logo\">
                                                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class=\"box box-1\">
                                        <h3>Долговечность мебели – результат нашей работы</h3>
                                    </div>
                                    <h5>Студия кухонь. Мебель под заказ.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"stuck_container\" class=\"stuck_container\">
                        <div class=\"header-bottom\">
                            <nav class=\"navbar navbar-default navbar-static-top tm_navbar clearfix\">
                                ";
        // line 61
        $this->displayBlock('menu', $context, $blocks);
        // line 107
        echo "                            </nav>
                        </div>
                    </div>
                </header>
            ";
    }

    // line 61
    public function block_menu($context, array $blocks = array())
    {
        // line 62
        echo "                                    <ul class=\"sf-menu\">
                                        <li class=\"active\">
                                            <a href=\"/\">Главная</a>
                                        </li>
                                        <li>
                                            <a href=\"aboutus\">О нас</a>
                                        </li>
                                        <li>
                                            <a href=\"gallery\">Галерея</a>
                                            <ul>
                                                <li>
                                                    <a href=\"gallery/kitchen\">Кухни</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/living_rooms\">Гостинные</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/bedrooms\">Спальни</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/nursery\">Детские</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/wardrobes\">Шкафы / Гардеробы</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/bathrooms\">Мебель для ванной</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/other\">Другое</a>
                                                </li>
                                                <li>
                                                    <a href=\"gallery/doors\">Двери</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href=\"projects\">Проекты</a>
                                        </li>
                                        <li>
                                            <a href=\"contacts\">Контакты</a>
                                        </li>
                                    </ul>
                                ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "                ";
    }

    // line 140
    public function block_footer_menu($context, array $blocks = array())
    {
        // line 141
        echo "                                    <ul class=\"footer_menu\">
                                        <li class=\"active\">
                                            <a href=\"/\">Главная</a>
                                        </li>
                                        <li>
                                            <a href=\"aboutus\">О нас</a>
                                        </li>
                                        <li>
                                            <a href=\"gallery\">Галерея</a>
                                        </li>
                                        <li>
                                            <a href=\"projects\">Проекты</a>
                                        </li>
                                        <li>
                                            <a href=\"contacts\">Контакты</a>
                                        </li>
                                    </ul>
                                ";
    }

    // line 165
    public function block_myJavascript($context, array $blocks = array())
    {
        // line 166
        echo "                <script>
                    jQuery(document).ready(function () {
                        var owl = jQuery('.owl-carousel');
                        owl.owlCarousel({
                            items: 1,
                            dots: true,
                            dotData: true,
                            nav: false,
                            startPosition: 2,
                            768 : {
                                margin: 180,
                                stagePadding: 55,
                            },
                            0 : {
                                margin: 55,
                                stagePadding: 55,
                            },
                        });

                        if (\$('html').hasClass('desktop')) {
                            new WOW().init();
                        }
                    });

                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-65758840-1', 'auto');
                    ga('send', 'pageview');

                </script>
            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 166,  317 => 165,  296 => 141,  293 => 140,  289 => 117,  286 => 116,  238 => 62,  235 => 61,  227 => 107,  225 => 61,  207 => 46,  197 => 38,  194 => 37,  190 => 200,  188 => 165,  180 => 159,  178 => 140,  154 => 118,  152 => 116,  146 => 112,  144 => 37,  139 => 34,  136 => 33,  129 => 26,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  95 => 17,  92 => 16,  86 => 13,  82 => 12,  78 => 11,  73 => 10,  70 => 9,  64 => 5,  59 => 201,  57 => 33,  51 => 29,  49 => 16,  46 => 15,  44 => 9,  39 => 7,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}DeMarco - кухни, мебель под заказ, Киев!{% endblock %}</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />*/
/* */
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('css/style.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*             <script src="{{ asset('js/superfish.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>*/
/*             <script src="{{ asset('js/owl.carousel.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('js/tm-scripts.js') }}"></script>*/
/*             <!--[if (gt IE 9)|!(IE)]><!-->*/
/*             <script src="{{ asset('js/wow/wow.js')}}"></script>*/
/*             <!--[endif]-->*/
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         {% block body %}*/
/* <!--========================================================*/
/*                       HEADER*/
/* =========================================================-->*/
/*             {% block header %}*/
/*                 <header id="header" class="large_header">*/
/*                     <div class="header-top parallax parallax-bg-1">*/
/*                         <div class="container">*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <div class="brand">*/
/*                                         <a href="./">*/
/*                                             <figure class="brand_logo">*/
/*                                                 <img src="{{ asset('img/logo.png') }}" alt="logo">*/
/*                                             </figure>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="box box-1">*/
/*                                         <h3>Долговечность мебели – результат нашей работы</h3>*/
/*                                     </div>*/
/*                                     <h5>Студия кухонь. Мебель под заказ.</h5>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div id="stuck_container" class="stuck_container">*/
/*                         <div class="header-bottom">*/
/*                             <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix">*/
/*                                 {% block menu %}*/
/*                                     <ul class="sf-menu">*/
/*                                         <li class="active">*/
/*                                             <a href="/">Главная</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="aboutus">О нас</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="gallery">Галерея</a>*/
/*                                             <ul>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/kitchen">Кухни</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/living_rooms">Гостинные</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/bedrooms">Спальни</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/nursery">Детские</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/wardrobes">Шкафы / Гардеробы</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/bathrooms">Мебель для ванной</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/other">Другое</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="gallery/doors">Двери</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/* */
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="projects">Проекты</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="contacts">Контакты</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 {% endblock %}*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </header>*/
/*             {% endblock %}*/
/* <!--========================================================*/
/*                                     CONTENT*/
/* =========================================================-->*/
/*             <div id="content">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* <!--========================================================*/
/*                                       FOOTER*/
/* =========================================================-->*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">*/
/*                             <div class="brand">*/
/*                                 <a href="/">*/
/*                                     <h1 class="brand_name">DEMARCO</h1>*/
/*                                     <!--<figure class="brand_logo">*/
/*                                         <img src="img/logo.png" alt="logo">*/
/*                                       </figure>-->*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="privacy_policy">*/
/*                                 <div class="copyright">© <span id="copyright-year"></span> All Rights Reserved</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">*/
/*                             <nav class="nav">*/
/*                                 {% block footer_menu %}*/
/*                                     <ul class="footer_menu">*/
/*                                         <li class="active">*/
/*                                             <a href="/">Главная</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="aboutus">О нас</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="gallery">Галерея</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="projects">Проекты</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="contacts">Контакты</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 {% endblock %}*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*             <!--JS-->*/
/*             {% block myJavascript %}*/
/*                 <script>*/
/*                     jQuery(document).ready(function () {*/
/*                         var owl = jQuery('.owl-carousel');*/
/*                         owl.owlCarousel({*/
/*                             items: 1,*/
/*                             dots: true,*/
/*                             dotData: true,*/
/*                             nav: false,*/
/*                             startPosition: 2,*/
/*                             768 : {*/
/*                                 margin: 180,*/
/*                                 stagePadding: 55,*/
/*                             },*/
/*                             0 : {*/
/*                                 margin: 55,*/
/*                                 stagePadding: 55,*/
/*                             },*/
/*                         });*/
/* */
/*                         if ($('html').hasClass('desktop')) {*/
/*                             new WOW().init();*/
/*                         }*/
/*                     });*/
/* */
/*                     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*                             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*                     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*                     ga('create', 'UA-65758840-1', 'auto');*/
/*                     ga('send', 'pageview');*/
/* */
/*                 </script>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
