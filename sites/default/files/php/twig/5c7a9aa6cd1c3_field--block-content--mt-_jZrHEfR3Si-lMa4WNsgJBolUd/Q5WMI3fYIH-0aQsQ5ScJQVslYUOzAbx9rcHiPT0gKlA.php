<?php

/* themes/custom/enterpriseplus/templates/field--block-content--mt-fltt-block.html.twig */
class __TwigTemplate_8bc156108ed809bd4c2f2d6d874f885ed7d60c054291e46f3a30ed789fdbbc25 extends Twig_Template
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
        $tags = array("set" => 11, "if" => 27, "for" => 32);
        $filters = array("clean_class" => 13);
        $functions = array("attach_library" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
                array('attach_library')
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

        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/featured-linked-text-tiles-block"), "html", null, true));
        echo "
";
        // line 11
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 13
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 14
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 15
($context["label_display"] ?? null)), 4 => "field--mt-featured-linked-text-tiles-block", 5 => "clearfix");
        // line 21
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 23
($context["label_display"] ?? null) == "inline")) ? ("inline") : ("")));
        // line 26
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 27
        if ( !($context["label_hidden"] ?? null)) {
            // line 28
            echo "    <h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 30
        echo "  <div class=\"featured-linked-text-tiles\">
    <div class=\"row\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "        <div class=\"col-md-4\">
          <div class=\"featured-linked-text-tile\">
            <span class=\"featured-linked-text-tile__count\">";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
            echo "</span>
            ";
            // line 36
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_link", array()), "0", array(), "array"), "url", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_title", array()), "value", array()))) {
                // line 37
                echo "              <h5 class=\"featured-linked-text-tile__title\"><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_link", array()), "0", array(), "array"), "url", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_title", array()), "value", array()), "html", null, true));
                echo "</a></h5>
            ";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 38
$context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_title", array()), "value", array())) {
                // line 39
                echo "              <h5 class=\"featured-linked-text-tile__title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_title", array()), "value", array()), "html", null, true));
                echo "</h5>
            ";
            }
            // line 41
            echo "            ";
            if ($this->getAttribute($context["item"], "content", array())) {
                // line 42
                echo "              <div class=\"featured-linked-text-tile__body\">
                ";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 46
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_link", array()), "0", array(), "array"), "url", array())) {
                // line 47
                echo "              <a class=\"featured-linked-text-tile__link\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_fltt_link", array()), "0", array(), "array"), "url", array()), "html", null, true));
                echo "\"><i class=\"fa fa-link\"></i></a>
            ";
            }
            // line 49
            echo "          </div>
        </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/field--block-content--mt-fltt-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  137 => 49,  131 => 47,  128 => 46,  122 => 43,  119 => 42,  116 => 41,  110 => 39,  108 => 38,  101 => 37,  99 => 36,  95 => 35,  91 => 33,  74 => 32,  70 => 30,  62 => 28,  60 => 27,  55 => 26,  53 => 23,  52 => 21,  50 => 15,  49 => 14,  48 => 13,  47 => 11,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/field--block-content--mt-fltt-block.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab_org/themes/custom/enterpriseplus/templates/field--block-content--mt-fltt-block.html.twig");
    }
}
