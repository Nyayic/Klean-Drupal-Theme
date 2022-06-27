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

     
      <div class=\"container-fluid bg-primary py-5 mb-5\">
        <div class=\"container py-5\">
          <div class=\"row align-items-center py-4\">
           ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 137
            echo "            <div class=\"col-md-6 text-center text-md-left\">
              <h1 class=\"display-4 mb-4 mb-md-0 text-secondary text-uppercase\"> 
                ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
            echo "
              </h1>
            </div>
            ";
        }
        // line 143
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 144
            echo "            <div class=\"col-md-6 text-center text-md-right\">
              <div class=\"d-inline-flex align-items-center\">
                <a href=\"btn btn-sm btn-outline-light\">";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</a>
              </div>
            </div>
            ";
        }
        // line 150
        echo "          </div>
        </div>
      </div>
      
      <!-- slider -->
      ";
        // line 155
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 156
            echo "        <div class=\"container-fluid p-0\">
            ";
            // line 157
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 160
        echo "      <!-- contact info -->
      ";
        // line 161
        if ($this->getAttribute(($context["page"] ?? null), "contactinfo", [])) {
            // line 162
            echo "      <div class=\"container-fluid pb-5 contact-info\">
         ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contactinfo", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 166
        echo "      
      ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 168
            echo "        <div class=\"highlighted\">
          <aside class=\"";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
            ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </aside>
        </div>
      ";
        }
        // line 174
        echo "
      ";
        // line 175
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 176
            echo "        ";
            $this->displayBlock('featured', $context, $blocks);
            // line 185
            echo "      ";
        }
        // line 186
        echo "
      ";
        // line 187
        if ($this->getAttribute(($context["page"] ?? null), "our_services", [])) {
            // line 188
            echo "      <div class=\"container-fluid bg-service py-5\">
        <div class=\"container py-5\">
            <div class=\"row align-items-center\">
              ";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "our_services", [])), "html", null, true);
            echo "
            </div>
        </div>
      </div>
      ";
        }
        // line 196
        echo "
      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        ";
        // line 198
        $this->displayBlock('content', $context, $blocks);
        // line 231
        echo "      </div>
      ";
        // line 232
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 233
            echo "        <div class=\"featured-bottom\">
          <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
              ";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
            </div>
          </div>
          ";
            // line 244
            echo "          <div class=\"container-fluid pt-5\">
            <div class=\"container pt-5\">
              <div class=\"row align-items-end mb-4\">
                ";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 253
        echo "      <footer class=\"\">
        ";
        // line 254
        $this->displayBlock('footer', $context, $blocks);
        // line 281
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

    // line 176
    public function block_featured($context, array $blocks = [])
    {
        // line 177
        echo "          <div class=\"container-fluid py-5 mb-5p\">
            <div class=\"container\">
              <div class=\"row\">
                ";
        // line 180
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        ";
    }

    // line 198
    public function block_content($context, array $blocks = [])
    {
        // line 199
        echo "          <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
           
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main";
        // line 202
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
                  <section class=\"section\">
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    ";
        // line 205
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                  </section>
                </main>
              ";
        // line 208
        if ($this->getAttribute(($context["page"] ?? null), "why_us", [])) {
            // line 209
            echo "              <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row\">
                    ";
            // line 212
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "why_us", [])), "html", null, true);
            echo "
                    </div>
                </div>
              </div>
              ";
        }
        // line 217
        echo "
              ";
        // line 218
        if ($this->getAttribute(($context["page"] ?? null), "portfolio", [])) {
            // line 219
            echo "              <div class=\"container-fluid bg-portfolio py-5\">
                <div class=\"container py-5\">
                  <div class=\"row m-0 portfolio-container\" style=\"position: relative; height: 517.966px;\">
                    ";
            // line 222
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "portfolio", [])), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
              ";
        }
        // line 227
        echo "
            </div>
          </div>
        ";
    }

    // line 254
    public function block_footer($context, array $blocks = [])
    {
        // line 255
        echo "        <div class=\"container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5\">
          <div class=\"row pt-5\">
            ";
        // line 257
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 258
            echo "            <div class=\"col-lg-3 col-md-6 mb-5\">
              ";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              ";
            // line 262
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              ";
            // line 265
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
            </div>
               
            ";
        }
        // line 272
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 273
            echo "            <div class=\"container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5\" style=\"border-color: #3E3E4E !important;\">
             ";
            // line 274
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 277
        echo "          </div>
          
        </div>
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
        return array (  489 => 277,  483 => 274,  480 => 273,  477 => 272,  470 => 268,  464 => 265,  458 => 262,  452 => 259,  449 => 258,  447 => 257,  443 => 255,  440 => 254,  433 => 227,  425 => 222,  420 => 219,  418 => 218,  415 => 217,  407 => 212,  402 => 209,  400 => 208,  394 => 205,  388 => 202,  381 => 199,  378 => 198,  369 => 180,  364 => 177,  361 => 176,  356 => 127,  352 => 125,  349 => 124,  345 => 122,  342 => 121,  338 => 119,  332 => 116,  329 => 115,  327 => 114,  323 => 113,  319 => 111,  317 => 110,  312 => 109,  308 => 107,  306 => 106,  301 => 103,  297 => 101,  293 => 99,  290 => 98,  284 => 95,  281 => 94,  279 => 93,  273 => 91,  269 => 89,  267 => 88,  262 => 87,  259 => 86,  256 => 85,  249 => 281,  247 => 254,  244 => 253,  235 => 247,  230 => 244,  224 => 236,  219 => 233,  217 => 232,  214 => 231,  212 => 198,  208 => 196,  200 => 191,  195 => 188,  193 => 187,  190 => 186,  187 => 185,  184 => 176,  182 => 175,  179 => 174,  172 => 170,  168 => 169,  165 => 168,  163 => 167,  160 => 166,  154 => 163,  151 => 162,  149 => 161,  146 => 160,  140 => 157,  137 => 156,  135 => 155,  128 => 150,  121 => 146,  117 => 144,  114 => 143,  107 => 139,  103 => 137,  101 => 136,  92 => 129,  90 => 85,  84 => 82,  79 => 79,  73 => 76,  70 => 75,  68 => 74,  63 => 72,  59 => 70,);
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

     
      <div class=\"container-fluid bg-primary py-5 mb-5\">
        <div class=\"container py-5\">
          <div class=\"row align-items-center py-4\">
           {% if page.title %}
            <div class=\"col-md-6 text-center text-md-left\">
              <h1 class=\"display-4 mb-4 mb-md-0 text-secondary text-uppercase\"> 
                {{ page.title }}
              </h1>
            </div>
            {% endif %}
            {% if page.breadcrumb %}
            <div class=\"col-md-6 text-center text-md-right\">
              <div class=\"d-inline-flex align-items-center\">
                <a href=\"btn btn-sm btn-outline-light\">{{ page.breadcrumb }}</a>
              </div>
            </div>
            {% endif %}
          </div>
        </div>
      </div>
      
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
          <div class=\"container-fluid py-5 mb-5p\">
            <div class=\"container\">
              <div class=\"row\">
                {{ page.featured_top }}
              </div>
            </div>
          </div>
        {% endblock %}
      {% endif %}

      {% if page.our_services %}
      <div class=\"container-fluid bg-service py-5\">
        <div class=\"container py-5\">
            <div class=\"row align-items-center\">
              {{ page.our_services }}
            </div>
        </div>
      </div>
      {% endif %}

      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        {% block content %}
          <div id=\"main\" class=\"{{ container }}\">
           
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main{{ content_attributes }}>
                  <section class=\"section\">
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    {{ page.content }}
                  </section>
                </main>
              {% if page.why_us %}
              <div class=\"container-fluid py-5\">
                <div class=\"container py-5\">
                    <div class=\"row\">
                    {{ page.why_us }}
                    </div>
                </div>
              </div>
              {% endif %}

              {% if page.portfolio %}
              <div class=\"container-fluid bg-portfolio py-5\">
                <div class=\"container py-5\">
                  <div class=\"row m-0 portfolio-container\" style=\"position: relative; height: 517.966px;\">
                    {{ page.portfolio }}
                  </div>
                </div>
              </div>
              {% endif %}

            </div>
          </div>
        {% endblock %}
      </div>
      {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
        <div class=\"featured-bottom\">
          <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
              {{ page.featured_bottom_first }}
            </div>
          </div>
          {# <div class=\"container-fluid bg-testimonial py-5\">
            <div class=\"container py-5\">
            {{ page.featured_bottom_second }}
            </div>
          </div> #}
          <div class=\"container-fluid pt-5\">
            <div class=\"container pt-5\">
              <div class=\"row align-items-end mb-4\">
                {{ page.featured_bottom_third }}
              </div>
            </div>
          </div>
        </div>
      {% endif %}
      <footer class=\"\">
        {% block footer %}
        <div class=\"container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5\">
          <div class=\"row pt-5\">
            {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
            <div class=\"col-lg-3 col-md-6 mb-5\">
              {{ page.footer_first }}
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              {{ page.footer_second }}
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              {{ page.footer_third }}
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
              {{ page.footer_fourth }}
            </div>
               
            {% endif %}
            {% if page.footer_fifth %}
            <div class=\"container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5\" style=\"border-color: #3E3E4E !important;\">
             {{ page.footer_fifth }}
            </div>
            {% endif %}
          </div>
          
        </div>
        {% endblock %}
      </footer>
    </div>
  </div>
  ", "themes/contrib/klean02/templates/page.html.twig", "C:\\xampp\\htdocs\\klean02\\web\\themes\\contrib\\klean02\\templates\\page.html.twig");
    }
}
