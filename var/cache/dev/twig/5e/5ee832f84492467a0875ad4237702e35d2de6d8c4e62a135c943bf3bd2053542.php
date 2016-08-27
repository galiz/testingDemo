<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_dcbfe43d44523a3dc06618339bd9dea857b4103109e109284dc9baad00253670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_142a859b72db75b62bd7fd86bcc80abd2a430afd4730b4129fda23f5e4ed7bf8 = $this->env->getExtension("native_profiler");
        $__internal_142a859b72db75b62bd7fd86bcc80abd2a430afd4730b4129fda23f5e4ed7bf8->enter($__internal_142a859b72db75b62bd7fd86bcc80abd2a430afd4730b4129fda23f5e4ed7bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142a859b72db75b62bd7fd86bcc80abd2a430afd4730b4129fda23f5e4ed7bf8->leave($__internal_142a859b72db75b62bd7fd86bcc80abd2a430afd4730b4129fda23f5e4ed7bf8_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d1519a72445b73d518c24a65fee5f5f5876074e752e65fc44814ea39d081ec90 = $this->env->getExtension("native_profiler");
        $__internal_d1519a72445b73d518c24a65fee5f5f5876074e752e65fc44814ea39d081ec90->enter($__internal_d1519a72445b73d518c24a65fee5f5f5876074e752e65fc44814ea39d081ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_d1519a72445b73d518c24a65fee5f5f5876074e752e65fc44814ea39d081ec90->leave($__internal_d1519a72445b73d518c24a65fee5f5f5876074e752e65fc44814ea39d081ec90_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c4d84f7353ed5ad4375e3b2a482ee44c3a51365afa98da515f206607d71d8722 = $this->env->getExtension("native_profiler");
        $__internal_c4d84f7353ed5ad4375e3b2a482ee44c3a51365afa98da515f206607d71d8722->enter($__internal_c4d84f7353ed5ad4375e3b2a482ee44c3a51365afa98da515f206607d71d8722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-user\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-calendar\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-cogs\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "authorEmail", array()), "html", null, true);
            echo "</td>
                ";
            // line 25
            echo "                <td>";
            if ($this->getAttribute($context["post"], "publishedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "short", "short", null, "UTC"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        ";
            // line 32
            if ($this->getAttribute($context["post"], "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                // line 33
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> ";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 37
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_c4d84f7353ed5ad4375e3b2a482ee44c3a51365afa98da515f206607d71d8722->leave($__internal_c4d84f7353ed5ad4375e3b2a482ee44c3a51365afa98da515f206607d71d8722_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_44ec1931de450964e80eb46da2468e9b09db32f7957ca4563f11672724a501d7 = $this->env->getExtension("native_profiler");
        $__internal_44ec1931de450964e80eb46da2468e9b09db32f7957ca4563f11672724a501d7->enter($__internal_44ec1931de450964e80eb46da2468e9b09db32f7957ca4563f11672724a501d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 56
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 58
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_44ec1931de450964e80eb46da2468e9b09db32f7957ca4563f11672724a501d7->leave($__internal_44ec1931de450964e80eb46da2468e9b09db32f7957ca4563f11672724a501d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  179 => 56,  172 => 52,  168 => 51,  165 => 50,  159 => 49,  150 => 45,  141 => 42,  138 => 41,  130 => 37,  124 => 34,  119 => 33,  117 => 32,  111 => 29,  107 => 28,  98 => 25,  94 => 21,  90 => 20,  87 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_index' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.post_list'|trans }}</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'label.title'|trans }}</th>*/
/*                 <th><i class="fa fa-user"></i> {{ 'label.author'|trans }}</th>*/
/*                 <th><i class="fa fa-calendar"></i> {{ 'label.published_at'|trans }}</th>*/
/*                 <th><i class="fa fa-cogs"></i> {{ 'label.actions'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.authorEmail }}</td>*/
/*                 {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*                    avoid errors when the 'intl' PHP extension is not available and the application*/
/*                    is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/*                 <td>{% if post.publishedAt %}{{ post.publishedAt|localizeddate('short', 'short', null, 'UTC') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('admin_post_show', { id: post.id }) }}" class="btn btn-sm btn-default">*/
/*                             {{ 'action.show'|trans }}*/
/*                         </a>*/
/* */
/*                         {% if post.isAuthor(app.user) %}*/
/*                             <a href="{{ path('admin_post_edit', { id: post.id }) }}" class="btn btn-sm btn-primary">*/
/*                                 <i class="fa fa-edit"></i> {{ 'action.edit'|trans }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="4" align="center">{{ 'post.no_posts_found'|trans }}</td>*/
/*            </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         <a href="{{ path('admin_post_new') }}" class="btn btn-lg btn-block btn-success">*/
/*             <i class="fa fa-plus"></i> {{ 'action.create_post'|trans }}*/
/*         </a>*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
