<?php

/* {# inline_template_start #}<div class="views-field-field-image">
<div class="overlay-container">
<span class="overlay overlay--colored">
<a class="overlay-target-link" href="{{ path }}"></a>
<span class="overlay-inner">
<a class="overlay-icon overlay-icon--button overlay-icon--white overlay-animated overlay-fade-top" href="{{ path }}"><i class="fa fa-link"></i></a>
</span>
</span>
<span class="view-promoted-items-info">
<span class="date">{{ created }}</span>
<a href="{{ path }}" class="comments">{{ comment_count }}</a>
<span class="author">By {{ name }}</span>
</span>
{{ field_mt_video }}
</div>
</div> */
class __TwigTemplate_b165b1c09f5855256a21048b8c223a8162d66f65fa99523cd2714614dd31d71d extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--button overlay-icon--white overlay-animated overlay-fade-top\" href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
<span class=\"view-promoted-items-info\">
<span class=\"date\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</span>
<a href=\"";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"comments\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo "</a>
<span class=\"author\">By ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
        echo "</span>
</span>
";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_video"] ?? null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--button overlay-icon--white overlay-animated overlay-fade-top\" href=\"{{ path }}\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
<span class=\"view-promoted-items-info\">
<span class=\"date\">{{ created }}</span>
<a href=\"{{ path }}\" class=\"comments\">{{ comment_count }}</a>
<span class=\"author\">By {{ name }}</span>
</span>
{{ field_mt_video }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  85 => 12,  79 => 11,  75 => 10,  68 => 6,  63 => 4,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--button overlay-icon--white overlay-animated overlay-fade-top\" href=\"{{ path }}\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
<span class=\"view-promoted-items-info\">
<span class=\"date\">{{ created }}</span>
<a href=\"{{ path }}\" class=\"comments\">{{ comment_count }}</a>
<span class=\"author\">By {{ name }}</span>
</span>
{{ field_mt_video }}
</div>
</div>", "");
    }
}
