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

/* __string_template__f2bbb0516f8b0795c2e11f7ae298162e */
class __TwigTemplate_0691dbf1eededfd932a340834b018508 extends Template
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
        yield "<div>
  
  
  <div class=\"field field--name-field-media-image field--type-image field--label-visually_hidden\">
    <div class=\"field__label visually-hidden\"><a href=\"https://modest-turquoise-bear.168-235-125-96.cpanel.site/our-hearing-aid?tid=1\">Image</a></div>
              <div class=\"field__item\">  <a href=\"https://modest-turquoise-bear.168-235-125-96.cpanel.site/our-hearing-aid?tid=1\"><img loading=\"lazy\" src=\"/web/sites/default/files/styles/large/public/2025-09/photo-1741174844812-c59239e677be.jpeg.webp?itok=B4l2EY96\" width=\"320\" height=\"480\" alt=\"Founded in 2011, HEAREX is dedicated to delivering cutting-edge, precise hearing solutions that elevate your quality of life. Leveraging years of expertise and a highly specialized team, we are committed to guiding you towards a world of clear hearing and seamless communication.\" class=\"image-style-large\"></a>


</div>
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
        return "__string_template__f2bbb0516f8b0795c2e11f7ae298162e";
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
        return new Source("", "__string_template__f2bbb0516f8b0795c2e11f7ae298162e", "");
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
