<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_1ca6cc03d3c2cf41f51d42d96b6a7200d50d391ee13b17f54362a7e8458d82b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b074d75efac2e612c94aa1cf4cba99d209958d7c807d8f8b578829ab62438b = $this->env->getExtension("native_profiler");
        $__internal_e4b074d75efac2e612c94aa1cf4cba99d209958d7c807d8f8b578829ab62438b->enter($__internal_e4b074d75efac2e612c94aa1cf4cba99d209958d7c807d8f8b578829ab62438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e4b074d75efac2e612c94aa1cf4cba99d209958d7c807d8f8b578829ab62438b->leave($__internal_e4b074d75efac2e612c94aa1cf4cba99d209958d7c807d8f8b578829ab62438b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9252072b190c0d282f88ef7016e5ba11f75802fb723755f6a00f5ccb4b0345d9 = $this->env->getExtension("native_profiler");
        $__internal_9252072b190c0d282f88ef7016e5ba11f75802fb723755f6a00f5ccb4b0345d9->enter($__internal_9252072b190c0d282f88ef7016e5ba11f75802fb723755f6a00f5ccb4b0345d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9252072b190c0d282f88ef7016e5ba11f75802fb723755f6a00f5ccb4b0345d9->leave($__internal_9252072b190c0d282f88ef7016e5ba11f75802fb723755f6a00f5ccb4b0345d9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
