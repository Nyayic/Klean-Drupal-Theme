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

/* __string_template__038689539eef87904d6415371205f2fcda2b04d635cc5e75318ec9835556f513 */
class __TwigTemplate_4f94bc594c74dc3b94e08fedb2218da8e16887d71d56c85106b2885ad24652cc extends \Twig\Template
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
                            <h4 class=\"font-weight-bold mb-n1\">01</h4>
                            <small class=\"text-white text-uppercase\">Jan</small>
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
        return "__string_template__038689539eef87904d6415371205f2fcda2b04d635cc5e75318ec9835556f513";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 14,  78 => 13,  73 => 11,  68 => 9,  58 => 2,  55 => 1,);
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
                            <h4 class=\"font-weight-bold mb-n1\">01</h4>
                            <small class=\"text-white text-uppercase\">Jan</small>
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
         ", "__string_template__038689539eef87904d6415371205f2fcda2b04d635cc5e75318ec9835556f513", "");
    }
}
