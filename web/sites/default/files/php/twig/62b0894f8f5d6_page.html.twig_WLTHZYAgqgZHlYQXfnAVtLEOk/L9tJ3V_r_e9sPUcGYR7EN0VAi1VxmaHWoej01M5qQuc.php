<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/klean02/templates/page.html.twig */
class __TwigTemplate_aa1317e744680cb1c8e55a7d42b02170a19b9f9e14bbf9e3c0b9a74791507430 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74, "block" => 85];
        $filters = ["t" => 72, "escape" => 76];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 70
        echo "  <div id=\"page-wrapper\">
    <div id=\"page\">
      <header id=\"header\" class=\"header container-fluid\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
        <div class=\"row\">
          ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 75
            echo "          <div class=\"col-lg-3 bg-secondary d-none d-lg-block\">
            ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 79
        echo "          <div class=\"col-lg-9\">
            <div class=\"row bg-dark d-none d-lg-flex\">
              <div class=\"col-lg-7 text-left text-white\">
              ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
        echo "
              
         
          ";
        // line 85
        $this->displayBlock('head', $context, $blocks);
        // line 129
        echo "       </div>
      </header>
      <!-- slider -->
      ";
        // line 132
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 133
            echo "        <div class=\"container-fluid p-0\">
            ";
            // line 134
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 137
        echo "      <!-- contact info -->
      ";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "contactinfo", [])) {
            // line 139
            echo "      <div class=\"container-fluid pb-5 contact-info\">
         ";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contactinfo", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 143
        echo "      
      ";
        // line 144
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 145
            echo "        <div class=\"highlighted\">
          <aside class=\"";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
            ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 152
            echo "        ";
            $this->displayBlock('featured', $context, $blocks);
            // line 159
            echo "      ";
        }
        // line 160
        echo "      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        ";
        // line 161
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "      </div>
      ";
        // line 189
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 190
            echo "        <div class=\"featured-bottom\">
          <aside class=\"";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
            ";
            // line 192
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
            ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
            ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 198
        echo "      <footer class=\"site-footer\">
        ";
        // line 199
        $this->displayBlock('footer', $context, $blocks);
        // line 216
        echo "      </footer>
    </div>
  </div>
  ";
    }

    // line 85
    public function block_head($context, array $blocks = [])
    {
        // line 86
        echo "          ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 87
            echo "            <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 88
            if (($context["container_navbar"] ?? null)) {
                // line 89
                echo "            <div class=\"container\">
            ";
            }
            // line 91
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
               
                ";
            // line 93
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 94
                echo "                  <div class=\"form-inline navbar-form ml-auto\">
                    ";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 98
            echo "            ";
            if (($context["container_navbar"] ?? null)) {
                // line 99
                echo "            </div>
            ";
            }
            // line 101
            echo "            </nav>
          ";
        }
        // line 103
        echo "            </div>
          </div>
          <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-0\">
            ";
        // line 106
        if (($context["container_navbar"] ?? null)) {
            // line 107
            echo "            <div class=\"container\">
            ";
        }
        // line 109
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
              ";
        // line 110
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 111
            echo "                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                  ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                  ";
            // line 114
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 115
                echo "                    <div class=\"form-inline navbar-form justify-content-end\">
                      ";
                // line 116
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
                    </div>
                  ";
            }
            // line 119
            echo "              </div>
              ";
        }
        // line 121
        echo "              ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 122
            echo "                <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
              ";
        }
        // line 124
        echo "            ";
        if (($context["container_navbar"] ?? null)) {
            // line 125
            echo "            </div>
            ";
        }
        // line 127
        echo "          </nav>
        ";
    }

    // line 152
    public function block_featured($context, array $blocks = [])
    {
        // line 153
        echo "          <div class=\"featured-top\">
            <aside class=\"featured-top__inner section ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"complementary\">
              ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
            </aside>
          </div>
        ";
    }

    // line 161
    public function block_content($context, array $blocks = [])
    {
        // line 162
        echo "          <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
                  <section class=\"section\">
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    ";
        // line 168
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                  </section>
                </main>
              ";
        // line 171
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 172
            echo "                <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 178
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 179
            echo "                <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 181
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 185
        echo "            </div>
          </div>
        ";
    }

    // line 199
    public function block_footer($context, array $blocks = [])
    {
        // line 200
        echo "          <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 201
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 202
            echo "              <div class=\"site-footer__top clearfix\">
                ";
            // line 203
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
                ";
            // line 204
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
                ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
                ";
            // line 206
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 209
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 210
            echo "              <div class=\"site-footer__bottom\">
                ";
            // line 211
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 214
        echo "          </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/klean02/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 214,  416 => 211,  413 => 210,  410 => 209,  404 => 206,  400 => 205,  396 => 204,  392 => 203,  389 => 202,  387 => 201,  382 => 200,  379 => 199,  373 => 185,  366 => 181,  360 => 179,  357 => 178,  350 => 174,  344 => 172,  342 => 171,  336 => 168,  330 => 165,  325 => 163,  320 => 162,  317 => 161,  309 => 155,  305 => 154,  302 => 153,  299 => 152,  294 => 127,  290 => 125,  287 => 124,  283 => 122,  280 => 121,  276 => 119,  270 => 116,  267 => 115,  265 => 114,  261 => 113,  257 => 111,  255 => 110,  250 => 109,  246 => 107,  244 => 106,  239 => 103,  235 => 101,  231 => 99,  228 => 98,  222 => 95,  219 => 94,  217 => 93,  211 => 91,  207 => 89,  205 => 88,  200 => 87,  197 => 86,  194 => 85,  187 => 216,  185 => 199,  182 => 198,  175 => 194,  171 => 193,  167 => 192,  163 => 191,  160 => 190,  158 => 189,  155 => 188,  153 => 161,  150 => 160,  147 => 159,  144 => 152,  141 => 151,  134 => 147,  130 => 146,  127 => 145,  125 => 144,  122 => 143,  116 => 140,  113 => 139,  111 => 138,  108 => 137,  102 => 134,  99 => 133,  97 => 132,  92 => 129,  90 => 85,  84 => 82,  79 => 79,  73 => 76,  70 => 75,  68 => 74,  63 => 72,  59 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
  /**
   * @file
   * Bootstrap Barrio's theme implementation to display a single page.
   *
   * The doctype, html, head and body tags are not in this template. Instead they
   * can be found in the html.html.twig template normally located in the
   * core/modules/system directory.
   *
   * Available variables:
   *
   * General utility variables:
   * - base_path: The base URL path of the Drupal installation. Will usually be
   *   \"/\" unless you have installed Drupal in a sub-directory.
   * - is_front: A flag indicating if the current page is the front page.
   * - logged_in: A flag indicating if the user is registered and signed in.
   * - is_admin: A flag indicating if the user has permission to access
   *   administration pages.
   *
   * Site identity:
   * - front_page: The URL of the front page. Use this instead of base_path when
   *   linking to the front page. This includes the language domain or prefix.
   * - logo: The url of the logo image, as defined in theme settings.
   * - site_name: The name of the site. This is empty when displaying the site
   *   name has been disabled in the theme settings.
   * - site_slogan: The slogan of the site. This is empty when displaying the site
   *   slogan has been disabled in theme settings.
  
   * Page content (in order of occurrence in the default page.html.twig):
   * - node: Fully loaded node, if there is an automatically-loaded node
   *   associated with the page and the node ID is the second argument in the
   *   page's path (e.g. node/12345 and node/12345/revisions, but not
   *   comment/reply/12345).
   *
   * Regions:
   * - page.top_header: Items for the top header region.
   * - page.top_header_form: Items for the top header form region.
   * - page.header: Items for the header region.
   * - page.header_form: Items for the header form region.
   * - page.highlighted: Items for the highlighted region.
   * - page.primary_menu: Items for the primary menu region.
   * - page.secondary_menu: Items for the secondary menu region.
   * - page.featured_top: Items for the featured top region.
   * - page.content: The main content of the current page.
   * - page.sidebar_first: Items for the first sidebar.
   * - page.sidebar_second: Items for the second sidebar.
   * - page.featured_bottom_first: Items for the first featured bottom region.
   * - page.featured_bottom_second: Items for the second featured bottom region.
   * - page.featured_bottom_third: Items for the third featured bottom region.
   * - page.footer_first: Items for the first footer column.
   * - page.footer_second: Items for the second footer column.
   * - page.footer_third: Items for the third footer column.
   * - page.footer_fourth: Items for the fourth footer column.
   * - page.footer_fifth: Items for the fifth footer column.
   * - page.breadcrumb: Items for the breadcrumb region.
   *
   * Theme variables:
   * - navbar_top_attributes: Items for the header region.
   * - navbar_attributes: Items for the header region.
   * - content_attributes: Items for the header region.
   * - sidebar_first_attributes: Items for the highlighted region.
   * - sidebar_second_attributes: Items for the primary menu region.
   * - sidebar_collapse: If the sidebar_first will collapse.
   *
   * @see template_preprocess_page()
   * @see bootstrap_barrio_preprocess_page()
   * @see html.html.twig
   */
  #}
  <div id=\"page-wrapper\">
    <div id=\"page\">
      <header id=\"header\" class=\"header container-fluid\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
        <div class=\"row\">
          {% if page.branding %}
          <div class=\"col-lg-3 bg-secondary d-none d-lg-block\">
            {{ page.branding }}
          </div>
          {% endif %}
          <div class=\"col-lg-9\">
            <div class=\"row bg-dark d-none d-lg-flex\">
              <div class=\"col-lg-7 text-left text-white\">
              {{ page.top_header }}
              
         
          {% block head %}
          {% if page.secondary_menu or page.top_header or page.top_header_form %}
            <nav{{ navbar_top_attributes }}>
            {% if container_navbar %}
            <div class=\"container\">
            {% endif %}
                {{ page.secondary_menu }}
               
                {% if page.top_header_form %}
                  <div class=\"form-inline navbar-form ml-auto\">
                    {{ page.top_header_form }}
                  </div>
                {% endif %}
            {% if container_navbar %}
            </div>
            {% endif %}
            </nav>
          {% endif %}
            </div>
          </div>
          <nav class=\"navbar navbar-expand-lg bg-white navbar-light p-0\">
            {% if container_navbar %}
            <div class=\"container\">
            {% endif %}
              {{ page.header }}
              {% if page.primary_menu or page.header_form %}
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                  {{ page.primary_menu }}
                  {% if page.header_form %}
                    <div class=\"form-inline navbar-form justify-content-end\">
                      {{ page.header_form }}
                    </div>
                  {% endif %}
              </div>
              {% endif %}
              {% if sidebar_collapse %}
                <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
              {% endif %}
            {% if container_navbar %}
            </div>
            {% endif %}
          </nav>
        {% endblock %}
       </div>
      </header>
      <!-- slider -->
      {% if page.slideshow %}
        <div class=\"container-fluid p-0\">
            {{ page.slideshow }}
        </div>
      {% endif %}
      <!-- contact info -->
      {% if page.contactinfo %}
      <div class=\"container-fluid pb-5 contact-info\">
         {{ page.contactinfo }}
      </div>
      {% endif %}
      
      {% if page.highlighted %}
        <div class=\"highlighted\">
          <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
            {{ page.highlighted }}
          </aside>
        </div>
      {% endif %}
      {% if page.featured_top %}
        {% block featured %}
          <div class=\"featured-top\">
            <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
              {{ page.featured_top }}
            </aside>
          </div>
        {% endblock %}
      {% endif %}
      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        {% block content %}
          <div id=\"main\" class=\"{{ container }}\">
            {{ page.breadcrumb }}
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main{{ content_attributes }}>
                  <section class=\"section\">
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    {{ page.content }}
                  </section>
                </main>
              {% if page.sidebar_first %}
                <div{{ sidebar_first_attributes }}>
                  <aside class=\"section\" role=\"complementary\">
                    {{ page.sidebar_first }}
                  </aside>
                </div>
              {% endif %}
              {% if page.sidebar_second %}
                <div{{ sidebar_second_attributes }}>
                  <aside class=\"section\" role=\"complementary\">
                    {{ page.sidebar_second }}
                  </aside>
                </div>
              {% endif %}
            </div>
          </div>
        {% endblock %}
      </div>
      {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
        <div class=\"featured-bottom\">
          <aside class=\"{{ container }} clearfix\" role=\"complementary\">
            {{ page.featured_bottom_first }}
            {{ page.featured_bottom_second }}
            {{ page.featured_bottom_third }}
          </aside>
        </div>
      {% endif %}
      <footer class=\"site-footer\">
        {% block footer %}
          <div class=\"{{ container }}\">
            {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
              <div class=\"site-footer__top clearfix\">
                {{ page.footer_first }}
                {{ page.footer_second }}
                {{ page.footer_third }}
                {{ page.footer_fourth }}
              </div>
            {% endif %}
            {% if page.footer_fifth %}
              <div class=\"site-footer__bottom\">
                {{ page.footer_fifth }}
              </div>
            {% endif %}
          </div>
        {% endblock %}
      </footer>
    </div>
  </div>
  ", "themes/contrib/klean02/templates/page.html.twig", "C:\\xampp\\htdocs\\klean02\\web\\themes\\contrib\\klean02\\templates\\page.html.twig");
    }
}
