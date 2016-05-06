<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fd590ec11207a3b7b14878af98ec6f7001d0616beee8682ac84dae1ec5f76706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b8e892fc7c42dc1eb30626d5a8af3457c47b78ff560fe66fb7b84d9cf5c09d7d = $this->env->getExtension("native_profiler");
        $__internal_b8e892fc7c42dc1eb30626d5a8af3457c47b78ff560fe66fb7b84d9cf5c09d7d->enter($__internal_b8e892fc7c42dc1eb30626d5a8af3457c47b78ff560fe66fb7b84d9cf5c09d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e892fc7c42dc1eb30626d5a8af3457c47b78ff560fe66fb7b84d9cf5c09d7d->leave($__internal_b8e892fc7c42dc1eb30626d5a8af3457c47b78ff560fe66fb7b84d9cf5c09d7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31a979b3caad5868b57a1a4f7351e8da7115a0fff255eed512b7a7b2607e29cf = $this->env->getExtension("native_profiler");
        $__internal_31a979b3caad5868b57a1a4f7351e8da7115a0fff255eed512b7a7b2607e29cf->enter($__internal_31a979b3caad5868b57a1a4f7351e8da7115a0fff255eed512b7a7b2607e29cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_31a979b3caad5868b57a1a4f7351e8da7115a0fff255eed512b7a7b2607e29cf->leave($__internal_31a979b3caad5868b57a1a4f7351e8da7115a0fff255eed512b7a7b2607e29cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d016f790f68185e2fb1704cc794abf327ba0c0e5a5bcf48232f5a0f9c5d8602 = $this->env->getExtension("native_profiler");
        $__internal_0d016f790f68185e2fb1704cc794abf327ba0c0e5a5bcf48232f5a0f9c5d8602->enter($__internal_0d016f790f68185e2fb1704cc794abf327ba0c0e5a5bcf48232f5a0f9c5d8602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0d016f790f68185e2fb1704cc794abf327ba0c0e5a5bcf48232f5a0f9c5d8602->leave($__internal_0d016f790f68185e2fb1704cc794abf327ba0c0e5a5bcf48232f5a0f9c5d8602_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8050759575cda5f6436779ca1c944cf33468aaaab4a77a194aa166e3a0795173 = $this->env->getExtension("native_profiler");
        $__internal_8050759575cda5f6436779ca1c944cf33468aaaab4a77a194aa166e3a0795173->enter($__internal_8050759575cda5f6436779ca1c944cf33468aaaab4a77a194aa166e3a0795173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8050759575cda5f6436779ca1c944cf33468aaaab4a77a194aa166e3a0795173->leave($__internal_8050759575cda5f6436779ca1c944cf33468aaaab4a77a194aa166e3a0795173_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
