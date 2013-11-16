<?php

/* AcmeDemoBundle:Demo:wenbert.html.twig */
class __TwigTemplate_9b9a95d9c88b58963097b9b625d9cd50cb269a1bfd16cc75e9a2574ed49a02b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    This is a test. This file is in: /src/Acme/DemoBundle/Resources/views/Demo/wenber.html.twig
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:wenbert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
