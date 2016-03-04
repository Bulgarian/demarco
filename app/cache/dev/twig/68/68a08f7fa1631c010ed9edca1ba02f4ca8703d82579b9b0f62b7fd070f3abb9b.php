<?php

/* base.html.twig */
class __TwigTemplate_b19651f48af41e62fdb58df829f5f73b4f011d82887ff5efb4c4f60b26235088 extends Twig_Template
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
        $__internal_b4d3784ed4894ec89c5ec8af3439799ce1f494705e21210cb2c72489f8204382 = $this->env->getExtension("native_profiler");
        $__internal_b4d3784ed4894ec89c5ec8af3439799ce1f494705e21210cb2c72489f8204382->enter($__internal_b4d3784ed4894ec89c5ec8af3439799ce1f494705e21210cb2c72489f8204382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 31
        echo "
    </head>

    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "    </body>
</html>";
        
        $__internal_b4d3784ed4894ec89c5ec8af3439799ce1f494705e21210cb2c72489f8204382->leave($__internal_b4d3784ed4894ec89c5ec8af3439799ce1f494705e21210cb2c72489f8204382_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d5ffb500277882e921fc71ba20ebfe58e429d1ca37da7cfa61d0413b8d18b1 = $this->env->getExtension("native_profiler");
        $__internal_d9d5ffb500277882e921fc71ba20ebfe58e429d1ca37da7cfa61d0413b8d18b1->enter($__internal_d9d5ffb500277882e921fc71ba20ebfe58e429d1ca37da7cfa61d0413b8d18b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DeMarco - кухни, мебель под заказ, Киев!";
        
        $__internal_d9d5ffb500277882e921fc71ba20ebfe58e429d1ca37da7cfa61d0413b8d18b1->leave($__internal_d9d5ffb500277882e921fc71ba20ebfe58e429d1ca37da7cfa61d0413b8d18b1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4c995dc923e4f6d443ee2d6e3675755e41c5f59bfe831859f1885475ef7bb26 = $this->env->getExtension("native_profiler");
        $__internal_a4c995dc923e4f6d443ee2d6e3675755e41c5f59bfe831859f1885475ef7bb26->enter($__internal_a4c995dc923e4f6d443ee2d6e3675755e41c5f59bfe831859f1885475ef7bb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_a4c995dc923e4f6d443ee2d6e3675755e41c5f59bfe831859f1885475ef7bb26->leave($__internal_a4c995dc923e4f6d443ee2d6e3675755e41c5f59bfe831859f1885475ef7bb26_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adb47179bd28061537b3614c2d781e5061428c0592ca87d585b08a9a814d23ec = $this->env->getExtension("native_profiler");
        $__internal_adb47179bd28061537b3614c2d781e5061428c0592ca87d585b08a9a814d23ec->enter($__internal_adb47179bd28061537b3614c2d781e5061428c0592ca87d585b08a9a814d23ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.fancybox-buttons.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "\"></script>
            <!--[if (gt IE 9)|!(IE)]><!-->
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/wow/wow.js"), "html", null, true);
        echo "\"></script>
            <!--[endif]-->
        ";
        
        $__internal_adb47179bd28061537b3614c2d781e5061428c0592ca87d585b08a9a814d23ec->leave($__internal_adb47179bd28061537b3614c2d781e5061428c0592ca87d585b08a9a814d23ec_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a90147f4eafe394f2f83a55f0ea1a6a0750e04340989d45526c91febb747a3 = $this->env->getExtension("native_profiler");
        $__internal_94a90147f4eafe394f2f83a55f0ea1a6a0750e04340989d45526c91febb747a3->enter($__internal_94a90147f4eafe394f2f83a55f0ea1a6a0750e04340989d45526c91febb747a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "<!--========================================================
                      HEADER
=========================================================-->
            ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 114
        echo "<!--========================================================
                                    CONTENT
=========================================================-->
            <div id=\"content\">
                ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 120
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
        // line 142
        $this->displayBlock('footer_menu', $context, $blocks);
        // line 161
        echo "                            </nav>
                        </div>
                    </div>
                </div>
            </footer>
            <!--JS-->
            ";
        // line 167
        $this->displayBlock('myJavascript', $context, $blocks);
        // line 200
        echo "        ";
        
        $__internal_94a90147f4eafe394f2f83a55f0ea1a6a0750e04340989d45526c91febb747a3->leave($__internal_94a90147f4eafe394f2f83a55f0ea1a6a0750e04340989d45526c91febb747a3_prof);

    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        $__internal_4515ae874124aad5015e4960e4687be8588fa8d5484a41227a3922b3a4ceab20 = $this->env->getExtension("native_profiler");
        $__internal_4515ae874124aad5015e4960e4687be8588fa8d5484a41227a3922b3a4ceab20->enter($__internal_4515ae874124aad5015e4960e4687be8588fa8d5484a41227a3922b3a4ceab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "                <header id=\"header\" class=\"large_header\">
                    <div class=\"header-top parallax parallax-bg-1\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"brand\">
                                        <a href=\"./\">
                                            <figure class=\"brand_logo\">
                                                <img src=\"";
        // line 48
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
        // line 63
        $this->displayBlock('menu', $context, $blocks);
        // line 109
        echo "                            </nav>
                        </div>
                    </div>
                </header>
            ";
        
        $__internal_4515ae874124aad5015e4960e4687be8588fa8d5484a41227a3922b3a4ceab20->leave($__internal_4515ae874124aad5015e4960e4687be8588fa8d5484a41227a3922b3a4ceab20_prof);

    }

    // line 63
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f57bef7772afbc936290d5e6aa241f518153a73676c538cd7f8b7a4bbbb2dd2 = $this->env->getExtension("native_profiler");
        $__internal_1f57bef7772afbc936290d5e6aa241f518153a73676c538cd7f8b7a4bbbb2dd2->enter($__internal_1f57bef7772afbc936290d5e6aa241f518153a73676c538cd7f8b7a4bbbb2dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 64
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
        
        $__internal_1f57bef7772afbc936290d5e6aa241f518153a73676c538cd7f8b7a4bbbb2dd2->leave($__internal_1f57bef7772afbc936290d5e6aa241f518153a73676c538cd7f8b7a4bbbb2dd2_prof);

    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        $__internal_91adb90275488a4c0c050c5343d66861c1ed2b8568ab3305650727e739bc378a = $this->env->getExtension("native_profiler");
        $__internal_91adb90275488a4c0c050c5343d66861c1ed2b8568ab3305650727e739bc378a->enter($__internal_91adb90275488a4c0c050c5343d66861c1ed2b8568ab3305650727e739bc378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 119
        echo "                ";
        
        $__internal_91adb90275488a4c0c050c5343d66861c1ed2b8568ab3305650727e739bc378a->leave($__internal_91adb90275488a4c0c050c5343d66861c1ed2b8568ab3305650727e739bc378a_prof);

    }

    // line 142
    public function block_footer_menu($context, array $blocks = array())
    {
        $__internal_29a26a0168ac9f5e4d32c479b3d539d8c860e675346797ee6748048bd7650494 = $this->env->getExtension("native_profiler");
        $__internal_29a26a0168ac9f5e4d32c479b3d539d8c860e675346797ee6748048bd7650494->enter($__internal_29a26a0168ac9f5e4d32c479b3d539d8c860e675346797ee6748048bd7650494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_menu"));

        // line 143
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
        
        $__internal_29a26a0168ac9f5e4d32c479b3d539d8c860e675346797ee6748048bd7650494->leave($__internal_29a26a0168ac9f5e4d32c479b3d539d8c860e675346797ee6748048bd7650494_prof);

    }

    // line 167
    public function block_myJavascript($context, array $blocks = array())
    {
        $__internal_34ae731e6d10a9b185258c5ae6b24c0bf6d358872e7bfaa72339bc81cb9e13c5 = $this->env->getExtension("native_profiler");
        $__internal_34ae731e6d10a9b185258c5ae6b24c0bf6d358872e7bfaa72339bc81cb9e13c5->enter($__internal_34ae731e6d10a9b185258c5ae6b24c0bf6d358872e7bfaa72339bc81cb9e13c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myJavascript"));

        // line 168
        echo "
                <script>
                    jQuery(document).ready(function () {
                        \$(\"a[data-fancybox-group=group1]\").fancybox({
                            prevEffect\t: 'none',
                            nextEffect\t: 'none',
                            helpers\t: {
                                title\t: {
                                    type: 'outside'
                                },
                                thumbs\t: {
                                    width\t: 50,
                                    height\t: 50
                                }
                            }
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
        
        $__internal_34ae731e6d10a9b185258c5ae6b24c0bf6d358872e7bfaa72339bc81cb9e13c5->leave($__internal_34ae731e6d10a9b185258c5ae6b24c0bf6d358872e7bfaa72339bc81cb9e13c5_prof);

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
        return array (  385 => 168,  379 => 167,  355 => 143,  349 => 142,  342 => 119,  336 => 118,  285 => 64,  279 => 63,  268 => 109,  266 => 63,  248 => 48,  238 => 40,  232 => 39,  225 => 200,  223 => 167,  215 => 161,  213 => 142,  189 => 120,  187 => 118,  181 => 114,  179 => 39,  174 => 36,  168 => 35,  158 => 28,  153 => 26,  149 => 25,  145 => 24,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  116 => 17,  110 => 16,  101 => 13,  97 => 12,  93 => 11,  88 => 10,  82 => 9,  70 => 5,  62 => 201,  60 => 35,  54 => 31,  52 => 16,  49 => 15,  47 => 9,  42 => 7,  37 => 5,  31 => 1,);
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
/*             <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*             <script src="{{ asset('js/superfish.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.fancybox.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.fancybox-buttons.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>*/
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
/* */
/*                 <script>*/
/*                     jQuery(document).ready(function () {*/
/*                         $("a[data-fancybox-group=group1]").fancybox({*/
/*                             prevEffect	: 'none',*/
/*                             nextEffect	: 'none',*/
/*                             helpers	: {*/
/*                                 title	: {*/
/*                                     type: 'outside'*/
/*                                 },*/
/*                                 thumbs	: {*/
/*                                     width	: 50,*/
/*                                     height	: 50*/
/*                                 }*/
/*                             }*/
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
