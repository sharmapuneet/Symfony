<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e58e8c9c37f665673cf64fd13f79b55ca649f21abd49e3cbbe1aade5570277ef extends Twig_Template
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
        $__internal_2156b3842ac278f2a0f887ba279fb9966ffae717ba4be717995a0eb713159ed3 = $this->env->getExtension("native_profiler");
        $__internal_2156b3842ac278f2a0f887ba279fb9966ffae717ba4be717995a0eb713159ed3->enter($__internal_2156b3842ac278f2a0f887ba279fb9966ffae717ba4be717995a0eb713159ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2156b3842ac278f2a0f887ba279fb9966ffae717ba4be717995a0eb713159ed3->leave($__internal_2156b3842ac278f2a0f887ba279fb9966ffae717ba4be717995a0eb713159ed3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fd9fa4c0f14f7cd6d76bc1b2f0a039730645c6d886929d19e378cef7fe1533e = $this->env->getExtension("native_profiler");
        $__internal_9fd9fa4c0f14f7cd6d76bc1b2f0a039730645c6d886929d19e378cef7fe1533e->enter($__internal_9fd9fa4c0f14f7cd6d76bc1b2f0a039730645c6d886929d19e378cef7fe1533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9fd9fa4c0f14f7cd6d76bc1b2f0a039730645c6d886929d19e378cef7fe1533e->leave($__internal_9fd9fa4c0f14f7cd6d76bc1b2f0a039730645c6d886929d19e378cef7fe1533e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16708bd65463f5ec5db7d23986237901eb8572d1f8630d3e81f50228a9fc6115 = $this->env->getExtension("native_profiler");
        $__internal_16708bd65463f5ec5db7d23986237901eb8572d1f8630d3e81f50228a9fc6115->enter($__internal_16708bd65463f5ec5db7d23986237901eb8572d1f8630d3e81f50228a9fc6115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16708bd65463f5ec5db7d23986237901eb8572d1f8630d3e81f50228a9fc6115->leave($__internal_16708bd65463f5ec5db7d23986237901eb8572d1f8630d3e81f50228a9fc6115_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b92fb5a1862b6ec87a8b035e0599dbb0139af8817625949ee2e34945db8a87cd = $this->env->getExtension("native_profiler");
        $__internal_b92fb5a1862b6ec87a8b035e0599dbb0139af8817625949ee2e34945db8a87cd->enter($__internal_b92fb5a1862b6ec87a8b035e0599dbb0139af8817625949ee2e34945db8a87cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b92fb5a1862b6ec87a8b035e0599dbb0139af8817625949ee2e34945db8a87cd->leave($__internal_b92fb5a1862b6ec87a8b035e0599dbb0139af8817625949ee2e34945db8a87cd_prof);

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
