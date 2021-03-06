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

/* __string_template__e1fd0600b57a118e96521b59a608e3e5eb40bed5bb45085ad36157a47357a41a */
class __TwigTemplate_7f4b89da76c6595d67bfbfab4492171d40ee54ce5d38e89463356ad8fe26e177 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
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
        echo "<div class=\"d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4\">
     <div class=\"icon-box bg-light text-secondary shadow mt-2 mb-4\">
            <i class=\"fa fa-2x fa-hotel\"></i>
      </div>
       <h5 class=\"font-weight-bold mb-4 px-4\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
       ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e1fd0600b57a118e96521b59a608e3e5eb40bed5bb45085ad36157a47357a41a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4\">
     <div class=\"icon-box bg-light text-secondary shadow mt-2 mb-4\">
            <i class=\"fa fa-2x fa-hotel\"></i>
      </div>
       <h5 class=\"font-weight-bold mb-4 px-4\">{{ title }}</h5>
       {{ field_image }}
</div>", "__string_template__e1fd0600b57a118e96521b59a608e3e5eb40bed5bb45085ad36157a47357a41a", "");
    }
}
