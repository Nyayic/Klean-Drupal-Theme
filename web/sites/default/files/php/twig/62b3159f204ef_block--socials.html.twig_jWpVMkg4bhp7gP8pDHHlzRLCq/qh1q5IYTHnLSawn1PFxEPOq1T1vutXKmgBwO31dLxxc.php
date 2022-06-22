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

/* themes/contrib/klean02/templates/block--socials.html.twig */
class __TwigTemplate_d6e944d454a8335e15e1e1d172b86b4fb61d9f0c86ed60aa7e96ee98d882718f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 33, "block" => 39];
        $filters = ["clean_class" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class'],
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
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null))))];
        // line 39
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 40
        echo "  <div class=\"col-lg-5 text-right\">
    <div class=\"d-inline-flex align-items-center pr-2\">
      <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-facebook-f\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-twitter\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-linkedin-in\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-instagram\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-youtube\"></i>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/klean02/templates/block--socials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 40,  60 => 39,  58 => 36,  57 => 35,  56 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
{% block content %}
  <div class=\"col-lg-5 text-right\">
    <div class=\"d-inline-flex align-items-center pr-2\">
      <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-facebook-f\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-twitter\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-linkedin-in\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-instagram\"></i>
        </a>
        <a class=\"text-primary p-2\" href=\"\">
            <i class=\"fab fa-youtube\"></i>
        </a>
    </div>
</div>
{% endblock %}", "themes/contrib/klean02/templates/block--socials.html.twig", "C:\\xampp\\htdocs\\klean02\\web\\themes\\contrib\\klean02\\templates\\block--socials.html.twig");
    }
}
