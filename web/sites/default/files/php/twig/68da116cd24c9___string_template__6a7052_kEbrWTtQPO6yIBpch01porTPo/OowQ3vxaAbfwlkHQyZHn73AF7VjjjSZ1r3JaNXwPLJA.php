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

/* __string_template__6a7052624f103001b7ca6dadc8e3b22c */
class __TwigTemplate_758d7bcaa607b80fbb037c863cb810a8 extends Template
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
        yield "<div class=\"contextual-region\">
  <div data-contextual-id=\"media:media=3:changed=1757781903&amp;langcode=en\" data-contextual-token=\"tch6WJ6I1gtcJPwiadHx8tQzmqjcP3OPYAWcZZv2Y34\" data-drupal-ajax-container=\"\"></div>
  
  <div class=\"field field--name-field-media-image field--type-image field--label-visually_hidden\">
    <div class=\"field__label visually-hidden\"><a href=\"https://modest-turquoise-bear.168-235-125-96.cpanel.site/our-hearing-aid?tid=2\">Image</a></div>
              <div class=\"field__item\">  <a href=\"https://modest-turquoise-bear.168-235-125-96.cpanel.site/our-hearing-aid?tid=2\"><img loading=\"lazy\" src=\"/sites/default/files/styles/large/public/2025-09/photo-1596088869451-491e167efabb.jpg.webp?itok=qfBi4VIU\" width=\"480\" height=\"291\" alt=\"hearex\" class=\"image-style-large\"></a>


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
        return "__string_template__6a7052624f103001b7ca6dadc8e3b22c";
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
        return new Source("", "__string_template__6a7052624f103001b7ca6dadc8e3b22c", "");
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
