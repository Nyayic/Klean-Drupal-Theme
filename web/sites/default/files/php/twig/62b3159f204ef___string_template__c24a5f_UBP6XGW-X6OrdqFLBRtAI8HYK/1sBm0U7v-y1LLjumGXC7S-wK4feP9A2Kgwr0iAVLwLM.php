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

/* __string_template__c24a5f2783f979f1d4ca545a57794ad58e12db988878e8c957db172159ebd936 */
class __TwigTemplate_8e06f9de35d83f95338d56501a2c1868fb4ec7d706c0a05b6a73718383e3676e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
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
        // line 2
        echo "<div class=\"col-lg-5\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100 rounded overflow-hidden\">
                        <img class=\"position-absolute w-100 h-100\" src=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" style=\"object-fit: cover;\">
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c24a5f2783f979f1d4ca545a57794ad58e12db988878e8c957db172159ebd936";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}
<div class=\"col-lg-5\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100 rounded overflow-hidden\">
                        <img class=\"position-absolute w-100 h-100\" src=\"{{ field_image_1 }}\" style=\"object-fit: cover;\">
                    </div>
                </div>", "__string_template__c24a5f2783f979f1d4ca545a57794ad58e12db988878e8c957db172159ebd936", "");
    }
}
