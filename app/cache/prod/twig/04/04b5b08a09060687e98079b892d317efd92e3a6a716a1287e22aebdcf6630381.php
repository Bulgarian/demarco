<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_ddba93751a27ed3abe3d12393078932296030beb1738e3435d315b17dda0a7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer_menu' => array($this, 'block_footer_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"sf-menu\">
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

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        echo $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "content", array());
        echo "
";
    }

    // line 54
    public function block_footer_menu($context, array $blocks = array())
    {
        // line 55
        echo "    <ul class=\"footer_menu\">
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

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 55,  91 => 54,  84 => 51,  81 => 50,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block menu %}*/
/*     <ul class="sf-menu">*/
/*         <li class="active">*/
/*             <a href="/">Главная</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="aboutus">О нас</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="gallery">Галерея</a>*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="gallery/kitchen">Кухни</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/living_rooms">Гостинные</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/bedrooms">Спальни</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/nursery">Детские</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/wardrobes">Шкафы / Гардеробы</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/bathrooms">Мебель для ванной</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/other">Другое</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="gallery/doors">Двери</a>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*         </li>*/
/*         <li>*/
/*             <a href="projects">Проекты</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="contacts">Контакты</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ posts.content|raw }}*/
/* {% endblock %}*/
/* */
/* {% block footer_menu %}*/
/*     <ul class="footer_menu">*/
/*         <li class="active">*/
/*             <a href="/">Главная</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="aboutus">О нас</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="gallery">Галерея</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="projects">Проекты</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="contacts">Контакты</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
