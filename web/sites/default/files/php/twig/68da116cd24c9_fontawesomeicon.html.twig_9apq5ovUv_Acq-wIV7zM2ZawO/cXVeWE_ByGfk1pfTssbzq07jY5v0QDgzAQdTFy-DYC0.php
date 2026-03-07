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

/* modules/contrib/fontawesome/templates/fontawesomeicon.html.twig */
class __TwigTemplate_1081381417fbc251b9055e7e049a65c9 extends Template
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
        // line 20
        $context["classes"] = [        // line 21
($context["iconset"] ?? null),         // line 22
($context["style"] ?? null),         // line 23
($context["name"] ?? null),         // line 24
($context["settings"] ?? null)];
        // line 27
        yield "<div class=\"fontawesome-icon\">
  <";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
        yield " data-fa-transform=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["transforms"] ?? null), "html", null, true);
        yield "\" data-fa-mask=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mask"] ?? null), "html", null, true);
        yield "\" style=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["css"] ?? null), "html", null, true);
        yield "\"></";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true);
        yield ">
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["iconset", "style", "name", "settings", "tag", "attributes", "transforms", "mask", "css"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/fontawesome/templates/fontawesomeicon.html.twig";
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
        return array (  53 => 28,  50 => 27,  48 => 24,  47 => 23,  46 => 22,  45 => 21,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/fontawesome/templates/fontawesomeicon.html.twig", "/home/website1/public_html/web/modules/contrib/fontawesome/templates/fontawesomeicon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20];
        static $filters = ["escape" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
