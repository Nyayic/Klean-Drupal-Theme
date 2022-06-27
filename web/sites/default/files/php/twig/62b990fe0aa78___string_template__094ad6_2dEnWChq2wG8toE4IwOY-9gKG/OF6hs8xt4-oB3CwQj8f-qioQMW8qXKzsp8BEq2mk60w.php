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

/* __string_template__094ad6e0477b01084c2171de9572c28f0ba5217f3b8b8e04e4bf02641126c56c */
class __TwigTemplate_a6daa3f608e968496bab05cb7dd6358fa1bb364eee34701cbb2a90c1cf928da8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo " <h6 class=\"text-secondary font-weight-semi-bold text-uppercase mb-3\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h6>
    <h1 class=\"mb-4 section-title text-white\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_subtitle"] ?? null)), "html", null, true);
        echo "</h1>
   <p class=\"text-white\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
    <a href=\"\" class=\"btn btn-primary mt-3 py-2 px-4\">More Services</a>
";
    }

    public function getTemplateName()
    {
        return "__string_template__094ad6e0477b01084c2171de9572c28f0ba5217f3b8b8e04e4bf02641126c56c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 3,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #} <h6 class=\"text-secondary font-weight-semi-bold text-uppercase mb-3\">{{ title }}</h6>
    <h1 class=\"mb-4 section-title text-white\">{{ field_subtitle }}</h1>
   <p class=\"text-white\">{{ body }}</p>
    <a href=\"\" class=\"btn btn-primary mt-3 py-2 px-4\">More Services</a>
", "__string_template__094ad6e0477b01084c2171de9572c28f0ba5217f3b8b8e04e4bf02641126c56c", "");
    }
}
