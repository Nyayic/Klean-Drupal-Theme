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

/* __string_template__af98f252aaa2ad27e02e5c02f79b50f29049bbc8cb324f1b2f3d5b922f9677e8 */
class __TwigTemplate_e1af75273e6fe020e0fae8cb2989cf93fc6e56aeb6103f5e19e4b1d1c6e792fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
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
        echo "                    <div class=\"position-relative mb-4\">
                        <img class=\"img-fluid rounded w-100\" src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"blog-date\">
                            <h4 class=\"font-weight-bold mb-n1\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_1"] ?? null)), "html", null, true);
        echo "</h4>
                            <small class=\"text-white text-uppercase\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"d-flex mb-2\">
                        <a class=\"text-secondary text-uppercase font-weight-medium\" href=\"\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null)), "html", null, true);
        echo "</a>
                        <span class=\"text-primary px-2\">|</span>
                        <a class=\"text-secondary text-uppercase font-weight-medium\" href=\"\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_tags"] ?? null)), "html", null, true);
        echo "</a>
                    </div>
                    <h5 class=\"font-weight-medium mb-2\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
                    <p class=\"mb-4\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
                    <a class=\"btn btn-sm btn-primary py-2\" href=\"\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "</a>
         ";
    }

    public function getTemplateName()
    {
        return "__string_template__af98f252aaa2ad27e02e5c02f79b50f29049bbc8cb324f1b2f3d5b922f9677e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  88 => 14,  84 => 13,  79 => 11,  74 => 9,  67 => 5,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}                    <div class=\"position-relative mb-4\">
                        <img class=\"img-fluid rounded w-100\" src=\"{{ field_image_1 }}\" alt=\"\">
                        <div class=\"blog-date\">
                            <h4 class=\"font-weight-bold mb-n1\">{{ created_1 }}</h4>
                            <small class=\"text-white text-uppercase\">{{ created }}</small>
                        </div>
                    </div>
                    <div class=\"d-flex mb-2\">
                        <a class=\"text-secondary text-uppercase font-weight-medium\" href=\"\">{{ uid }}</a>
                        <span class=\"text-primary px-2\">|</span>
                        <a class=\"text-secondary text-uppercase font-weight-medium\" href=\"\">{{ field_tags }}</a>
                    </div>
                    <h5 class=\"font-weight-medium mb-2\">{{ title }}</h5>
                    <p class=\"mb-4\">{{ body }}</p>
                    <a class=\"btn btn-sm btn-primary py-2\" href=\"\">{{ view_node }}</a>
         ", "__string_template__af98f252aaa2ad27e02e5c02f79b50f29049bbc8cb324f1b2f3d5b922f9677e8", "");
    }
}
