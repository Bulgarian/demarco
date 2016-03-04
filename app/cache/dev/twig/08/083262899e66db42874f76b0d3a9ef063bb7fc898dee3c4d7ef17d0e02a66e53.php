<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1cb32b01cbc14b74c1b2332528a43392c5ef140b30c0e212ebe0272af33ad1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f10f439a905de6398dd43375664a8bc2b40607b070a201f05cb40ede56b0300 = $this->env->getExtension("native_profiler");
        $__internal_1f10f439a905de6398dd43375664a8bc2b40607b070a201f05cb40ede56b0300->enter($__internal_1f10f439a905de6398dd43375664a8bc2b40607b070a201f05cb40ede56b0300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f10f439a905de6398dd43375664a8bc2b40607b070a201f05cb40ede56b0300->leave($__internal_1f10f439a905de6398dd43375664a8bc2b40607b070a201f05cb40ede56b0300_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_68b5f50a7cd0be2dd2a5478bee7d05c6e0ffa368f403c90b3ed8d6be2c564e3c = $this->env->getExtension("native_profiler");
        $__internal_68b5f50a7cd0be2dd2a5478bee7d05c6e0ffa368f403c90b3ed8d6be2c564e3c->enter($__internal_68b5f50a7cd0be2dd2a5478bee7d05c6e0ffa368f403c90b3ed8d6be2c564e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_68b5f50a7cd0be2dd2a5478bee7d05c6e0ffa368f403c90b3ed8d6be2c564e3c->leave($__internal_68b5f50a7cd0be2dd2a5478bee7d05c6e0ffa368f403c90b3ed8d6be2c564e3c_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_27d22ae08c0f2100345fa27b15a64457f16dcaec477cfd4e07ffe971cada6a78 = $this->env->getExtension("native_profiler");
        $__internal_27d22ae08c0f2100345fa27b15a64457f16dcaec477cfd4e07ffe971cada6a78->enter($__internal_27d22ae08c0f2100345fa27b15a64457f16dcaec477cfd4e07ffe971cada6a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_27d22ae08c0f2100345fa27b15a64457f16dcaec477cfd4e07ffe971cada6a78->leave($__internal_27d22ae08c0f2100345fa27b15a64457f16dcaec477cfd4e07ffe971cada6a78_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5142cb55e494a476464d0c26774f0cca51c863e175aff0c2cc292551c1c25c3c = $this->env->getExtension("native_profiler");
        $__internal_5142cb55e494a476464d0c26774f0cca51c863e175aff0c2cc292551c1c25c3c->enter($__internal_5142cb55e494a476464d0c26774f0cca51c863e175aff0c2cc292551c1c25c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_5142cb55e494a476464d0c26774f0cca51c863e175aff0c2cc292551c1c25c3c->leave($__internal_5142cb55e494a476464d0c26774f0cca51c863e175aff0c2cc292551c1c25c3c_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b9688c05ce9a025b914c2734b382868aa2890aa12f651b5024e6bb4840047aaf = $this->env->getExtension("native_profiler");
        $__internal_b9688c05ce9a025b914c2734b382868aa2890aa12f651b5024e6bb4840047aaf->enter($__internal_b9688c05ce9a025b914c2734b382868aa2890aa12f651b5024e6bb4840047aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_b9688c05ce9a025b914c2734b382868aa2890aa12f651b5024e6bb4840047aaf->leave($__internal_b9688c05ce9a025b914c2734b382868aa2890aa12f651b5024e6bb4840047aaf_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_5b0d3e04c59d1b2acbf3a1d1be72807568ee57b61b1c65af918f11ef63d1e228 = $this->env->getExtension("native_profiler");
        $__internal_5b0d3e04c59d1b2acbf3a1d1be72807568ee57b61b1c65af918f11ef63d1e228->enter($__internal_5b0d3e04c59d1b2acbf3a1d1be72807568ee57b61b1c65af918f11ef63d1e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_5b0d3e04c59d1b2acbf3a1d1be72807568ee57b61b1c65af918f11ef63d1e228->leave($__internal_5b0d3e04c59d1b2acbf3a1d1be72807568ee57b61b1c65af918f11ef63d1e228_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock%}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:acl_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
