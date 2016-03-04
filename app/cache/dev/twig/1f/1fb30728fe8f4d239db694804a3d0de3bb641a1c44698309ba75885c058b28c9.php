<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d5db19b0a8ca8404d467a9497ab61e2190f03ac83b249bcc4e6a0888f2272b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e2f387cc0fb4df1f9c4600e6cb41c02b558c5edd3f30db2b1dca4779c9f852f = $this->env->getExtension("native_profiler");
        $__internal_5e2f387cc0fb4df1f9c4600e6cb41c02b558c5edd3f30db2b1dca4779c9f852f->enter($__internal_5e2f387cc0fb4df1f9c4600e6cb41c02b558c5edd3f30db2b1dca4779c9f852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2f387cc0fb4df1f9c4600e6cb41c02b558c5edd3f30db2b1dca4779c9f852f->leave($__internal_5e2f387cc0fb4df1f9c4600e6cb41c02b558c5edd3f30db2b1dca4779c9f852f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
