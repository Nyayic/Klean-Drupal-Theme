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

/* __string_template__f09d42f9f6f0985d905ca8e52ee6cc654815c13dc75a6551dcc2a749744bdf7f */
class __TwigTemplate_ca6031c9b2bdc806e4fef5e252e5f6f4a76f28e3e2d52f94aa6768eebc0b1311 extends \Twig\Template
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
        echo "<div class=\"position-relative\">
                                <div class=\"team-img\">
                                    <img class=\"img-fluid w-100\" src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"team-social d-flex flex-column align-items-center justify-content-center bg-primary\">
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-secondary btn-social mb-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-secondary btn-social\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                                </div>
                            </div>
                            <div class=\"d-flex flex-column bg-primary text-center py-4\">
                                <h5 class=\"font-weight-bold\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
                                <p class=\"text-white m-0\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
                            </div>
                        </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f09d42f9f6f0985d905ca8e52ee6cc654815c13dc75a6551dcc2a749744bdf7f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  71 => 12,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"position-relative\">
                                <div class=\"team-img\">
                                    <img class=\"img-fluid w-100\" src=\"{{ field_image_1 }}\" alt=\"\">
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
                        </div>", "__string_template__f09d42f9f6f0985d905ca8e52ee6cc654815c13dc75a6551dcc2a749744bdf7f", "");
    }
}
