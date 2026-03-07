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

/* modules/contrib/bootstrap_styles/templates/shadow-preview.html.twig */
class __TwigTemplate_fe765341e012a7c48791b43372526969 extends Template
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
        // line 9
        yield "
";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_styles/plugins_groups.shadow.shadow_preview"), "html", null, true);
        yield "

<div data-bs-element=\"bs_preview-box\" data-bs-mode=\"light\" class=\"bs-shadow-preview\">
  <label class=\"bs-toggle-switch\">
    <input class=\"bs-toggle-switch--input\" type=\"checkbox\" data-theme-toggle>
    <span class=\"bs-toggle-switch--slider\"></span>
  </label>

  <div data-bs-element=\"bs_preview-element\">
    ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Preview"));
        yield "
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/bootstrap_styles/templates/shadow-preview.html.twig";
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
        return array (  59 => 19,  47 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/bootstrap_styles/templates/shadow-preview.html.twig", "/home/website1/public_html/web/modules/contrib/bootstrap_styles/templates/shadow-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 10, "t" => 19];
        static $functions = ["attach_library" => 10];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['attach_library'],
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
