<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ab7cc77fca2b14a47e5d8a86e791729c6fd61e6455c29f1979bff6826ab9d9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cf16e50e773eb6106b5b5dec31946743e989b30c8f3cdc8fa47d6467b8c4178 = $this->env->getExtension("native_profiler");
        $__internal_0cf16e50e773eb6106b5b5dec31946743e989b30c8f3cdc8fa47d6467b8c4178->enter($__internal_0cf16e50e773eb6106b5b5dec31946743e989b30c8f3cdc8fa47d6467b8c4178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_0cf16e50e773eb6106b5b5dec31946743e989b30c8f3cdc8fa47d6467b8c4178->leave($__internal_0cf16e50e773eb6106b5b5dec31946743e989b30c8f3cdc8fa47d6467b8c4178_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
