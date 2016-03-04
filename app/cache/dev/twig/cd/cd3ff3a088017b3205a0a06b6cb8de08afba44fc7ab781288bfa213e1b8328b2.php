<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_ccfb0e2fafef1b31c0149f4e6949eaad7370fd2dc80ebb4d5e09835c1af013d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6051e0e7e983a9f25c87fecc819740bffb593f7254ebc513ecbd7aea8c518ad8 = $this->env->getExtension("native_profiler");
        $__internal_6051e0e7e983a9f25c87fecc819740bffb593f7254ebc513ecbd7aea8c518ad8->enter($__internal_6051e0e7e983a9f25c87fecc819740bffb593f7254ebc513ecbd7aea8c518ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6051e0e7e983a9f25c87fecc819740bffb593f7254ebc513ecbd7aea8c518ad8->leave($__internal_6051e0e7e983a9f25c87fecc819740bffb593f7254ebc513ecbd7aea8c518ad8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
