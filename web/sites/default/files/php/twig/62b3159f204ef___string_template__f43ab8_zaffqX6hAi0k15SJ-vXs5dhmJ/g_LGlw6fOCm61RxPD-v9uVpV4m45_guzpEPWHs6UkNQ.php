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

/* __string_template__f43ab8eca82ce8694dfd8e27460a45d69d52d5e4d7ee2d223317f6b87c8de693 */
class __TwigTemplate_ad7522ae59937dbfe9d716c3ffefcc6f5ac08700d19ca0e67e3c2a97bbbe6b9d extends \Twig\Template
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
        echo "<div class=\"position-relative overflow-hidden\">
                        <div class=\"portfolio-img\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"portfolio-text bg-primary\">
                            <h4 class=\"font-weight-bold mb-4\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h4>
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <a class=\"btn btn-sm btn-secondary m-1\" href=\"\">
                                    <i class=\"fa fa-link\"></i>
                                </a>
                                <a class=\"btn btn-sm btn-secondary m-1\" href=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo " \" data-lightbox=\"portfolio\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                            </div>
                        </div>
                    </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f43ab8eca82ce8694dfd8e27460a45d69d52d5e4d7ee2d223317f6b87c8de693";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"position-relative overflow-hidden\">
                        <div class=\"portfolio-img\">
                            <img class=\"img-fluid w-100\" src=\"{{ field_image_1 }}\" alt=\"\">
                        </div>
                        <div class=\"portfolio-text bg-primary\">
                            <h4 class=\"font-weight-bold mb-4\">{{ title }}</h4>
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <a class=\"btn btn-sm btn-secondary m-1\" href=\"\">
                                    <i class=\"fa fa-link\"></i>
                                </a>
                                <a class=\"btn btn-sm btn-secondary m-1\" href=\"{{ field_image_1 }} \" data-lightbox=\"portfolio\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                            </div>
                        </div>
                    </div>", "__string_template__f43ab8eca82ce8694dfd8e27460a45d69d52d5e4d7ee2d223317f6b87c8de693", "");
    }
}
