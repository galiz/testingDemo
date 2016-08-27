<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08311e0a230c4eec925b2a5e32e3384912a6449c49dedf7258cace1ce32c3da7 extends Twig_Template
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
        $__internal_36c9b4dcf03e9287ecab8bb18c75ed86f5844046705c0c79eaee93ce2c35608d = $this->env->getExtension("native_profiler");
        $__internal_36c9b4dcf03e9287ecab8bb18c75ed86f5844046705c0c79eaee93ce2c35608d->enter($__internal_36c9b4dcf03e9287ecab8bb18c75ed86f5844046705c0c79eaee93ce2c35608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c9b4dcf03e9287ecab8bb18c75ed86f5844046705c0c79eaee93ce2c35608d->leave($__internal_36c9b4dcf03e9287ecab8bb18c75ed86f5844046705c0c79eaee93ce2c35608d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d755f59fcd65c0a8f9a04144732792df3c822e3bbbb6657c3d2662105902e2f7 = $this->env->getExtension("native_profiler");
        $__internal_d755f59fcd65c0a8f9a04144732792df3c822e3bbbb6657c3d2662105902e2f7->enter($__internal_d755f59fcd65c0a8f9a04144732792df3c822e3bbbb6657c3d2662105902e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d755f59fcd65c0a8f9a04144732792df3c822e3bbbb6657c3d2662105902e2f7->leave($__internal_d755f59fcd65c0a8f9a04144732792df3c822e3bbbb6657c3d2662105902e2f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfd165887754b314c1b9df4ccb643835b28e1d033b491f1260689d55ef30b69d = $this->env->getExtension("native_profiler");
        $__internal_cfd165887754b314c1b9df4ccb643835b28e1d033b491f1260689d55ef30b69d->enter($__internal_cfd165887754b314c1b9df4ccb643835b28e1d033b491f1260689d55ef30b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfd165887754b314c1b9df4ccb643835b28e1d033b491f1260689d55ef30b69d->leave($__internal_cfd165887754b314c1b9df4ccb643835b28e1d033b491f1260689d55ef30b69d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f818f732d6027c42cd5c07038ba7d2c1d599515eb434e5a20d62212935abf959 = $this->env->getExtension("native_profiler");
        $__internal_f818f732d6027c42cd5c07038ba7d2c1d599515eb434e5a20d62212935abf959->enter($__internal_f818f732d6027c42cd5c07038ba7d2c1d599515eb434e5a20d62212935abf959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f818f732d6027c42cd5c07038ba7d2c1d599515eb434e5a20d62212935abf959->leave($__internal_f818f732d6027c42cd5c07038ba7d2c1d599515eb434e5a20d62212935abf959_prof);

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
