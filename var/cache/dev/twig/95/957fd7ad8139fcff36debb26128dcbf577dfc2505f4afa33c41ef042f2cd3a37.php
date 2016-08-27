<?php

/* form/fields.html.twig */
class __TwigTemplate_5e159e9f9a6105a4accc319774133aef541c4568caaa8cce3d71433a11c74789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b62141e5c0d215617051b33cffd5a7e4272326978c8c9ef6c44d51265afe81b6 = $this->env->getExtension("native_profiler");
        $__internal_b62141e5c0d215617051b33cffd5a7e4272326978c8c9ef6c44d51265afe81b6->enter($__internal_b62141e5c0d215617051b33cffd5a7e4272326978c8c9ef6c44d51265afe81b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_b62141e5c0d215617051b33cffd5a7e4272326978c8c9ef6c44d51265afe81b6->leave($__internal_b62141e5c0d215617051b33cffd5a7e4272326978c8c9ef6c44d51265afe81b6_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_1d8abf9e1bc4425b75e6584b79268f14f5f2e0883739165186c7019b632e0b05 = $this->env->getExtension("native_profiler");
        $__internal_1d8abf9e1bc4425b75e6584b79268f14f5f2e0883739165186c7019b632e0b05->enter($__internal_1d8abf9e1bc4425b75e6584b79268f14f5f2e0883739165186c7019b632e0b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1d8abf9e1bc4425b75e6584b79268f14f5f2e0883739165186c7019b632e0b05->leave($__internal_1d8abf9e1bc4425b75e6584b79268f14f5f2e0883739165186c7019b632e0b05_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the name of your form type class (DateTimePickerType -> date_time_picker)*/
/*    and the suffix "_widget". This can be controlled by overriding getBlockPrefix()*/
/*    in DateTimePickerType.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block date_time_picker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
