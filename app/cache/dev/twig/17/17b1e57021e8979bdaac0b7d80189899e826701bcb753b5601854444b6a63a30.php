<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_d98e57f88318c6220a22e2dd8ecb44fbf1b1320d71fa9f175c8455f04c584e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeccaf4afc38db2fabd2d8a10d0be372286c787879eb46b2a1589e50d2838718 = $this->env->getExtension("native_profiler");
        $__internal_aeccaf4afc38db2fabd2d8a10d0be372286c787879eb46b2a1589e50d2838718->enter($__internal_aeccaf4afc38db2fabd2d8a10d0be372286c787879eb46b2a1589e50d2838718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeccaf4afc38db2fabd2d8a10d0be372286c787879eb46b2a1589e50d2838718->leave($__internal_aeccaf4afc38db2fabd2d8a10d0be372286c787879eb46b2a1589e50d2838718_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9dc0b09f9a1876948dac8098b588f3c71e07eb9479cb94dac61d748489fb3f1e = $this->env->getExtension("native_profiler");
        $__internal_9dc0b09f9a1876948dac8098b588f3c71e07eb9479cb94dac61d748489fb3f1e->enter($__internal_9dc0b09f9a1876948dac8098b588f3c71e07eb9479cb94dac61d748489fb3f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_9dc0b09f9a1876948dac8098b588f3c71e07eb9479cb94dac61d748489fb3f1e->leave($__internal_9dc0b09f9a1876948dac8098b588f3c71e07eb9479cb94dac61d748489fb3f1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
