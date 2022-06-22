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

/* __string_template__155ee7f9fd8b9ae981932d357f45a787996419782f2deb5b7b02e1c33d84a88a */
class __TwigTemplate_630730c4f0b333c1399e08c4d05fa69a812037c656e8a68a36956cabafc5cccb extends \Twig\Template
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
        echo "                            <div class=\"position-relative\">
                                <div class=\"team-img\">
                                    ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo " 
                                </div>
                                <div class=\"team-social d-flex flex-column align-items-center justify-content-center bg-primary\">
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-secondary btn-social\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"d-flex flex-column bg-primary text-center py-4\">
                                <h5 class=\"font-weight-bold\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
                                <p class=\"text-white m-0\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
                            </div>
                 ";
    }

    public function getTemplateName()
    {
        return "__string_template__155ee7f9fd8b9ae981932d357f45a787996419782f2deb5b7b02e1c33d84a88a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  71 => 13,  59 => 4,  55 => 2,);
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
                            <div class=\"position-relative\">
                                <div class=\"team-img\">
                                    {{ field_image }} 
                                </div>
                                <div class=\"team-social d-flex flex-column align-items-center justify-content-center bg-primary\">
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-secondary btn-social\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"d-flex flex-column bg-primary text-center py-4\">
                                <h5 class=\"font-weight-bold\">{{ title }}</h5>
                                <p class=\"text-white m-0\">{{ body }}</p>
                            </div>
                 ", "__string_template__155ee7f9fd8b9ae981932d357f45a787996419782f2deb5b7b02e1c33d84a88a", "");
    }
}
