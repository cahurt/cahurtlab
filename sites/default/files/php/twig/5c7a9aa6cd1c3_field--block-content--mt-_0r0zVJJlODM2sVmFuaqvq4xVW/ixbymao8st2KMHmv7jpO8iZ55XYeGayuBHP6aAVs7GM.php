<?php

/* themes/custom/enterpriseplus/templates/field--block-content--mt-media-tabs-block.html.twig */
class __TwigTemplate_e5c68a1c6b356371f36257ae3fcd2948966e64688114c66a6b1f1aec57ffc6e7 extends Twig_Template
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
        $tags = array("set" => 11, "if" => 28, "for" => 32);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/media-tabs"), "html", null, true));
        echo "
";
        // line 11
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 13
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 14
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 15
($context["label_display"] ?? null)), 4 => ("field--entity-reference-target-type-" . \Drupal\Component\Utility\Html::getClass(        // line 16
($context["entity_reference_target_type"] ?? null))), 5 => "field--mt-media-tabs-block", 6 => "clearfix");
        // line 22
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 24
($context["label_display"] ?? null) == "inline")) ? ("inline") : ("")));
        // line 27
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 28
        if ( !($context["label_hidden"] ?? null)) {
            // line 29
            echo "    <h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 31
        echo "  <ul class=\"nav nav-pills text-center\">
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
            echo "      <li class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""))));
            echo "\">
        <a href=\"#";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "tab_item_data", array()), "id", array()), "html", null, true));
            echo "\" data-toggle=\"tab\">
          ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "get", array(0 => "field_mt_media_tab_title"), "method"), "value", array()), "html", null, true));
            echo "
        </a>
      </li>
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
        // line 39
        echo "  </ul>
  <div class=\"tab-content\">
    ";
        // line 41
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
            // line 42
            echo "      <div class=\"tab-pane fade ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active in") : (""))));
            echo "\" id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "tab_item_data", array()), "id", array()), "html", null, true));
            echo "\">
        <div class=\"row\">
          ";
            // line 44
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_image", array()), "value", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_video", array()), "value", array()))) {
                // line 45
                echo "            <div class=\"col-md-7\">
              ";
                // line 46
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_video", array()), "value", array())) {
                    // line 47
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "video_field", array()), "html", null, true));
                    echo "
              ";
                } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 48
$context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_image", array()), "value", array())) {
                    // line 49
                    echo "                <div class=\"overlay-container\">
                  ";
                    // line 50
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "title", array())) {
                        // line 51
                        echo "                    <span class=\"overlay overlay--colored\">
                      <a class=\"overlay-target-link\" href=\"";
                        // line 52
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "0", array(), "array"), "url", array()), "html", null, true));
                        echo "\"></a>
                      <span class=\"overlay-inner\">
                        <a class=\"button overlay-animated overlay-fade-bottom\" href=\"";
                        // line 54
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "0", array(), "array"), "url", array()), "html", null, true));
                        echo "\">
                          ";
                        // line 55
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "title", array()), "html", null, true));
                        echo "
                        </a>
                      </span>
                    </span>
                  ";
                    }
                    // line 60
                    echo "                  <img src=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "media_image_styled_url", array()), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_image", array()), "alt", array()), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_image", array()), "title", array()), "html", null, true));
                    echo "\">
                </div>
              ";
                }
                // line 63
                echo "            </div>
          ";
            }
            // line 65
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_image", array()), "value", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_video", array()), "value", array()))) ? ("col-md-5") : ("col-md-12"))));
            echo "\">
            ";
            // line 66
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_title", array()), "value", array())) {
                // line 67
                echo "              <div class=\"mt-media-title\">
                <h3>";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_title", array()), "value", array()), "html", null, true));
                echo "</h3>
              </div>
            ";
            }
            // line 71
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_body", array()), "value", array())) {
                // line 72
                echo "              <div class=\"mt-media-body\">
                ";
                // line 73
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 76
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "title", array())) {
                // line 77
                echo "              <div class=\"mt-media-button\">
                <a class=\"button button--hover-style-2\" href=\"";
                // line 78
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "0", array(), "array"), "url", array()), "html", null, true));
                echo "\">
                  ";
                // line 79
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_mt_media_button", array()), "title", array()), "html", null, true));
                echo "
                </a>
              </div>
            ";
            }
            // line 83
            echo "          </div>
        </div>
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
        // line 87
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/field--block-content--mt-media-tabs-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 87,  246 => 83,  239 => 79,  235 => 78,  232 => 77,  229 => 76,  223 => 73,  220 => 72,  217 => 71,  211 => 68,  208 => 67,  206 => 66,  201 => 65,  197 => 63,  186 => 60,  178 => 55,  174 => 54,  169 => 52,  166 => 51,  164 => 50,  161 => 49,  159 => 48,  154 => 47,  152 => 46,  149 => 45,  147 => 44,  139 => 42,  122 => 41,  118 => 39,  100 => 35,  96 => 34,  91 => 33,  74 => 32,  71 => 31,  63 => 29,  61 => 28,  56 => 27,  54 => 24,  53 => 22,  51 => 16,  50 => 15,  49 => 14,  48 => 13,  47 => 11,  43 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/field--block-content--mt-media-tabs-block.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab_org/themes/custom/enterpriseplus/templates/field--block-content--mt-media-tabs-block.html.twig");
    }
}
