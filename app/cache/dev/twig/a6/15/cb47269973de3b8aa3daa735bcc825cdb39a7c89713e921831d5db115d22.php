<?php

/* layout.html.twig */
class __TwigTemplate_a615cb47269973de3b8aa3daa735bcc825cdb39a7c89713e921831d5db115d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>ECE Authentication</title>
    <link rel=\"stylesheet\" href= \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
</head>

<body style=\"text-align: center\">
    <div style=\"width:100%;border-bottom-style:solid;border-width:1px;margin-bottom:30px;border-color:grey\">
        <h1> ECE Authentication</h1>
    </div>

    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
</body>



</html>";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  48 => 13,  39 => 15,  37 => 13,  26 => 5,  20 => 1,);
    }
}
