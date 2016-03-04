<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_ccdbb2d4ed5537aab69dbc34a92eec71ef239f5789a7e47d3dc7f77b31512102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93ce77fc1045db9029c898da91e1e30689d11ccc0c376b4308d8a06b8c0c7103 = $this->env->getExtension("native_profiler");
        $__internal_93ce77fc1045db9029c898da91e1e30689d11ccc0c376b4308d8a06b8c0c7103->enter($__internal_93ce77fc1045db9029c898da91e1e30689d11ccc0c376b4308d8a06b8c0c7103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ce77fc1045db9029c898da91e1e30689d11ccc0c376b4308d8a06b8c0c7103->leave($__internal_93ce77fc1045db9029c898da91e1e30689d11ccc0c376b4308d8a06b8c0c7103_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
