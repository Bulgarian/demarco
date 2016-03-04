<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0454f673b9a72bb6ec244bf1a6d95191e6aafefa1f7b2b500e5611bfcde1d120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e86fefcd5d51903010e69c0bd46e63feba216b8491bb4bcb94101464addd27 = $this->env->getExtension("native_profiler");
        $__internal_26e86fefcd5d51903010e69c0bd46e63feba216b8491bb4bcb94101464addd27->enter($__internal_26e86fefcd5d51903010e69c0bd46e63feba216b8491bb4bcb94101464addd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e86fefcd5d51903010e69c0bd46e63feba216b8491bb4bcb94101464addd27->leave($__internal_26e86fefcd5d51903010e69c0bd46e63feba216b8491bb4bcb94101464addd27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5845c3a07079199ccbef5c197427699b0c4b946398f8590298531c99ef6aab32 = $this->env->getExtension("native_profiler");
        $__internal_5845c3a07079199ccbef5c197427699b0c4b946398f8590298531c99ef6aab32->enter($__internal_5845c3a07079199ccbef5c197427699b0c4b946398f8590298531c99ef6aab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5845c3a07079199ccbef5c197427699b0c4b946398f8590298531c99ef6aab32->leave($__internal_5845c3a07079199ccbef5c197427699b0c4b946398f8590298531c99ef6aab32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e829266e71d98497f28d49d4c1fca7565df03f1b6402381123e7337254ee52d3 = $this->env->getExtension("native_profiler");
        $__internal_e829266e71d98497f28d49d4c1fca7565df03f1b6402381123e7337254ee52d3->enter($__internal_e829266e71d98497f28d49d4c1fca7565df03f1b6402381123e7337254ee52d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e829266e71d98497f28d49d4c1fca7565df03f1b6402381123e7337254ee52d3->leave($__internal_e829266e71d98497f28d49d4c1fca7565df03f1b6402381123e7337254ee52d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b10e7b64c6e3536067df76a1d562ebf8533c367a6765a243b811d47f7eecf6c = $this->env->getExtension("native_profiler");
        $__internal_8b10e7b64c6e3536067df76a1d562ebf8533c367a6765a243b811d47f7eecf6c->enter($__internal_8b10e7b64c6e3536067df76a1d562ebf8533c367a6765a243b811d47f7eecf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b10e7b64c6e3536067df76a1d562ebf8533c367a6765a243b811d47f7eecf6c->leave($__internal_8b10e7b64c6e3536067df76a1d562ebf8533c367a6765a243b811d47f7eecf6c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
