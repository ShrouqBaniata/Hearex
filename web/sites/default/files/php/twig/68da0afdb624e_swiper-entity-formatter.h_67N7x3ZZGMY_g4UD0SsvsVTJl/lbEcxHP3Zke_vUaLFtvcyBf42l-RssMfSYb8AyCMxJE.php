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

/* modules/contrib/slider_collection/modules/sc_swiper/templates/swiper-entity-formatter.html.twig */
class __TwigTemplate_08da255d437ad510aac925a63c29976f extends Template
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
        if (($context["attributes"] ?? null)) {
            // line 2
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield ">
  ";
        }
        // line 4
        yield "  ";
        if (($context["title"] ?? null)) {
            // line 5
            yield "    <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
  ";
        }
        // line 7
        yield "
  <div class=\"swiper-wrapper\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "      <div class=\"swiper-slide\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["item"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "  </div>
  ";
        // line 13
        if (($context["pagination"] ?? null)) {
            // line 14
            yield "    <div class=\"swiper-pagination\"></div>
  ";
        }
        // line 16
        yield "
  ";
        // line 17
        if (($context["navigation"] ?? null)) {
            // line 18
            yield "    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
  ";
        }
        // line 21
        yield "
  ";
        // line 22
        if (($context["scrollbar"] ?? null)) {
            // line 23
            yield "    <div class=\"swiper-scrollbar\"></div>
  ";
        }
        // line 25
        yield "
  ";
        // line 26
        if (($context["attributes"] ?? null)) {
            // line 27
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "content", "pagination", "navigation", "scrollbar"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/slider_collection/modules/sc_swiper/templates/swiper-entity-formatter.html.twig";
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
        return array (  111 => 27,  109 => 26,  106 => 25,  102 => 23,  100 => 22,  97 => 21,  92 => 18,  90 => 17,  87 => 16,  83 => 14,  81 => 13,  78 => 12,  69 => 10,  65 => 9,  61 => 7,  55 => 5,  52 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/slider_collection/modules/sc_swiper/templates/swiper-entity-formatter.html.twig", "/home/website1/public_html/web/modules/contrib/slider_collection/modules/sc_swiper/templates/swiper-entity-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "for" => 9];
        static $filters = ["escape" => 2];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
