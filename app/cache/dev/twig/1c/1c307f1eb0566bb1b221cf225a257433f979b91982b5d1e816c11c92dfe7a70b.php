<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_d173da14ee4a4d46083213b4a7e098276dc772813b9ec7157c17bd2639cddefc extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41a0f5d19f8f1630d1882f1abf5234df007bfef09bff12c7abdf6bf6d89ffc15 = $this->env->getExtension("native_profiler");
        $__internal_41a0f5d19f8f1630d1882f1abf5234df007bfef09bff12c7abdf6bf6d89ffc15->enter($__internal_41a0f5d19f8f1630d1882f1abf5234df007bfef09bff12c7abdf6bf6d89ffc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a0f5d19f8f1630d1882f1abf5234df007bfef09bff12c7abdf6bf6d89ffc15->leave($__internal_41a0f5d19f8f1630d1882f1abf5234df007bfef09bff12c7abdf6bf6d89ffc15_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
