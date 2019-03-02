<?php

/* themes/custom/enterpriseplus/templates/page.html.twig */
class __TwigTemplate_dded3945f045ac81187bdd6439baa334b86291b16af4cbff5a9d4dc6c969e4ab extends Twig_Template
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
        $tags = array("if" => 76);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "slideout", array())) {
            // line 77
            echo "  ";
            // line 78
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true));
            echo "\">
    ";
            // line 80
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideout", array()), "html", null, true));
            echo "
      </div>
    </div>
    ";
            // line 86
            echo "  </div>
  ";
            // line 88
            echo "
  ";
            // line 90
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 93
        echo "
";
        // line 95
        echo "<div class=\"page-container\">

  ";
        // line 97
        if (((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "search_area", array())) || $this->getAttribute(($context["page"] ?? null), "navigation", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <div class=\"header-container\">

      ";
            // line 101
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 102
                echo "        ";
                // line 103
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo "\">
          <div class=\"";
                // line 104
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 106
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
              ";
                // line 107
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 108
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 109
                echo ">
              <div class=\"row\">
                ";
                // line 111
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                    // line 112
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 114
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 115
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 118
                    echo "                  </div>
                ";
                }
                // line 120
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                    // line 121
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 123
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 124
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 127
                    echo "                  </div>
                ";
                }
                // line 129
                echo "              </div>
            </div>
            ";
                // line 132
                echo "          </div>
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                // line 138
                echo "        ";
                // line 139
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo "\">
          <div class=\"";
                // line 140
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 142
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
              ";
                // line 143
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 144
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 145
                echo ">
              <div class=\"row\">
                ";
                // line 147
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                    // line 148
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 150
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 151
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 154
                    echo "                  </div>
                ";
                }
                // line 156
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                    // line 157
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 159
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 160
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 163
                    echo "                  </div>
                ";
                }
                // line 165
                echo "              </div>
            </div>
            ";
                // line 168
                echo "          </div>
        </div>
        ";
                // line 171
                echo "      ";
            }
            // line 172
            echo "
      ";
            // line 173
            if (((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "search_area", array())) || $this->getAttribute(($context["page"] ?? null), "navigation", array()))) {
                // line 174
                echo "        ";
                // line 175
                echo "        <header role=\"banner\" class=\"clearfix header region--dark-typography region--white-background ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                echo "\">
          <div class=\"";
                // line 176
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 178
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 180
                if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                    // line 181
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 183
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 184
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 187
                    echo "                  </div>
                ";
                }
                // line 189
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                    // line 190
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 192
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 193
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 196
                    echo "                  </div>
                ";
                }
                // line 198
                echo "                ";
                if (($this->getAttribute(($context["page"] ?? null), "search_area", array()) || $this->getAttribute(($context["page"] ?? null), "navigation", array()))) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 202
                    if ($this->getAttribute(($context["page"] ?? null), "search_area", array())) {
                        // line 203
                        echo "                        <div class=\"clearfix search-area\">
                          ";
                        // line 204
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_area", array()), "html", null, true));
                        echo "
                        </div>
                      ";
                    }
                    // line 207
                    echo "                      ";
                    if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
                        // line 208
                        echo "                        ";
                        // line 209
                        echo "                        <div class=\"clearfix main-navigation ";
                        if ($this->getAttribute(($context["page"] ?? null), "search_area", array())) {
                            echo " with-search-bar ";
                        }
                        echo "\">
                          <nav role=\"navigation\">
                            ";
                        // line 211
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
                        echo "
                          </nav>
                        </div>
                        ";
                        // line 215
                        echo "                      ";
                    }
                    // line 216
                    echo "                    </div>
                    ";
                    // line 218
                    echo "                  </div>
                ";
                }
                // line 220
                echo "              </div>
            </div>
            ";
                // line 223
                echo "          </div>
          ";
                // line 224
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 225
                    echo "            ";
                    // line 226
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 230
                    echo "          ";
                }
                // line 231
                echo "        </header>
        ";
                // line 233
                echo "      ";
            }
            // line 234
            echo "
    </div>
    ";
            // line 237
            echo "  ";
        }
        // line 238
        echo "
  ";
        // line 239
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 240
            echo "    ";
            // line 241
            echo "    <div class=\"clearfix banner\">
      ";
            // line 243
            echo "      <div class=\"clearfix banner__section\">
        ";
            // line 244
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
      </div>
      ";
            // line 247
            echo "    </div>
    ";
            // line 249
            echo "  ";
        }
        // line 250
        echo "
  ";
        // line 252
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 254
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 255
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 265
        echo "
  ";
        // line 266
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 267
            echo "    ";
            // line 268
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 269
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 271
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 272
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 273
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 274
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 278
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 284
            echo "      </div>
    </div>
    ";
            // line 287
            echo "  ";
        }
        // line 288
        echo "
  ";
        // line 289
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array())) {
            // line 290
            echo "    ";
            // line 291
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 292
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 294
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 295
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 296
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 297
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 307
            echo "      </div>
    </div>
    ";
            // line 310
            echo "  ";
        }
        // line 311
        echo "
  ";
        // line 312
        if (($this->getAttribute(($context["page"] ?? null), "media_background_first", array()) || $this->getAttribute(($context["page"] ?? null), "media_background_second", array()))) {
            // line 313
            echo "    ";
            // line 314
            echo "    <div class=\"clearfix media-background ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_separator"] ?? null), "html", null, true));
            echo "\">
      ";
            // line 316
            echo "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 318
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 320
            echo "        <div class=\"clearfix media-background__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 321
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 322
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 323
            echo ">
          <div class=\"row\">
            ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "media_background_first", array())) {
                // line 326
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 328
                echo "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 329
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "media_background_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 332
                echo "              </div>
            ";
            }
            // line 334
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "media_background_second", array())) {
                // line 335
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["media_background_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 337
                echo "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 338
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "media_background_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 341
                echo "              </div>
            ";
            }
            // line 343
            echo "          </div>
        </div>
        ";
            // line 346
            echo "      </div>
    </div>
    ";
            // line 349
            echo "  ";
        }
        // line 350
        echo "
  ";
        // line 352
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 356
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">
            ";
        // line 358
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
        echo "\"
              ";
        // line 359
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 360
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\"
              ";
        }
        // line 361
        echo ">
              ";
        // line 362
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 363
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 365
        echo "            </div>
            ";
        // line 367
        echo "          </section>
          ";
        // line 368
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 369
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 371
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                ";
            // line 372
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 373
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 374
            echo ">
                ";
            // line 375
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 378
            echo "            </aside>
          ";
        }
        // line 380
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 381
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 383
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
                ";
            // line 384
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 385
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 386
            echo ">
                ";
            // line 387
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 390
            echo "            </aside>
          ";
        }
        // line 392
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 397
        echo "
  ";
        // line 398
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()))) {
            // line 399
            echo "    ";
            // line 400
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 401
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 403
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 404
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 405
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 406
            echo ">
          <div class=\"row\">
            ";
            // line 408
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array())) {
                // line 409
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 411
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 412
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 415
                echo "              </div>
            ";
            }
            // line 417
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", array())) {
                // line 418
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 420
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 421
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 424
                echo "              </div>
            ";
            }
            // line 426
            echo "          </div>
        </div>
        ";
            // line 429
            echo "      </div>
    </div>
    ";
            // line 432
            echo "  ";
        }
        // line 433
        echo "
  ";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 435
            echo "    ";
            // line 436
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 437
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 439
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 440
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 441
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 442
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 446
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 452
            echo "      </div>
    </div>
    ";
            // line 455
            echo "  ";
        }
        // line 456
        echo "
  ";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 458
            echo "    ";
            // line 459
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 460
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 462
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 463
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 464
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 465
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 469
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 475
            echo "      </div>
    </div>
    ";
            // line 478
            echo "  ";
        }
        // line 479
        echo "
  ";
        // line 480
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 481
            echo "    ";
            // line 482
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 483
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 485
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 486
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 487
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 488
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 492
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 498
            echo "      </div>
    </div>
    ";
            // line 501
            echo "  ";
        }
        // line 502
        echo "
  ";
        // line 503
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 504
            echo "    ";
            // line 505
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 506
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 508
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 509
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 510
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 511
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 515
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 521
            echo "      </div>
    </div>
    ";
            // line 524
            echo "  ";
        }
        // line 525
        echo "
  ";
        // line 526
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 527
            echo "    ";
            // line 528
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 529
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 531
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 532
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 533
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 534
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 538
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 544
            echo "      </div>
    </div>
    ";
            // line 547
            echo "  ";
        }
        // line 548
        echo "
  ";
        // line 549
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 550
            echo "    ";
            // line 551
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 552
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 554
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 555
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 556
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 557
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 561
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 567
            echo "      </div>
    </div>
    ";
            // line 570
            echo "  ";
        }
        // line 571
        echo "
  ";
        // line 572
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()))) {
            // line 573
            echo "    ";
            // line 574
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 575
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 577
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"
          ";
            // line 578
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 579
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 580
            echo ">
          <div class=\"row\">
            ";
            // line 582
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", array())) {
                // line 583
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 585
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 586
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 589
                echo "              </div>
            ";
            }
            // line 591
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", array())) {
                // line 592
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 594
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 595
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 598
                echo "              </div>
            ";
            }
            // line 600
            echo "          </div>
        </div>
        ";
            // line 603
            echo "      </div>
    </div>
    ";
            // line 606
            echo "  ";
        }
        // line 607
        echo "
  ";
        // line 608
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()))) {
            // line 609
            echo "    ";
            // line 610
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 611
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 614
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 615
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 617
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 618
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 619
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 620
                echo ">
                  ";
                // line 621
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 624
                echo "              </div>
            ";
            }
            // line 626
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 627
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 629
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 630
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 631
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 632
                echo ">
                  ";
                // line 633
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 636
                echo "              </div>
            ";
            }
            // line 638
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 639
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 640
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 642
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 643
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 644
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 645
                echo ">
                  ";
                // line 646
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 649
                echo "              </div>
            ";
            }
            // line 651
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 652
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 653
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 655
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 656
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 657
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 658
                echo ">
                  ";
                // line 659
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 662
                echo "              </div>
            ";
            }
            // line 664
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                // line 665
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 667
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"
                  ";
                // line 668
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 669
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 670
                echo ">
                  ";
                // line 671
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 681
            echo "  ";
        }
        // line 682
        echo "
  ";
        // line 683
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 684
            echo "    ";
            // line 685
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 686
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 688
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 692
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 698
            echo "      </div>
    </div>
    ";
            // line 701
            echo "  ";
        }
        // line 702
        echo "
  ";
        // line 703
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 704
            echo "    ";
            // line 705
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true));
            echo "\">
      <div class=\"";
            // line 706
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 708
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 710
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array())) {
                // line 711
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 713
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 714
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 717
                echo "              </div>
            ";
            }
            // line 719
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 720
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 722
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 723
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 726
                echo "              </div>
            ";
            }
            // line 728
            echo "          </div>
        </div>
        ";
            // line 731
            echo "      </div>
    </div>
    ";
            // line 734
            echo "  ";
        }
        // line 735
        echo "
  ";
        // line 736
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 737
            echo "  ";
            // line 738
            echo "    <div class=\"to-top\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_text"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 740
            echo "  ";
        }
        // line 741
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/enterpriseplus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1562 => 741,  1559 => 740,  1554 => 738,  1552 => 737,  1550 => 736,  1547 => 735,  1544 => 734,  1540 => 731,  1536 => 728,  1532 => 726,  1527 => 723,  1524 => 722,  1519 => 720,  1516 => 719,  1512 => 717,  1507 => 714,  1504 => 713,  1499 => 711,  1497 => 710,  1493 => 708,  1489 => 706,  1482 => 705,  1480 => 704,  1478 => 703,  1475 => 702,  1472 => 701,  1468 => 698,  1460 => 692,  1454 => 688,  1450 => 686,  1443 => 685,  1441 => 684,  1439 => 683,  1436 => 682,  1433 => 681,  1427 => 676,  1423 => 674,  1418 => 671,  1415 => 670,  1409 => 669,  1407 => 668,  1402 => 667,  1397 => 665,  1394 => 664,  1390 => 662,  1385 => 659,  1382 => 658,  1376 => 657,  1374 => 656,  1369 => 655,  1364 => 653,  1362 => 652,  1355 => 651,  1351 => 649,  1346 => 646,  1343 => 645,  1337 => 644,  1335 => 643,  1330 => 642,  1325 => 640,  1323 => 639,  1318 => 638,  1314 => 636,  1309 => 633,  1306 => 632,  1300 => 631,  1298 => 630,  1293 => 629,  1288 => 627,  1285 => 626,  1281 => 624,  1276 => 621,  1273 => 620,  1267 => 619,  1265 => 618,  1260 => 617,  1255 => 615,  1253 => 614,  1247 => 611,  1240 => 610,  1238 => 609,  1236 => 608,  1233 => 607,  1230 => 606,  1226 => 603,  1222 => 600,  1218 => 598,  1213 => 595,  1210 => 594,  1205 => 592,  1202 => 591,  1198 => 589,  1193 => 586,  1190 => 585,  1185 => 583,  1183 => 582,  1179 => 580,  1173 => 579,  1171 => 578,  1166 => 577,  1162 => 575,  1153 => 574,  1151 => 573,  1149 => 572,  1146 => 571,  1143 => 570,  1139 => 567,  1131 => 561,  1125 => 557,  1119 => 556,  1117 => 555,  1112 => 554,  1108 => 552,  1101 => 551,  1099 => 550,  1097 => 549,  1094 => 548,  1091 => 547,  1087 => 544,  1079 => 538,  1073 => 534,  1067 => 533,  1065 => 532,  1060 => 531,  1056 => 529,  1049 => 528,  1047 => 527,  1045 => 526,  1042 => 525,  1039 => 524,  1035 => 521,  1027 => 515,  1021 => 511,  1015 => 510,  1013 => 509,  1008 => 508,  1004 => 506,  997 => 505,  995 => 504,  993 => 503,  990 => 502,  987 => 501,  983 => 498,  975 => 492,  969 => 488,  963 => 487,  961 => 486,  956 => 485,  952 => 483,  945 => 482,  943 => 481,  941 => 480,  938 => 479,  935 => 478,  931 => 475,  923 => 469,  917 => 465,  911 => 464,  909 => 463,  904 => 462,  900 => 460,  893 => 459,  891 => 458,  889 => 457,  886 => 456,  883 => 455,  879 => 452,  871 => 446,  865 => 442,  859 => 441,  857 => 440,  852 => 439,  848 => 437,  841 => 436,  839 => 435,  837 => 434,  834 => 433,  831 => 432,  827 => 429,  823 => 426,  819 => 424,  814 => 421,  811 => 420,  806 => 418,  803 => 417,  799 => 415,  794 => 412,  791 => 411,  786 => 409,  784 => 408,  780 => 406,  774 => 405,  772 => 404,  767 => 403,  763 => 401,  756 => 400,  754 => 399,  752 => 398,  749 => 397,  743 => 392,  739 => 390,  734 => 387,  731 => 386,  725 => 385,  723 => 384,  718 => 383,  713 => 381,  710 => 380,  706 => 378,  701 => 375,  698 => 374,  692 => 373,  690 => 372,  685 => 371,  680 => 369,  678 => 368,  675 => 367,  672 => 365,  666 => 363,  664 => 362,  661 => 361,  655 => 360,  653 => 359,  648 => 358,  644 => 356,  636 => 352,  633 => 350,  630 => 349,  626 => 346,  622 => 343,  618 => 341,  613 => 338,  610 => 337,  605 => 335,  602 => 334,  598 => 332,  593 => 329,  590 => 328,  585 => 326,  583 => 325,  579 => 323,  573 => 322,  571 => 321,  566 => 320,  561 => 318,  558 => 316,  551 => 314,  549 => 313,  547 => 312,  544 => 311,  541 => 310,  537 => 307,  529 => 301,  523 => 297,  517 => 296,  515 => 295,  510 => 294,  506 => 292,  499 => 291,  497 => 290,  495 => 289,  492 => 288,  489 => 287,  485 => 284,  477 => 278,  471 => 274,  465 => 273,  463 => 272,  458 => 271,  454 => 269,  449 => 268,  447 => 267,  445 => 266,  442 => 265,  433 => 259,  427 => 255,  425 => 254,  421 => 252,  418 => 250,  415 => 249,  412 => 247,  407 => 244,  404 => 243,  401 => 241,  399 => 240,  397 => 239,  394 => 238,  391 => 237,  387 => 234,  384 => 233,  381 => 231,  378 => 230,  373 => 226,  371 => 225,  369 => 224,  366 => 223,  362 => 220,  358 => 218,  355 => 216,  352 => 215,  346 => 211,  338 => 209,  336 => 208,  333 => 207,  327 => 204,  324 => 203,  322 => 202,  319 => 201,  314 => 199,  311 => 198,  307 => 196,  302 => 193,  299 => 192,  294 => 190,  291 => 189,  287 => 187,  282 => 184,  279 => 183,  274 => 181,  272 => 180,  268 => 178,  264 => 176,  257 => 175,  255 => 174,  253 => 173,  250 => 172,  247 => 171,  243 => 168,  239 => 165,  235 => 163,  230 => 160,  227 => 159,  222 => 157,  219 => 156,  215 => 154,  210 => 151,  207 => 150,  202 => 148,  200 => 147,  196 => 145,  190 => 144,  188 => 143,  183 => 142,  179 => 140,  174 => 139,  172 => 138,  170 => 137,  167 => 136,  164 => 135,  160 => 132,  156 => 129,  152 => 127,  147 => 124,  144 => 123,  139 => 121,  136 => 120,  132 => 118,  127 => 115,  124 => 114,  119 => 112,  117 => 111,  113 => 109,  107 => 108,  105 => 107,  100 => 106,  96 => 104,  91 => 103,  89 => 102,  87 => 101,  83 => 99,  81 => 98,  79 => 97,  75 => 95,  72 => 93,  68 => 90,  65 => 88,  62 => 86,  56 => 82,  52 => 80,  47 => 78,  45 => 77,  43 => 76,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/enterpriseplus/templates/page.html.twig", "/Users/cahurt/Dropbox/Chris/webdevplayground/cahurtlab/themes/custom/enterpriseplus/templates/page.html.twig");
    }
}
