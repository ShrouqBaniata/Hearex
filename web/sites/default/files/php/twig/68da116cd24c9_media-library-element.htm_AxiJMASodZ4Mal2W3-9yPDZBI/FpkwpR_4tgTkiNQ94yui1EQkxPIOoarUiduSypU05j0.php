<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/media_library_form_element/templates/media-library-element.html.twig */
class __TwigTemplate_98babe96d42e5c18c86c501b435f005a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 34
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 34), "html", null, true);
        yield ">
  ";
        // line 36
        $context["legend_span_classes"] = ["fieldset-legend", "fieldset__label", ((        // line 39
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 40
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 43
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 43), "html", null, true);
        yield ">
    <span";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 44), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 44), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 44), "html", null, true);
        yield "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 47
        if (($context["errors"] ?? null)) {
            // line 48
            yield "      <div>
        ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 52
        yield "    ";
        if (($context["prefix"] ?? null)) {
            // line 53
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 55
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
    ";
        // line 56
        if (($context["suffix"] ?? null)) {
            // line 57
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 59
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59)) {
            // line 60
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 60), "addClass", ["description"], "method", false, false, true, 60), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 60), "html", null, true);
            yield "</div>
    ";
        }
        // line 62
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend", "legend_span", "errors", "prefix", "content", "suffix", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/media_library_form_element/templates/media-library-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  112 => 62,  104 => 60,  101 => 59,  95 => 57,  93 => 56,  88 => 55,  82 => 53,  79 => 52,  73 => 49,  70 => 48,  68 => 47,  60 => 44,  55 => 43,  53 => 40,  52 => 39,  51 => 36,  46 => 34,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/media_library_form_element/templates/media-library-element.html.twig", "/home/website1/public_html/web/modules/contrib/media_library_form_element/templates/media-library-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "if" => 47];
        static $filters = ["escape" => 34];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
