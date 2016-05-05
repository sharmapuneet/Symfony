<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77fd79cf9c7408a3777adae64d7f8f7d73e6a80ed8ff3a2a4926f9078990685b extends Twig_Template
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
        $__internal_1c6390dc6ad050c1275d6c038b9fb62b08448e1d75c847d9aebf47dd9a67ef8e = $this->env->getExtension("native_profiler");
        $__internal_1c6390dc6ad050c1275d6c038b9fb62b08448e1d75c847d9aebf47dd9a67ef8e->enter($__internal_1c6390dc6ad050c1275d6c038b9fb62b08448e1d75c847d9aebf47dd9a67ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6390dc6ad050c1275d6c038b9fb62b08448e1d75c847d9aebf47dd9a67ef8e->leave($__internal_1c6390dc6ad050c1275d6c038b9fb62b08448e1d75c847d9aebf47dd9a67ef8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a6df949c2c05c00185af1bb55b95c9b6868ea5fdaff0f19d1aace25c3533e59 = $this->env->getExtension("native_profiler");
        $__internal_0a6df949c2c05c00185af1bb55b95c9b6868ea5fdaff0f19d1aace25c3533e59->enter($__internal_0a6df949c2c05c00185af1bb55b95c9b6868ea5fdaff0f19d1aace25c3533e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a6df949c2c05c00185af1bb55b95c9b6868ea5fdaff0f19d1aace25c3533e59->leave($__internal_0a6df949c2c05c00185af1bb55b95c9b6868ea5fdaff0f19d1aace25c3533e59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10ece2e4597e5551910e72e519d78642e23c75bf823256d3bf06a53c62019329 = $this->env->getExtension("native_profiler");
        $__internal_10ece2e4597e5551910e72e519d78642e23c75bf823256d3bf06a53c62019329->enter($__internal_10ece2e4597e5551910e72e519d78642e23c75bf823256d3bf06a53c62019329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10ece2e4597e5551910e72e519d78642e23c75bf823256d3bf06a53c62019329->leave($__internal_10ece2e4597e5551910e72e519d78642e23c75bf823256d3bf06a53c62019329_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_138b097c39401e8e997ce9dc5b0f6b8959d13fa813bcb494caabe9425c6e66ad = $this->env->getExtension("native_profiler");
        $__internal_138b097c39401e8e997ce9dc5b0f6b8959d13fa813bcb494caabe9425c6e66ad->enter($__internal_138b097c39401e8e997ce9dc5b0f6b8959d13fa813bcb494caabe9425c6e66ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_138b097c39401e8e997ce9dc5b0f6b8959d13fa813bcb494caabe9425c6e66ad->leave($__internal_138b097c39401e8e997ce9dc5b0f6b8959d13fa813bcb494caabe9425c6e66ad_prof);

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
