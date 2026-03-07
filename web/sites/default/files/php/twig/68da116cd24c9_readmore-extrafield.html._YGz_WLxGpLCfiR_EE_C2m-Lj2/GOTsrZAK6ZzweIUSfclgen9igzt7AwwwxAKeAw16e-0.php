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

/* modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig */
class __TwigTemplate_7bef5c2fdd5f2465f0e15d9246156b70 extends Template
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
        $context["classes"] = ["field-wrapper", "field field--name-extra-field-readmore-extrafield", "field--type-extra-field"];
        // line 25
        yield "<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
        yield ">
  <div ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "addClass", ["field__item"], "method", false, false, true, 26), "html", null, true);
        yield ">
    ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "title", [], "any", false, false, true, 27), CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", false, false, true, 27), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "attributes", [], "any", false, false, true, 27), "addClass", ["button"], "method", false, false, true, 27)), "html", null, true);
        yield "
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["wrapper_attributes", "item_attributes", "link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig";
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
        return array (  55 => 27,  51 => 26,  46 => 25,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig", "C:\\xampp\\htdocs\\HearexGit\\web\\modules\\contrib\\readmore_extrafield\\templates\\readmore-extrafield.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20];
        static $filters = ["escape" => 25];
        static $functions = ["link" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['link'],
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
