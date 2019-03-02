<?php

/* themes/custom/enterpriseplus/templates/node--article.html.twig */
class __TwigTemplate_11d3be16e596372832cedea7470d007e540d83d6e30056afb1899ec9d609176c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/enterpriseplus/templates/node--article.html.twig", 8);
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
        $tags = array("if" => 11, "trans" => 27);
        $filters = array("format_date" => 25, "without" => 67);
        $functions = array("attach_library" => 44);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('format_date', 'without'),
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
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", array())) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array())))) {
            // line 18
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 20
            if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0)))) {
                // line 21
                echo "            <li class=\"inline-list__item\">
              ";
                // line 22
                if (($context["display_submitted"] ?? null)) {
                    // line 23
                    echo "                <span";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 25
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "F d, Y")), "html", null, true));
                    echo "
                  </span>
                  ";
                    // line 27
                    echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                    // line 28
                    echo "                </span>
                ";
                    // line 29
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
                    echo "
              ";
                }
                // line 31
                echo "              ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0))) {
                    // line 32
                    echo "                <span class=\"comments-count__counter text--colored\">
                  ";
                    // line 33
                    echo \Drupal::translation()->formatPlural(abs(                    // line 35
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                     // line 36
($context["comment_count"] ?? null), ));
                    // line 38
                    echo "                </span>
              ";
                }
                // line 40
                echo "            </li>
          ";
            }
            // line 42
            echo "        ";
            if (((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array()))) {
                // line 43
                echo "          <li class=\"inline-list__item\">
            ";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/reading-time"), "html", null, true));
                echo "
            <span class=\"reading-time\">
              <span class=\"text--dark\">";
                // line 46
                echo t("Time to read", array());
                echo "</span>
              ";
                // line 47
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 48
                    echo "                ";
                    echo t("less than 1 minute", array());
                    // line 49
                    echo "              ";
                } elseif ((($context["minutes"] ?? null) < 2)) {
                    // line 50
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["minutes"] ?? null), "html", null, true));
                    echo " ";
                    echo t("minute", array());
                    // line 51
                    echo "              ";
                } else {
                    // line 52
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["minutes"] ?? null), "html", null, true));
                    echo " ";
                    echo t("minutes", array());
                    // line 53
                    echo "              ";
                }
                // line 54
                echo "            </span>
          </li>
        ";
            }
            // line 57
            echo "      </ul>
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["display_submitted"] ?? null)) {
            // line 61
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
  ";
        }
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node-article"), "html", null, true));
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "comment"), "html", null, true));
        echo "
  </div>
  ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  202 => 67,  196 => 65,  193 => 64,  185 => 61,  182 => 60,  177 => 57,  172 => 54,  169 => 53,  164 => 52,  161 => 51,  156 => 50,  153 => 49,  150 => 48,  148 => 47,  144 => 46,  139 => 44,  136 => 43,  133 => 42,  129 => 40,  125 => 38,  123 => 36,  122 => 35,  121 => 33,  118 => 32,  115 => 31,  110 => 29,  107 => 28,  105 => 27,  100 => 25,  94 => 23,  92 => 22,  89 => 21,  87 => 20,  83 => 18,  81 => 17,  76 => 16,  68 => 13,  63 => 12,  61 => 11,  56 => 10,  53 => 9,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/node--article.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab_org/themes/custom/enterpriseplus/templates/node--article.html.twig");
    }
}
