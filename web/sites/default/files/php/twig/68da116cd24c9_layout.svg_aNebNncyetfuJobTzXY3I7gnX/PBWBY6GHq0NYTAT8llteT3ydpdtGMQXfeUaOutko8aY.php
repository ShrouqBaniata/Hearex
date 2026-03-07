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

/* modules/contrib/bootstrap_styles/images/ui/layout.svg */
class __TwigTemplate_96e7b0fa0b32f9ff592694e1e7cbf932 extends Template
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
        // line 1
        yield "<svg width=\"25\" height=\"25\" xmlns=\"http://www.w3.org/2000/svg\">
    <g fill=\"currentColor\" fill-rule=\"nonzero\" stroke=\"currentColor\" stroke-width=\".2\" opacity=\"1\">
        <path d=\"M11.7767742 1H1v22.6683871h10.7767742V1zm-1.11483872 1.11483871V22.5535484H2.11483871V2.11483871h8.54709677zM24.4116129 1H13.6348387v13.0064516h10.7767742V1zm-1.1148387 1.11483871V12.8916129h-8.5470968V2.11483871h8.5470968zM24.4116129 15.8645161H13.6348387v7.803871h10.7767742v-7.803871zm-1.1148387 1.1148387v5.5741936h-8.5470968v-5.5741936h8.5470968z\"/>
    </g>
</svg>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/bootstrap_styles/images/ui/layout.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/bootstrap_styles/images/ui/layout.svg", "/home/website1/public_html/web/modules/contrib/bootstrap_styles/images/ui/layout.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
