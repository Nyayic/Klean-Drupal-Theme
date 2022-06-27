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

/* __string_template__9981cf291f7ca5a6efa7f351284515ca64ac3faa342df235bcc7d7fa995b16e8 */
class __TwigTemplate_e55699bb8533c067b915b8ffead8521272ffa86dba519683fed81a56f445cf02 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo "<div style=\"min-height: 400px;\">
 <div class=\"position-relative h-100 rounded overflow-hidden\">
        <img class=\"position-absolute w-100 h-100\" src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_side_image_1"] ?? null)), "html", null, true);
        echo "\" style=\"object-fit: cover;\">
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__9981cf291f7ca5a6efa7f351284515ca64ac3faa342df235bcc7d7fa995b16e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div style=\"min-height: 400px;\">
 <div class=\"position-relative h-100 rounded overflow-hidden\">
        <img class=\"position-absolute w-100 h-100\" src=\"{{ field_side_image_1 }}\" style=\"object-fit: cover;\">
 </div>
</div>", "__string_template__9981cf291f7ca5a6efa7f351284515ca64ac3faa342df235bcc7d7fa995b16e8", "");
    }
}
