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

/* themes/contrib/klean02/templates/views/owlcarousel-views--services--servicecarousel.html.twig */
class __TwigTemplate_23088ceabd853fee66900968283711b8b51e523e26eb93192e30ee3d75b352fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 8];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div>
";
        }
        // line 4
        echo "  ";
        if (($context["title"] ?? null)) {
            // line 5
            echo "    <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        if (($context["attributes"] ?? null)) {
            // line 13
            echo "</div>
";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/klean02/templates/views/owlcarousel-views--services--servicecarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 15,  93 => 13,  91 => 12,  88 => 11,  77 => 9,  73 => 8,  70 => 7,  64 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if attributes -%}
  <div>
{% endif %}
  {% if title %}
    <h3>{{ title }}</h3>
  {% endif %}

  {% for row in rows %}
    <div{{ row.attributes }}>{{ row.content }}</div>
  {% endfor %}

{% if attributes -%}
  </div>
{% endif %}

", "themes/contrib/klean02/templates/views/owlcarousel-views--services--servicecarousel.html.twig", "C:\\xampp\\htdocs\\klean02\\web\\themes\\contrib\\klean02\\templates\\views\\owlcarousel-views--services--servicecarousel.html.twig");
    }
}
