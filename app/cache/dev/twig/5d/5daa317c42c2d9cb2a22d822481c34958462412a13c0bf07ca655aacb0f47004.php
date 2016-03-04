<?php

/* AppBundle::gallery.html.twig */
class __TwigTemplate_3091cd17da2bca7d4a3e788621d2487437eb0ab31e2e526aa8254dee11d19765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::gallery.html.twig", 1);
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
        $__internal_7347d21c8cd174aa8548d8c8194ab8e89eb640f9e921e326ad5ca5c2104aecf7 = $this->env->getExtension("native_profiler");
        $__internal_7347d21c8cd174aa8548d8c8194ab8e89eb640f9e921e326ad5ca5c2104aecf7->enter($__internal_7347d21c8cd174aa8548d8c8194ab8e89eb640f9e921e326ad5ca5c2104aecf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7347d21c8cd174aa8548d8c8194ab8e89eb640f9e921e326ad5ca5c2104aecf7->leave($__internal_7347d21c8cd174aa8548d8c8194ab8e89eb640f9e921e326ad5ca5c2104aecf7_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b18a2e2a8029e7dbf8a7052ff5d01edfd60cee4f827e5b18f7d476fb53feaa3 = $this->env->getExtension("native_profiler");
        $__internal_6b18a2e2a8029e7dbf8a7052ff5d01edfd60cee4f827e5b18f7d476fb53feaa3->enter($__internal_6b18a2e2a8029e7dbf8a7052ff5d01edfd60cee4f827e5b18f7d476fb53feaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <ul class=\"sf-menu\">
        <li>
            <a href=\"/\">Главная</a>
        </li>
        <li>
            <a href=\"aboutus\">О нас</a>
        </li>
        <li class=\"active\">
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
        
        $__internal_6b18a2e2a8029e7dbf8a7052ff5d01edfd60cee4f827e5b18f7d476fb53feaa3->leave($__internal_6b18a2e2a8029e7dbf8a7052ff5d01edfd60cee4f827e5b18f7d476fb53feaa3_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae803eb53b533c315b7e4c8aef53c5dc89105c50661c5c0248688971e20ab5d6 = $this->env->getExtension("native_profiler");
        $__internal_ae803eb53b533c315b7e4c8aef53c5dc89105c50661c5c0248688971e20ab5d6->enter($__internal_ae803eb53b533c315b7e4c8aef53c5dc89105c50661c5c0248688971e20ab5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "    <div class=\"block-4 img-bg-1 indent bg-1\">
        <div class=\"container\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["section"] => $context["post"]) {
            // line 54
            echo "                <div class=\"row\">
                    ";
            // line 55
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "
                </div>
                ";
            // line 57
            $context["i"] = 0;
            // line 58
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["post"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                    // line 60
                    echo "                        <div class=\"row\">
                    ";
                }
                // line 62
                echo "                        ";
                echo $this->getAttribute($context["item"], "summary", array());
                echo "
                        ";
                // line 63
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 64
                echo "                    ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                    // line 65
                    echo "                        </div>
                        ";
                    // line 66
                    $context["i"] = 0;
                    // line 67
                    echo "                    ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 3)) {
                // line 70
                echo "                    </div>
                ";
            }
            // line 72
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
    </div>
";
        
        $__internal_ae803eb53b533c315b7e4c8aef53c5dc89105c50661c5c0248688971e20ab5d6->leave($__internal_ae803eb53b533c315b7e4c8aef53c5dc89105c50661c5c0248688971e20ab5d6_prof);

    }

    // line 77
    public function block_footer_menu($context, array $blocks = array())
    {
        $__internal_2aa32fa6aadbb389dba19dda293268a048a6ea420d38783e92f80cf19db6f257 = $this->env->getExtension("native_profiler");
        $__internal_2aa32fa6aadbb389dba19dda293268a048a6ea420d38783e92f80cf19db6f257->enter($__internal_2aa32fa6aadbb389dba19dda293268a048a6ea420d38783e92f80cf19db6f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_menu"));

        // line 78
        echo "    <ul class=\"footer_menu\">
        <li>
            <a href=\"/\">Главная</a>
        </li>
        <li>
            <a href=\"aboutus\">О нас</a>
        </li>
        <li class=\"active\">
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
        
        $__internal_2aa32fa6aadbb389dba19dda293268a048a6ea420d38783e92f80cf19db6f257->leave($__internal_2aa32fa6aadbb389dba19dda293268a048a6ea420d38783e92f80cf19db6f257_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  175 => 77,  166 => 73,  160 => 72,  156 => 70,  153 => 69,  147 => 68,  144 => 67,  142 => 66,  139 => 65,  136 => 64,  134 => 63,  129 => 62,  125 => 60,  122 => 59,  117 => 58,  115 => 57,  110 => 55,  107 => 54,  103 => 53,  99 => 51,  93 => 50,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block menu %}*/
/*     <ul class="sf-menu">*/
/*         <li>*/
/*             <a href="/">Главная</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="aboutus">О нас</a>*/
/*         </li>*/
/*         <li class="active">*/
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
/*     <div class="block-4 img-bg-1 indent bg-1">*/
/*         <div class="container">*/
/*             {% for section, post in posts %}*/
/*                 <div class="row">*/
/*                     {{ section }}*/
/*                 </div>*/
/*                 {% set i = 0 %}*/
/*                 {% for item in post %}*/
/*                     {% if i == 0 %}*/
/*                         <div class="row">*/
/*                     {% endif %}*/
/*                         {{ item.summary|raw }}*/
/*                         {% set i = i + 1 %}*/
/*                     {% if i == 3 %}*/
/*                         </div>*/
/*                         {% set i = 0 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% if i != 3 %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer_menu %}*/
/*     <ul class="footer_menu">*/
/*         <li>*/
/*             <a href="/">Главная</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="aboutus">О нас</a>*/
/*         </li>*/
/*         <li class="active">*/
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
