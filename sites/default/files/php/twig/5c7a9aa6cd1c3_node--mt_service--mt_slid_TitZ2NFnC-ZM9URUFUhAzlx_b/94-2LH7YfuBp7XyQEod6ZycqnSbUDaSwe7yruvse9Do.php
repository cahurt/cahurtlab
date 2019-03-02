<?php

/* themes/custom/enterpriseplus/templates/node--mt_service--mt_slide_view.html.twig */
class __TwigTemplate_f82c614d73e348a51f36de9ab6e1cc3c0ff8288ec2e485dfb894ba59d72475c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 8, "if" => 26, "trans" => 38, "block" => 45);
        $filters = array("clean_class" => 10, "render" => 46, "without" => 64);
        $functions = array("attach_library" => 18);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'block'),
                array('clean_class', 'render', 'without'),
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

        // line 8
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 10
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 11
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 12
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 13
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 14
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node"), "html", null, true));
        echo "
<article";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class=\"node__container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <header class=\"node__header\">
          ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
          ";
        // line 26
        if ( !($context["page"] ?? null)) {
            // line 27
            echo "            <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
              <a href=\"";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
            </h2>
          ";
        } else {
            // line 31
            echo "            <h1";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 33
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
          ";
        // line 34
        if (($context["display_submitted"] ?? null)) {
            // line 35
            echo "            <div class=\"node__meta\">
              ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
              <span";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
            echo ">
                ";
            // line 38
            echo t("By @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 39
            echo "              </span>
              ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 43
        echo "        </header>
      </div>
      ";
        // line 45
        $this->displayBlock('node_side', $context, $blocks);
        // line 54
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "    </div>
  </div>
</article>
";
    }

    // line 45
    public function block_node_side($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", array()))) {
            // line 47
            echo "          <div class=\"col-md-6\">
            <div class=\"node__side-content clearfix\">
              ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
            echo "
            </div>
          </div>
        ";
        }
        // line 53
        echo "      ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node-service"), "html", null, true));
        echo "
        ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node-view-mode-slide-view"), "html", null, true));
        echo "
        <div class=\"
          ";
        // line 58
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", array()))) {
            // line 59
            echo "            col-md-6
          ";
        } else {
            // line 61
            echo "            col-md-12
          ";
        }
        // line 62
        echo "\">
          <div";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__main-content", 1 => "clearfix"), "method"), "html", null, true));
        echo ">
            ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "comment", "field_image", "links"), "html", null, true));
        echo "
            <a class=\"button button--hover-style-2\" href=\"";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\">";
        echo t("Learn More", array());
        echo "</a>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/node--mt_service--mt_slide_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 65,  191 => 64,  187 => 63,  184 => 62,  180 => 61,  176 => 59,  174 => 58,  169 => 56,  164 => 55,  161 => 54,  157 => 53,  150 => 49,  146 => 47,  143 => 46,  140 => 45,  133 => 69,  130 => 54,  128 => 45,  124 => 43,  118 => 40,  115 => 39,  113 => 38,  109 => 37,  105 => 36,  102 => 35,  100 => 34,  95 => 33,  87 => 31,  79 => 28,  74 => 27,  72 => 26,  68 => 25,  60 => 20,  56 => 19,  52 => 18,  50 => 14,  49 => 13,  48 => 12,  47 => 11,  46 => 10,  45 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/node--mt_service--mt_slide_view.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab_org/themes/custom/enterpriseplus/templates/node--mt_service--mt_slide_view.html.twig");
    }
}
