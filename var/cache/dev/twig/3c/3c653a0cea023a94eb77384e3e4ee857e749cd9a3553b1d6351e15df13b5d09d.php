<?php

/* security/login.html.twig */
class __TwigTemplate_048a276581112973bc2d573cc322a3a94c02ccf249436073a400867474758711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7979388804a56eef5bedd93145720b0452a6a8ae399cfcb6182c2421d336819a = $this->env->getExtension("native_profiler");
        $__internal_7979388804a56eef5bedd93145720b0452a6a8ae399cfcb6182c2421d336819a->enter($__internal_7979388804a56eef5bedd93145720b0452a6a8ae399cfcb6182c2421d336819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7979388804a56eef5bedd93145720b0452a6a8ae399cfcb6182c2421d336819a->leave($__internal_7979388804a56eef5bedd93145720b0452a6a8ae399cfcb6182c2421d336819a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2e89c514d1490ace412c1edaa4e471fed41c40a37f8b9bca9f3f1104e256c509 = $this->env->getExtension("native_profiler");
        $__internal_2e89c514d1490ace412c1edaa4e471fed41c40a37f8b9bca9f3f1104e256c509->enter($__internal_2e89c514d1490ace412c1edaa4e471fed41c40a37f8b9bca9f3f1104e256c509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_2e89c514d1490ace412c1edaa4e471fed41c40a37f8b9bca9f3f1104e256c509->leave($__internal_2e89c514d1490ace412c1edaa4e471fed41c40a37f8b9bca9f3f1104e256c509_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a71774532a9a6eda9bca956dc755b3e1b3d61f9599580fb83d946f4ff139d083 = $this->env->getExtension("native_profiler");
        $__internal_a71774532a9a6eda9bca956dc755b3e1b3d61f9599580fb83d946f4ff139d083->enter($__internal_a71774532a9a6eda9bca956dc755b3e1b3d61f9599580fb83d946f4ff139d083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\"></i>
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>anna_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a71774532a9a6eda9bca956dc755b3e1b3d61f9599580fb83d946f4ff139d083->leave($__internal_a71774532a9a6eda9bca956dc755b3e1b3d61f9599580fb83d946f4ff139d083_prof);

    }

    // line 83
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_74c08cd1220abfc5c70f6ce7cfae8bf96c64e2daa552503325322c76915a8f02 = $this->env->getExtension("native_profiler");
        $__internal_74c08cd1220abfc5c70f6ce7cfae8bf96c64e2daa552503325322c76915a8f02->enter($__internal_74c08cd1220abfc5c70f6ce7cfae8bf96c64e2daa552503325322c76915a8f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 84
        echo "
    ";
        // line 85
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 87
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_74c08cd1220abfc5c70f6ce7cfae8bf96c64e2daa552503325322c76915a8f02->leave($__internal_74c08cd1220abfc5c70f6ce7cfae8bf96c64e2daa552503325322c76915a8f02_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4009776ffcc89f11813b121a1e255aab6ae7e92b1e2fc30bc155c14146db6e92 = $this->env->getExtension("native_profiler");
        $__internal_4009776ffcc89f11813b121a1e255aab6ae7e92b1e2fc30bc155c14146db6e92->enter($__internal_4009776ffcc89f11813b121a1e255aab6ae7e92b1e2fc30bc155c14146db6e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            var usernameEl = \$('#username');
            var passwordEl = \$('#password');
            // in a real application, hardcoding the user/password would be idiotic
            // but for the demo application it's very convenient to do so
            if (!usernameEl.val() && !passwordEl.val()) {
                usernameEl.val('anna_admin');
                passwordEl.val('kitten');
            }
        });
    </script>
";
        
        $__internal_4009776ffcc89f11813b121a1e255aab6ae7e92b1e2fc30bc155c14146db6e92->leave($__internal_4009776ffcc89f11813b121a1e255aab6ae7e92b1e2fc30bc155c14146db6e92_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 91,  219 => 90,  210 => 87,  205 => 85,  202 => 84,  196 => 83,  180 => 74,  176 => 73,  167 => 67,  163 => 66,  152 => 58,  144 => 53,  134 => 46,  130 => 45,  126 => 44,  117 => 38,  104 => 28,  99 => 26,  93 => 23,  87 => 20,  83 => 19,  78 => 17,  73 => 15,  67 => 11,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'login' %}*/
/* */
/* {% block main %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">*/
/*             {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-5">*/
/*             <div class="well">*/
/*                 <form action="{{ path('security_login') }}" method="post">*/
/*                     <fieldset>*/
/*                         <legend><i class="fa fa-lock"></i> {{ 'title.login'|trans }}</legend>*/
/*                         <div class="form-group">*/
/*                             <label for="username">{{ 'label.username'|trans }}</label>*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="password">{{ 'label.password'|trans }}</label>*/
/*                             <input type="password" id="password" name="_password" class="form-control" />*/
/*                         </div>*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-sign-in"></i> {{ 'action.sign_in'|trans }}*/
/*                         </button>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="login-help" class="col-sm-7">*/
/*             <h3>*/
/*                 <i class="fa fa-long-arrow-left"></i>*/
/*                 {{ 'help.login_users'|trans }}*/
/*             </h3>*/
/* */
/*             <table class="table table-striped table-bordered table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>{{ 'label.username'|trans }}</th>*/
/*                         <th>{{ 'label.password'|trans }}</th>*/
/*                         <th>{{ 'label.role'|trans }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>john_user</td>*/
/*                         <td>kitten</td>*/
/*                         <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>anna_admin</td>*/
/*                         <td>kitten</td>*/
/*                         <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*             <div id="login-users-help" class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <p>*/
/*                         <span class="label label-success">{{ 'note'|trans }}</span>*/
/*                         {{ 'help.reload_fixtures'|trans }}<br/>*/
/* */
/*                         <code class="console">$ php bin/console doctrine:fixtures:load</code>*/
/*                     </p>*/
/* */
/*                     <p>*/
/*                         <span class="label label-success">{{ 'tip'|trans }}</span>*/
/*                         {{ 'help.add_user'|trans }}<br/>*/
/* */
/*                         <code class="console">$ php bin/console app:add-user</code>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block sidebar %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/*             var usernameEl = $('#username');*/
/*             var passwordEl = $('#password');*/
/*             // in a real application, hardcoding the user/password would be idiotic*/
/*             // but for the demo application it's very convenient to do so*/
/*             if (!usernameEl.val() && !passwordEl.val()) {*/
/*                 usernameEl.val('anna_admin');*/
/*                 passwordEl.val('kitten');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
