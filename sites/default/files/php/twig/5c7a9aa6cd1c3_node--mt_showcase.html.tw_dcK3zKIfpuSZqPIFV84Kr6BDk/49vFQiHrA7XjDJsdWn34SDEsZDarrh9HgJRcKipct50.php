<?php

/* themes/custom/enterpriseplus/templates/node--mt_showcase.html.twig */
class __TwigTemplate_10bde14bd66a1ae073b0a8d5a91b708b6845046fc69538965b8adc404fe1496e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/enterpriseplus/templates/node--mt_showcase.html.twig", 8);
        $this->blocks = array(
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 11, "trans" => 29);
        $filters = array("format_date" => 27);
        $functions = array("attach_library" => 52);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('format_date'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 11
        if ( !($context["page"] ?? null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 17
        if (($context["display_submitted"] ?? null)) {
            // line 18
            echo "    <div class=\"node__meta\">
      ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
      ";
            // line 20
            if ((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", array()))) {
                // line 21
                echo "        <div class=\"node__meta\">
           <ul class=\"inline-list\">
            ";
                // line 23
                if (($context["display_submitted"] ?? null)) {
                    // line 24
                    echo "              <li class=\"inline-list__item\">
                <span";
                    // line 25
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 27
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "F d, Y")), "html", null, true));
                    echo "
                  </span>
                  ";
                    // line 29
                    echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                    // line 30
                    echo "                </span>
                ";
                    // line 31
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
                    echo "
              </li>
            ";
                }
                // line 34
                echo "            ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0))) {
                    // line 35
                    echo "              <li class=\"inline-list__item\">
                <span class=\"comments-count__counter\">
                  ";
                    // line 37
                    echo \Drupal::translation()->formatPlural(abs(                    // line 39
($context["comment_count"] ?? null)), "<i class=\"fa fa-comment\"></i> 1 comment", "<i class=\"fa fa-comments\"></i> @comment_count comments", array("@comment_count" =>                     // line 40
($context["comment_count"] ?? null), ));
                    // line 42
                    echo "                </span>
              </li>
            ";
                }
                // line 45
                echo "          </ul>
        </div>
      ";
            }
            // line 48
            echo "    </div>
  ";
        }
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node-showcase"), "html", null, true));
        echo "
  ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/node--mt_showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  152 => 52,  149 => 51,  143 => 48,  138 => 45,  133 => 42,  131 => 40,  130 => 39,  129 => 37,  125 => 35,  122 => 34,  116 => 31,  113 => 30,  111 => 29,  106 => 27,  101 => 25,  98 => 24,  96 => 23,  92 => 21,  90 => 20,  86 => 19,  83 => 18,  81 => 17,  76 => 16,  68 => 13,  63 => 12,  61 => 11,  56 => 10,  53 => 9,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/node--mt_showcase.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab_org/themes/custom/enterpriseplus/templates/node--mt_showcase.html.twig");
    }
}
