<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_c9ad03a5659bd6319a5bac7071f9ddc94093a01ab86dfcec514b7dc4683490f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_348dfa00fde3d67bdc333a2b179448cb689a8281988c3954d4ec5e79c2a4e6d2 = $this->env->getExtension("native_profiler");
        $__internal_348dfa00fde3d67bdc333a2b179448cb689a8281988c3954d4ec5e79c2a4e6d2->enter($__internal_348dfa00fde3d67bdc333a2b179448cb689a8281988c3954d4ec5e79c2a4e6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_348dfa00fde3d67bdc333a2b179448cb689a8281988c3954d4ec5e79c2a4e6d2->leave($__internal_348dfa00fde3d67bdc333a2b179448cb689a8281988c3954d4ec5e79c2a4e6d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
