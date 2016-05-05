<?php

/* KnpLastTweetsBundle:Tweet:lastTweets.html.twig */
class __TwigTemplate_2a9aafedb902f2ca1bed153a168e7a5e45cdfa772112a08f2dff43e54bae1853 extends Twig_Template
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
        $__internal_503f864f37bb2271b243684becef912cecbb72d42600143ac6f5f133f0ef7be7 = $this->env->getExtension("native_profiler");
        $__internal_503f864f37bb2271b243684becef912cecbb72d42600143ac6f5f133f0ef7be7->enter($__internal_503f864f37bb2271b243684becef912cecbb72d42600143ac6f5f133f0ef7be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpLastTweetsBundle:Tweet:lastTweets.html.twig"));

        // line 1
        echo "<section class=\"knp_last_tweets\">
    ";
        // line 2
        if ((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets"))) {
            // line 3
            echo "        <ul>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets")));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 5
                echo "            <li>";
                echo $this->env->getExtension('knp_tweet_urlize')->filterTweet(twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "text", array()), "html", null, true));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </ul>
    ";
        } else {
            // line 9
            echo "        No tweets
    ";
        }
        // line 11
        echo "</section>
";
        
        $__internal_503f864f37bb2271b243684becef912cecbb72d42600143ac6f5f133f0ef7be7->leave($__internal_503f864f37bb2271b243684becef912cecbb72d42600143ac6f5f133f0ef7be7_prof);

    }

    public function getTemplateName()
    {
        return "KnpLastTweetsBundle:Tweet:lastTweets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 9,  43 => 7,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <section class="knp_last_tweets">*/
/*     {% if tweets %}*/
/*         <ul>*/
/*         {% for tweet in tweets %}*/
/*             <li>{{ tweet.text|knp_tweet_urlize }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         No tweets*/
/*     {% endif %}*/
/* </section>*/
/* */
