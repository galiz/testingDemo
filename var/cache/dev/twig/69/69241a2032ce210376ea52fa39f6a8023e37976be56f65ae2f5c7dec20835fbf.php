<?php

/* blog/_comment_form.html.twig */
class __TwigTemplate_be33c4a94d31d821349e258ba42ca21956cc91b45d5af212d958f35bbaa4818f extends Twig_Template
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
        $__internal_6db0d77fa08ce6d74e2771d1f8e7e40598787661dba408804a8b1f1a43bdb5c3 = $this->env->getExtension("native_profiler");
        $__internal_6db0d77fa08ce6d74e2771d1f8e7e40598787661dba408804a8b1f1a43bdb5c3->enter($__internal_6db0d77fa08ce6d74e2771d1f8e7e40598787661dba408804a8b1f1a43bdb5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('routing')->getPath("comment_new", array("postSlug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add_comment"), "html", null, true);
        echo "</legend>

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), "vars", array()), "valid", array())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "label.content"));
        echo "

            ";
        // line 26
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.publish_comment"), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6db0d77fa08ce6d74e2771d1f8e7e40598787661dba408804a8b1f1a43bdb5c3->leave($__internal_6db0d77fa08ce6d74e2771d1f8e7e40598787661dba408804a8b1f1a43bdb5c3_prof);

    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  68 => 32,  61 => 28,  55 => 26,  50 => 23,  44 => 22,  38 => 20,  33 => 17,  29 => 15,  25 => 9,  22 => 8,);
    }
}
/* {#*/
/*     By default, forms enable client-side validation. This means that you can't*/
/*     test the server-side validation errors from the browser. To temporarily*/
/*     disable this validation, add the 'novalidate' attribute:*/
/* */
/*     {{ form_start(form, { method: ..., action: ..., attr: { novalidate: 'novalidate' } }) }}*/
/* #}*/
/* */
/* {{ form_start(form, { method: 'POST', action: path('comment_new', { 'postSlug': post.slug }) }) }}*/
/*     {#  instead of displaying form fields one by one, you can also display them*/
/*         all with their default options and styles just by calling to this function:*/
/* */
/*         {{ form_widget(form) }}*/
/*     #}*/
/* */
/*     <fieldset>*/
/*         <legend>{{ 'title.add_comment'|trans }}</legend>*/
/* */
/*         {# Render any global form error (e.g. when a constraint on a public getter method failed) #}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group {% if not form.content.vars.valid %}has-error{% endif %}">*/
/*             {{ form_label(form.content, 'label.content', { label_attr: { class: 'hidden' }}) }}*/
/* */
/*             {# Render any errors for the "content" field (e.g. when a class property constraint failed) #}*/
/*             {{ form_errors(form.content) }}*/
/* */
/*             {{ form_widget(form.content, { attr: { rows: 10 } }) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <button class="btn btn-primary pull-right" type="submit">{{ 'action.publish_comment'|trans }}</button>*/
/*         </div>*/
/*     </fieldset>*/
/* {{ form_end(form) }}*/
/* */
