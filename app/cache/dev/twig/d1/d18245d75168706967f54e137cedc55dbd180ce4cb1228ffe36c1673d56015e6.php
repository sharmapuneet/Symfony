<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e4229c1e36dcea2c5e3ed2209a8f074cba238d9e242a79405e33ed0df7b1771 extends Twig_Template
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
        $__internal_b67eb709c0e5750d998ecabf81d23f477914ff2384d102e12def6e33a010feba = $this->env->getExtension("native_profiler");
        $__internal_b67eb709c0e5750d998ecabf81d23f477914ff2384d102e12def6e33a010feba->enter($__internal_b67eb709c0e5750d998ecabf81d23f477914ff2384d102e12def6e33a010feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67eb709c0e5750d998ecabf81d23f477914ff2384d102e12def6e33a010feba->leave($__internal_b67eb709c0e5750d998ecabf81d23f477914ff2384d102e12def6e33a010feba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c46d5cd54a2b1576b86ecfd626fee7f5d35f34b03bb6a5dc71e9e43111a8e73e = $this->env->getExtension("native_profiler");
        $__internal_c46d5cd54a2b1576b86ecfd626fee7f5d35f34b03bb6a5dc71e9e43111a8e73e->enter($__internal_c46d5cd54a2b1576b86ecfd626fee7f5d35f34b03bb6a5dc71e9e43111a8e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c46d5cd54a2b1576b86ecfd626fee7f5d35f34b03bb6a5dc71e9e43111a8e73e->leave($__internal_c46d5cd54a2b1576b86ecfd626fee7f5d35f34b03bb6a5dc71e9e43111a8e73e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e9f8f0f55346c5a2630a537f4c9af473c17377cabfee8c6fcfebf318d96e676 = $this->env->getExtension("native_profiler");
        $__internal_3e9f8f0f55346c5a2630a537f4c9af473c17377cabfee8c6fcfebf318d96e676->enter($__internal_3e9f8f0f55346c5a2630a537f4c9af473c17377cabfee8c6fcfebf318d96e676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e9f8f0f55346c5a2630a537f4c9af473c17377cabfee8c6fcfebf318d96e676->leave($__internal_3e9f8f0f55346c5a2630a537f4c9af473c17377cabfee8c6fcfebf318d96e676_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52398672d35d216f5998a45e27afff50f5299fea38667b328d1824a9c0c5fad4 = $this->env->getExtension("native_profiler");
        $__internal_52398672d35d216f5998a45e27afff50f5299fea38667b328d1824a9c0c5fad4->enter($__internal_52398672d35d216f5998a45e27afff50f5299fea38667b328d1824a9c0c5fad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52398672d35d216f5998a45e27afff50f5299fea38667b328d1824a9c0c5fad4->leave($__internal_52398672d35d216f5998a45e27afff50f5299fea38667b328d1824a9c0c5fad4_prof);

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
