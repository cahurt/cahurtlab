<?php

/* {# inline_template_start #}<div class="col-sm-6">
<div class="views-field-field-image">
<div class="overlay-container">
<span class="overlay overlay--colored">
<a class="overlay-target-link" href="{{ path }}"></a>
<span class="overlay-inner">
<a class="overlay-icon overlay-icon--white overlay-animated overlay-fade-top" href="{{ path }}"><i class="fa fa-link"></i></a>
</span>
</span>
{{ field_image }}
</div>
</div>
</div> */
class __TwigTemplate_4fdc4a249e94c651ac5f506423acf6e0641b80975b59f4f2b92b5dce84112c28 extends Twig_Template
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
        echo "<div class=\"col-sm-6\">
<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--white overlay-animated overlay-fade-top\" href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-sm-6\">
<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--white overlay-animated overlay-fade-top\" href=\"{{ path }}\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
{{ field_image }}
</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  66 => 7,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-sm-6\">
<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-icon overlay-icon--white overlay-animated overlay-fade-top\" href=\"{{ path }}\"><i class=\"fa fa-link\"></i></a>
</span>
</span>
{{ field_image }}
</div>
</div>
</div>", "");
    }
}
