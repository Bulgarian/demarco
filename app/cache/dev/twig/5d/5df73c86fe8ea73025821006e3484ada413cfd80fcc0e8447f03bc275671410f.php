<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_f5a1c8402546ca369fe7bc8e9bd757ac8b86561a415b9d9b3a9e1e0bc3215d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acb49a53cd9678ddbb4645d1e16d0c641b1a740096447f8ecaae93ae53a95e84 = $this->env->getExtension("native_profiler");
        $__internal_acb49a53cd9678ddbb4645d1e16d0c641b1a740096447f8ecaae93ae53a95e84->enter($__internal_acb49a53cd9678ddbb4645d1e16d0c641b1a740096447f8ecaae93ae53a95e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb49a53cd9678ddbb4645d1e16d0c641b1a740096447f8ecaae93ae53a95e84->leave($__internal_acb49a53cd9678ddbb4645d1e16d0c641b1a740096447f8ecaae93ae53a95e84_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
