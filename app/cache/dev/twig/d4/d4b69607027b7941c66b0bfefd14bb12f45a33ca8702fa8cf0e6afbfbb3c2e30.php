<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_15bf49dccb46b4fda4ba9b69c5867675d5b1a044e3905e78461adda9f650c573 extends Twig_Template
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
        $__internal_ef18e5d556027f2750519b6d7471522aab73f5891fd31fe4afdb0e957231ab67 = $this->env->getExtension("native_profiler");
        $__internal_ef18e5d556027f2750519b6d7471522aab73f5891fd31fe4afdb0e957231ab67->enter($__internal_ef18e5d556027f2750519b6d7471522aab73f5891fd31fe4afdb0e957231ab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef18e5d556027f2750519b6d7471522aab73f5891fd31fe4afdb0e957231ab67->leave($__internal_ef18e5d556027f2750519b6d7471522aab73f5891fd31fe4afdb0e957231ab67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f0a188c5a4cdaa1848b05da2358872dd73dd27715edf56439df5ac9f5af9015 = $this->env->getExtension("native_profiler");
        $__internal_4f0a188c5a4cdaa1848b05da2358872dd73dd27715edf56439df5ac9f5af9015->enter($__internal_4f0a188c5a4cdaa1848b05da2358872dd73dd27715edf56439df5ac9f5af9015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f0a188c5a4cdaa1848b05da2358872dd73dd27715edf56439df5ac9f5af9015->leave($__internal_4f0a188c5a4cdaa1848b05da2358872dd73dd27715edf56439df5ac9f5af9015_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b996a584111c2ffd17f412c291a1c927046edb430e6c98b465807a9cd72e63d = $this->env->getExtension("native_profiler");
        $__internal_2b996a584111c2ffd17f412c291a1c927046edb430e6c98b465807a9cd72e63d->enter($__internal_2b996a584111c2ffd17f412c291a1c927046edb430e6c98b465807a9cd72e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b996a584111c2ffd17f412c291a1c927046edb430e6c98b465807a9cd72e63d->leave($__internal_2b996a584111c2ffd17f412c291a1c927046edb430e6c98b465807a9cd72e63d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d92a75a6008172ee0905fd192fe1f960e272de389afea22051764918806316 = $this->env->getExtension("native_profiler");
        $__internal_36d92a75a6008172ee0905fd192fe1f960e272de389afea22051764918806316->enter($__internal_36d92a75a6008172ee0905fd192fe1f960e272de389afea22051764918806316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36d92a75a6008172ee0905fd192fe1f960e272de389afea22051764918806316->leave($__internal_36d92a75a6008172ee0905fd192fe1f960e272de389afea22051764918806316_prof);

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
