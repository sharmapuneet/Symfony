<?php

/* default/tweet.html.twig */
class __TwigTemplate_8937e313ecb1034c533fdd517e253bca7aa93c21b86338a3d2d6e0c731016cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/tweet.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c11fcbf372c5197e4db5b709177a57a40dcec4afd01f682753748473fd6b5f9 = $this->env->getExtension("native_profiler");
        $__internal_5c11fcbf372c5197e4db5b709177a57a40dcec4afd01f682753748473fd6b5f9->enter($__internal_5c11fcbf372c5197e4db5b709177a57a40dcec4afd01f682753748473fd6b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/tweet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c11fcbf372c5197e4db5b709177a57a40dcec4afd01f682753748473fd6b5f9->leave($__internal_5c11fcbf372c5197e4db5b709177a57a40dcec4afd01f682753748473fd6b5f9_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8f0eb7930dd4e1149969f8e14dc9ac0bd1f2b4313d8fe2c7675eec53b5fb4cb = $this->env->getExtension("native_profiler");
        $__internal_b8f0eb7930dd4e1149969f8e14dc9ac0bd1f2b4313d8fe2c7675eec53b5fb4cb->enter($__internal_b8f0eb7930dd4e1149969f8e14dc9ac0bd1f2b4313d8fe2c7675eec53b5fb4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.carousel').carousel();
        \$('.carousel-inner .item:first').addClass('active');
    });
</script>
";
        
        $__internal_b8f0eb7930dd4e1149969f8e14dc9ac0bd1f2b4313d8fe2c7675eec53b5fb4cb->leave($__internal_b8f0eb7930dd4e1149969f8e14dc9ac0bd1f2b4313d8fe2c7675eec53b5fb4cb_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4da305f294dcf0e32af733895c3fd5b91c9a7a1de8a0b294fe21706ce264d2a = $this->env->getExtension("native_profiler");
        $__internal_e4da305f294dcf0e32af733895c3fd5b91c9a7a1de8a0b294fe21706ce264d2a->enter($__internal_e4da305f294dcf0e32af733895c3fd5b91c9a7a1de8a0b294fe21706ce264d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<div id=\"myCarousel\" class=\"carousel slide well\">
\t<div class=\"carousel-inner\">
\t\t
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "\t\t<div class=\"item\">
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "text", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t
\t\t</div>
\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
</div>
";
        
        $__internal_e4da305f294dcf0e32af733895c3fd5b91c9a7a1de8a0b294fe21706ce264d2a->leave($__internal_e4da305f294dcf0e32af733895c3fd5b91c9a7a1de8a0b294fe21706ce264d2a_prof);

    }

    public function getTemplateName()
    {
        return "default/tweet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  72 => 20,  69 => 19,  65 => 18,  60 => 15,  54 => 14,  41 => 7,  35 => 6,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/*       */
/* */
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $('.carousel').carousel();*/
/*         $('.carousel-inner .item:first').addClass('active');*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div id="myCarousel" class="carousel slide well">*/
/* 	<div class="carousel-inner">*/
/* 		*/
/* 		{% for message in messages %}*/
/* 		<div class="item">*/
/* 			{{ message.text }}*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 			*/
/* 		</div>*/
/* 	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>*/
/* 	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>*/
/* </div>*/
/* {% endblock %}*/
