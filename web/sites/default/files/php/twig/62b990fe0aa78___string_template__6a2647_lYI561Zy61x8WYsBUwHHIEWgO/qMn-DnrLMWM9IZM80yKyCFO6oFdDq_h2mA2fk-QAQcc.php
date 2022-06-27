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

/* __string_template__6a2647e755bbe8865fe6022f32304959c9dbf9f429495e7d6231521c50ba1448 */
class __TwigTemplate_0e9e5f714ab74700328e844686174666c4cbbd3bf8ea0a05e3dac872aa66af80 extends \Twig\Template
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
        echo "<h6 class=\"text-secondary font-weight-semi-bold text-uppercase mb-3\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h6>
<h1 class=\"mb-4 section-title\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_subtitle"] ?? null)), "html", null, true);
        echo "</h1>
 <p>";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
 <div class=\"d-flex align-items-center pt-4\">
     <a href=\"\" class=\"btn btn-primary mr-5\">Learn More</a>
   <button type=\"button\" class=\"btn-play\" data-toggle=\"modal\" data-src=\"https://www.youtube.com/embed/DWRcNpR6Kdc\" data-target=\"#videoModal\">
          <span></span>
     </button>
     <h5 class=\"font-weight-normal text-white m-0 ml-4 d-none d-sm-block\">Play Video</h5>
</div>
         ";
    }

    public function getTemplateName()
    {
        return "__string_template__6a2647e755bbe8865fe6022f32304959c9dbf9f429495e7d6231521c50ba1448";
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
        return new Source("{# inline_template_start #}<h6 class=\"text-secondary font-weight-semi-bold text-uppercase mb-3\">{{ title }}</h6>
<h1 class=\"mb-4 section-title\">{{ field_subtitle }}</h1>
 <p>{{ body }}</p>
 <div class=\"d-flex align-items-center pt-4\">
     <a href=\"\" class=\"btn btn-primary mr-5\">Learn More</a>
   <button type=\"button\" class=\"btn-play\" data-toggle=\"modal\" data-src=\"https://www.youtube.com/embed/DWRcNpR6Kdc\" data-target=\"#videoModal\">
          <span></span>
     </button>
     <h5 class=\"font-weight-normal text-white m-0 ml-4 d-none d-sm-block\">Play Video</h5>
</div>
         ", "__string_template__6a2647e755bbe8865fe6022f32304959c9dbf9f429495e7d6231521c50ba1448", "");
    }
}
