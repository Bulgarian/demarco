<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f771ec84926804fa2fd6845e42487a6349d677a60cade38b9da779df6df08231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d66fa3a054fb96583a0a14bff4230cdafe6cfb7f18b6c3f1d5a5e5b1208bf3a1 = $this->env->getExtension("native_profiler");
        $__internal_d66fa3a054fb96583a0a14bff4230cdafe6cfb7f18b6c3f1d5a5e5b1208bf3a1->enter($__internal_d66fa3a054fb96583a0a14bff4230cdafe6cfb7f18b6c3f1d5a5e5b1208bf3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66fa3a054fb96583a0a14bff4230cdafe6cfb7f18b6c3f1d5a5e5b1208bf3a1->leave($__internal_d66fa3a054fb96583a0a14bff4230cdafe6cfb7f18b6c3f1d5a5e5b1208bf3a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ccfa41be92d1ecfbebdcccdd6f83885f4ef9a6f388d66f25bcdc780d288fff5 = $this->env->getExtension("native_profiler");
        $__internal_0ccfa41be92d1ecfbebdcccdd6f83885f4ef9a6f388d66f25bcdc780d288fff5->enter($__internal_0ccfa41be92d1ecfbebdcccdd6f83885f4ef9a6f388d66f25bcdc780d288fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ccfa41be92d1ecfbebdcccdd6f83885f4ef9a6f388d66f25bcdc780d288fff5->leave($__internal_0ccfa41be92d1ecfbebdcccdd6f83885f4ef9a6f388d66f25bcdc780d288fff5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab404cdebd74938ad7ad5cd6918b59b116cb47051002ed4539c39864309fde0 = $this->env->getExtension("native_profiler");
        $__internal_fab404cdebd74938ad7ad5cd6918b59b116cb47051002ed4539c39864309fde0->enter($__internal_fab404cdebd74938ad7ad5cd6918b59b116cb47051002ed4539c39864309fde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fab404cdebd74938ad7ad5cd6918b59b116cb47051002ed4539c39864309fde0->leave($__internal_fab404cdebd74938ad7ad5cd6918b59b116cb47051002ed4539c39864309fde0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27e6a90a114fc058dcba45329a79469040ed2ca738d33cab0d28a4097bb7a406 = $this->env->getExtension("native_profiler");
        $__internal_27e6a90a114fc058dcba45329a79469040ed2ca738d33cab0d28a4097bb7a406->enter($__internal_27e6a90a114fc058dcba45329a79469040ed2ca738d33cab0d28a4097bb7a406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27e6a90a114fc058dcba45329a79469040ed2ca738d33cab0d28a4097bb7a406->leave($__internal_27e6a90a114fc058dcba45329a79469040ed2ca738d33cab0d28a4097bb7a406_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
