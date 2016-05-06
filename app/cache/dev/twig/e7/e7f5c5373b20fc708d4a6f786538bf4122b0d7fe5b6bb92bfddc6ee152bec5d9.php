<?php

/* base.html.twig */
class __TwigTemplate_2b869dee72be041b8284af348a4065f75c04fca8e759bf0c9244378cd76d714e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'my_javascripts' => array($this, 'block_my_javascripts'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3e47a70bbecd89eba42919673a360154f96aeaf6a055513d48dcf5345a072a5 = $this->env->getExtension("native_profiler");
        $__internal_b3e47a70bbecd89eba42919673a360154f96aeaf6a055513d48dcf5345a072a5->enter($__internal_b3e47a70bbecd89eba42919673a360154f96aeaf6a055513d48dcf5345a072a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 28
        $this->displayBlock('my_javascripts', $context, $blocks);
        // line 37
        echo "    </head>

    <body id=\"";
        // line 39
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 100
        echo "
        <div class=\"container body-container\">
            ";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "        </div>

        ";
        // line 123
        $this->displayBlock('footer', $context, $blocks);
        // line 142
        echo "
        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "
        
    </body>
</html>
";
        
        $__internal_b3e47a70bbecd89eba42919673a360154f96aeaf6a055513d48dcf5345a072a5->leave($__internal_b3e47a70bbecd89eba42919673a360154f96aeaf6a055513d48dcf5345a072a5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9abe0adf9a284246d0a0b8915b5cfb8045f68a6cfc55fb04d284684b4ad232e = $this->env->getExtension("native_profiler");
        $__internal_d9abe0adf9a284246d0a0b8915b5cfb8045f68a6cfc55fb04d284684b4ad232e->enter($__internal_d9abe0adf9a284246d0a0b8915b5cfb8045f68a6cfc55fb04d284684b4ad232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_d9abe0adf9a284246d0a0b8915b5cfb8045f68a6cfc55fb04d284684b4ad232e->leave($__internal_d9abe0adf9a284246d0a0b8915b5cfb8045f68a6cfc55fb04d284684b4ad232e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebcaa056278166a99542417e67f0b9f9b4f22957335b403c8938f5d28a42d485 = $this->env->getExtension("native_profiler");
        $__internal_ebcaa056278166a99542417e67f0b9f9b4f22957335b403c8938f5d28a42d485->enter($__internal_ebcaa056278166a99542417e67f0b9f9b4f22957335b403c8938f5d28a42d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_ebcaa056278166a99542417e67f0b9f9b4f22957335b403c8938f5d28a42d485->leave($__internal_ebcaa056278166a99542417e67f0b9f9b4f22957335b403c8938f5d28a42d485_prof);

    }

    // line 28
    public function block_my_javascripts($context, array $blocks = array())
    {
        $__internal_7152e7f4059437d14819ad3d63f50b5b989d0601b839b72c2c8bdd7cd2ccc1dd = $this->env->getExtension("native_profiler");
        $__internal_7152e7f4059437d14819ad3d63f50b5b989d0601b839b72c2c8bdd7cd2ccc1dd->enter($__internal_7152e7f4059437d14819ad3d63f50b5b989d0601b839b72c2c8bdd7cd2ccc1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "my_javascripts"));

        // line 29
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d58d21e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58d21e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d58d21e_jquery_1.js");
            // line 34
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "d58d21e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58d21e_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d58d21e_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "d58d21e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58d21e_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d58d21e_carousel_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "d58d21e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58d21e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d58d21e.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_7152e7f4059437d14819ad3d63f50b5b989d0601b839b72c2c8bdd7cd2ccc1dd->leave($__internal_7152e7f4059437d14819ad3d63f50b5b989d0601b839b72c2c8bdd7cd2ccc1dd_prof);

    }

    // line 39
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_df17cea9da67c22b640eefcc578a5ad73435c47a4fc17a72e82c5aea49e6c935 = $this->env->getExtension("native_profiler");
        $__internal_df17cea9da67c22b640eefcc578a5ad73435c47a4fc17a72e82c5aea49e6c935->enter($__internal_df17cea9da67c22b640eefcc578a5ad73435c47a4fc17a72e82c5aea49e6c935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_df17cea9da67c22b640eefcc578a5ad73435c47a4fc17a72e82c5aea49e6c935->leave($__internal_df17cea9da67c22b640eefcc578a5ad73435c47a4fc17a72e82c5aea49e6c935_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_e9cd4ae11bcc12f092d9cec7f53c0271d7930097ca361dae383f024653bf0818 = $this->env->getExtension("native_profiler");
        $__internal_e9cd4ae11bcc12f092d9cec7f53c0271d7930097ca361dae383f024653bf0818->enter($__internal_e9cd4ae11bcc12f092d9cec7f53c0271d7930097ca361dae383f024653bf0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 62
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 79
            echo "                                    <li>
                                        <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 85
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 90
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_e9cd4ae11bcc12f092d9cec7f53c0271d7930097ca361dae383f024653bf0818->leave($__internal_e9cd4ae11bcc12f092d9cec7f53c0271d7930097ca361dae383f024653bf0818_prof);

    }

    // line 62
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_2ddba3dba640f020e537ef41880f2b9dc3ca185db24cbcbf5da3ea32ecfe0059 = $this->env->getExtension("native_profiler");
        $__internal_2ddba3dba640f020e537ef41880f2b9dc3ca185db24cbcbf5da3ea32ecfe0059->enter($__internal_2ddba3dba640f020e537ef41880f2b9dc3ca185db24cbcbf5da3ea32ecfe0059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 63
        echo "                                    <li>
                                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                                        <li>
                                            <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 76
        echo "                                ";
        
        $__internal_2ddba3dba640f020e537ef41880f2b9dc3ca185db24cbcbf5da3ea32ecfe0059->leave($__internal_2ddba3dba640f020e537ef41880f2b9dc3ca185db24cbcbf5da3ea32ecfe0059_prof);

    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        $__internal_52da0de05e11e2c1eda2dcfa2e617f1af3c4249938cf39e2922414c306f893e3 = $this->env->getExtension("native_profiler");
        $__internal_52da0de05e11e2c1eda2dcfa2e617f1af3c4249938cf39e2922414c306f893e3->enter($__internal_52da0de05e11e2c1eda2dcfa2e617f1af3c4249938cf39e2922414c306f893e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 105
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 108
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 111
        $this->displayBlock('sidebar', $context, $blocks);
        // line 118
        echo "                    </div>
                </div>
            ";
        
        $__internal_52da0de05e11e2c1eda2dcfa2e617f1af3c4249938cf39e2922414c306f893e3->leave($__internal_52da0de05e11e2c1eda2dcfa2e617f1af3c4249938cf39e2922414c306f893e3_prof);

    }

    // line 107
    public function block_main($context, array $blocks = array())
    {
        $__internal_ad5ffefe72256c528f363094d968de791a34be6b6090346501517ce6864f28e0 = $this->env->getExtension("native_profiler");
        $__internal_ad5ffefe72256c528f363094d968de791a34be6b6090346501517ce6864f28e0->enter($__internal_ad5ffefe72256c528f363094d968de791a34be6b6090346501517ce6864f28e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ad5ffefe72256c528f363094d968de791a34be6b6090346501517ce6864f28e0->leave($__internal_ad5ffefe72256c528f363094d968de791a34be6b6090346501517ce6864f28e0_prof);

    }

    // line 111
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ec915ce3f7a5d3b7061078fc69e17b582e965a32a4d347a6dfa66762e5a2559a = $this->env->getExtension("native_profiler");
        $__internal_ec915ce3f7a5d3b7061078fc69e17b582e965a32a4d347a6dfa66762e5a2559a->enter($__internal_ec915ce3f7a5d3b7061078fc69e17b582e965a32a4d347a6dfa66762e5a2559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 112
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 115
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 116
        echo "
                        ";
        
        $__internal_ec915ce3f7a5d3b7061078fc69e17b582e965a32a4d347a6dfa66762e5a2559a->leave($__internal_ec915ce3f7a5d3b7061078fc69e17b582e965a32a4d347a6dfa66762e5a2559a_prof);

    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cbea93462c35fb05cf996fccb180781fa2f4e2b5edcda29a3d1c11ae4eef3dbd = $this->env->getExtension("native_profiler");
        $__internal_cbea93462c35fb05cf996fccb180781fa2f4e2b5edcda29a3d1c11ae4eef3dbd->enter($__internal_cbea93462c35fb05cf996fccb180781fa2f4e2b5edcda29a3d1c11ae4eef3dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 124
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 128
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_cbea93462c35fb05cf996fccb180781fa2f4e2b5edcda29a3d1c11ae4eef3dbd->leave($__internal_cbea93462c35fb05cf996fccb180781fa2f4e2b5edcda29a3d1c11ae4eef3dbd_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fabd3fa70f2421183f1a64c80dfb528a639e6428d50bb8d1e62760090eef8512 = $this->env->getExtension("native_profiler");
        $__internal_fabd3fa70f2421183f1a64c80dfb528a639e6428d50bb8d1e62760090eef8512->enter($__internal_fabd3fa70f2421183f1a64c80dfb528a639e6428d50bb8d1e62760090eef8512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "        ";
        // line 155
        echo "
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fabd3fa70f2421183f1a64c80dfb528a639e6428d50bb8d1e62760090eef8512->leave($__internal_fabd3fa70f2421183f1a64c80dfb528a639e6428d50bb8d1e62760090eef8512_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 156,  417 => 155,  415 => 144,  409 => 143,  389 => 129,  385 => 128,  379 => 124,  373 => 123,  365 => 116,  363 => 115,  361 => 112,  355 => 111,  344 => 107,  335 => 118,  333 => 111,  328 => 108,  326 => 107,  321 => 105,  317 => 103,  311 => 102,  304 => 76,  297 => 72,  293 => 71,  290 => 70,  288 => 69,  281 => 65,  277 => 64,  274 => 63,  268 => 62,  254 => 92,  239 => 90,  235 => 89,  229 => 85,  222 => 81,  218 => 80,  215 => 79,  213 => 78,  210 => 77,  208 => 62,  189 => 46,  183 => 42,  177 => 41,  166 => 39,  135 => 34,  130 => 29,  124 => 28,  115 => 25,  112 => 24,  110 => 13,  104 => 12,  92 => 10,  81 => 158,  79 => 143,  76 => 142,  74 => 123,  70 => 121,  68 => 102,  64 => 100,  62 => 41,  57 => 39,  53 => 37,  51 => 28,  46 => 27,  44 => 12,  39 => 10,  33 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony Demo application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block my_javascripts %}*/
/*     {% javascripts*/
/*         '@AppBundle/Resources/public/js/jquery.js'*/
/*         '@AppBundle/Resources/public/js/bootstrap.min.js'*/
/*         '@AppBundle/Resources/public/js/carousel.js'*/
/*     %}*/
/*     <script src="{{ asset_url }}" type="text/javascript"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Symfony Demo*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             {{ render_esi(controller('FrameworkBundle:Template:template', {*/
/*                                 'template': 'blog/about.html.twig',*/
/*                                 'sharedAge': 600,*/
/*                                 '_locale': app.request.locale*/
/*                             })) }}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="http://symfony.com/blog"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         */
/*     </body>*/
/* </html>*/
/* */
