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

/* modules/contrib/bootstrap_styles/templates/spacing-preview.html.twig */
class __TwigTemplate_1ab843841b175ee2eb957af8c265a2b8 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_styles/plugins_groups.spacing.spacing_preview"), "html", null, true);
        yield "

<div class=\"spacing-preview\">

  <div class=\"preview-box margin-box\">
    <span class=\"title\">";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Margin"));
        yield "</span>
    <span class=\"left margin-left\">0</span>
    <span class=\"top margin-top\">0</span>
    <span class=\"right margin-right\">0</span>
    <span class=\"bottom margin-bottom\">0</span>


  <div class=\"preview-box padding-box\">
    <span class=\"title\">";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Padding"));
        yield "</span>
    <span class=\"left padding-left\">0</span>
    <span class=\"top padding-top\">0</span>
    <span class=\"right padding-right\">0</span>
    <span class=\"bottom padding-bottom\">0</span>
  </div>
  </div>

</div>

<div id=\"bs_spacing_preview_calc\"></div> 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/bootstrap_styles/templates/spacing-preview.html.twig";
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
        return array (  66 => 23,  55 => 15,  47 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/bootstrap_styles/templates/spacing-preview.html.twig", "/home/website1/public_html/web/modules/contrib/bootstrap_styles/templates/spacing-preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 10, "t" => 15];
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
