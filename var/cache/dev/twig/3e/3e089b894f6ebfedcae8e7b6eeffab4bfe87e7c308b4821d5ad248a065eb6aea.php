<?php

/* default/homepage.html.twig */
class __TwigTemplate_047661559093728c44765cbc410e5d6b787b558730f604a916d4ade33393ca47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59464d50a763ce4f1bb4cbbe78e2d4d5ccc284e0d56c77719ed1147f99874bad = $this->env->getExtension("native_profiler");
        $__internal_59464d50a763ce4f1bb4cbbe78e2d4d5ccc284e0d56c77719ed1147f99874bad->enter($__internal_59464d50a763ce4f1bb4cbbe78e2d4d5ccc284e0d56c77719ed1147f99874bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59464d50a763ce4f1bb4cbbe78e2d4d5ccc284e0d56c77719ed1147f99874bad->leave($__internal_59464d50a763ce4f1bb4cbbe78e2d4d5ccc284e0d56c77719ed1147f99874bad_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_87b491b239588354c72bb0faf8b2b818002fede9f29e36d01d5942cccd7071aa = $this->env->getExtension("native_profiler");
        $__internal_87b491b239588354c72bb0faf8b2b818002fede9f29e36d01d5942cccd7071aa->enter($__internal_87b491b239588354c72bb0faf8b2b818002fede9f29e36d01d5942cccd7071aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_87b491b239588354c72bb0faf8b2b818002fede9f29e36d01d5942cccd7071aa->leave($__internal_87b491b239588354c72bb0faf8b2b818002fede9f29e36d01d5942cccd7071aa_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b6e790f540f9dbdf28729b55a756e854e4594126d4c14ae8f2acf6d5321f41e = $this->env->getExtension("native_profiler");
        $__internal_4b6e790f540f9dbdf28729b55a756e854e4594126d4c14ae8f2acf6d5321f41e->enter($__internal_4b6e790f540f9dbdf28729b55a756e854e4594126d4c14ae8f2acf6d5321f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_4b6e790f540f9dbdf28729b55a756e854e4594126d4c14ae8f2acf6d5321f41e->leave($__internal_4b6e790f540f9dbdf28729b55a756e854e4594126d4c14ae8f2acf6d5321f41e_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_848dcf7e60786a5417154887fcc2cc2a28bc545894e7713c8e745a5839446565 = $this->env->getExtension("native_profiler");
        $__internal_848dcf7e60786a5417154887fcc2cc2a28bc545894e7713c8e745a5839446565->enter($__internal_848dcf7e60786a5417154887fcc2cc2a28bc545894e7713c8e745a5839446565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_848dcf7e60786a5417154887fcc2cc2a28bc545894e7713c8e745a5839446565->leave($__internal_848dcf7e60786a5417154887fcc2cc2a28bc545894e7713c8e745a5839446565_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3dc610cfbabb94c42f5e5029d217f3292c27746bcdd535c0b15b71b732ac68 = $this->env->getExtension("native_profiler");
        $__internal_ff3dc610cfbabb94c42f5e5029d217f3292c27746bcdd535c0b15b71b732ac68->enter($__internal_ff3dc610cfbabb94c42f5e5029d217f3292c27746bcdd535c0b15b71b732ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_ff3dc610cfbabb94c42f5e5029d217f3292c27746bcdd535c0b15b71b732ac68->leave($__internal_ff3dc610cfbabb94c42f5e5029d217f3292c27746bcdd535c0b15b71b732ac68_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
