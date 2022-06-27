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

/* themes/contrib/klean02/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_7eaba3619422b2641768b5d68fab69916b9855690dcb7a249482b6547782c019 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25, "for" => 31, "set" => 32];
        $filters = ["escape" => 23, "join" => 33, "t" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
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
        // line 22
        echo "
<div id=\"header-carousel\" class=\"carousel ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["effect"] ?? null)), "html", null, true);
        echo "\"
    data-interval=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null)), "html", null, true);
        echo "\"
    ";
        // line 25
        if (($context["ride"] ?? null)) {
            echo " data-ride=\"carousel\" ";
        }
        // line 26
        echo "    data-pause=\"";
        if (($context["pause"] ?? null)) {
            echo "hover";
        } else {
            echo "false";
        }
        echo "\"
>
  ";
        // line 29
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 30
            echo "  <ol class=\"carousel-indicators\">
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 32
                echo "          ";
                $context["indicator_classes"] = [0 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
                // line 33
                echo "          <li class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null)), " "), "html", null, true);
                echo "\" data-target=\"#header-carousel\" data-slide-to=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ol>
  ";
        }
        // line 37
        echo "
  ";
        // line 39
        echo "  <div class=\"carousel-inner\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "        ";
            $context["row_classes"] = [0 => "carousel-item", 1 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
            // line 42
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null)), " "), "html", null, true);
            echo "\">
        ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "image", [])), "html", null, true);
            echo "
        ";
            // line 44
            if (($this->getAttribute($context["row"], "title", []) || $this->getAttribute($context["row"], "description", []))) {
                // line 45
                echo "            ";
                if (($context["use_caption"] ?? null)) {
                    // line 46
                    echo "            <div class=\"carousel-caption d-flex align-items-center justify-content-center\">
              <div class=\"p-5\" style=\"width: 100%; max-width: 900px;\">
                ";
                }
                // line 49
                echo "                ";
                if ($this->getAttribute($context["row"], "description", [])) {
                    // line 50
                    echo "                    <h5 class=\"text-primary text-uppercase mb-md-3\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "description", [])), "html", null, true);
                    echo "</h5>
                ";
                }
                // line 52
                echo "                ";
                if ($this->getAttribute($context["row"], "title", [])) {
                    // line 53
                    echo "                    <h1 class=\"display-3 text-white mb-md-4\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "title", [])), "html", null, true);
                    echo "</h1>
                ";
                }
                // line 55
                echo "                
                ";
                // line 56
                if (($context["use_caption"] ?? null)) {
                    // line 57
                    echo "              </div>
            </div>
            ";
                }
                // line 60
                echo "        ";
            }
            // line 61
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  </div>
  ";
        // line 65
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 66
            echo "    <a class=\"carousel-control-prev\" href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 75
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/klean02/templates/views-bootstrap-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 75,  242 => 72,  237 => 70,  232 => 68,  226 => 66,  223 => 65,  220 => 63,  205 => 61,  202 => 60,  197 => 57,  195 => 56,  192 => 55,  186 => 53,  183 => 52,  177 => 50,  174 => 49,  169 => 46,  166 => 45,  164 => 44,  160 => 43,  155 => 42,  152 => 41,  135 => 40,  132 => 39,  129 => 37,  125 => 35,  106 => 33,  103 => 32,  86 => 31,  83 => 30,  80 => 29,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  55 => 22,);
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
 * Default theme implementation for displaying a view as a bootstrap carousel.
 *
 * Available variables:
 * - view: The view object.
 * - rows: A list of the view's row items.
 * - id: A valid HTML ID and guaranteed to be unique.
 * - interval: The amount of time to delay between automatically cycling a
 *   slide item. If false, carousel will not automatically cycle.
 * - pause: Pauses the cycling of the carousel on mouseenter and
 *   resumes the cycling of the carousel on mouseleave.
 * - wrap: Whether the carousel should cycle continuously or have
 *   hard stops.
 *
 * @see template_preprocess_views_bootstrap_carousel()
 *
 * @ingroup themeable
 */
#}

<div id=\"header-carousel\" class=\"carousel {{ effect }}\"
    data-interval=\"{{ interval }}\"
    {% if ride %} data-ride=\"carousel\" {% endif %}
    data-pause=\"{% if pause %}hover{% else %}false{% endif %}\"
>
  {# Show indicators if set in view. #}
  {%  if indicators %}
  <ol class=\"carousel-indicators\">
      {% for key, row in rows %}
          {% set indicator_classes = [loop.first ? 'active'] %}
          <li class=\"{{ indicator_classes|join(' ') }}\" data-target=\"#header-carousel\" data-slide-to=\"{{ key }}\"></li>
      {% endfor %}
  </ol>
  {% endif %}

  {# Carousel body. #}
  <div class=\"carousel-inner\">
    {% for row in rows %}
        {% set row_classes = ['carousel-item', loop.first ? 'active'] %}
        <div class=\"{{ row_classes|join(' ') }}\">
        {{ row.image }}
        {% if row.title or row.description %}
            {%  if use_caption %}
            <div class=\"carousel-caption d-flex align-items-center justify-content-center\">
              <div class=\"p-5\" style=\"width: 100%; max-width: 900px;\">
                {% endif %}
                {% if row.description %}
                    <h5 class=\"text-primary text-uppercase mb-md-3\">{{ row.description }}</h5>
                {% endif %}
                {% if row.title %}
                    <h1 class=\"display-3 text-white mb-md-4\">{{ row.title }}</h1>
                {% endif %}
                
                {%  if use_caption %}
              </div>
            </div>
            {% endif %}
        {% endif %}
        </div>
    {% endfor %}
  </div>
  {# Controls #}
  {% if navigation %}
    <a class=\"carousel-control-prev\" href=\"#{{ id }}\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">{{ 'Previous'|t }}</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#{{ id }}\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">{{ 'Next'|t }}</span>
    </a>
  {% endif %}
</div>", "themes/contrib/klean02/templates/views-bootstrap-carousel.html.twig", "C:\\xampp\\htdocs\\klean02\\web\\themes\\contrib\\klean02\\templates\\views-bootstrap-carousel.html.twig");
    }
}
