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

/* __string_template__49522e4e5b8eabe61fc51bf4b1696ec8 */
class __TwigTemplate_2e1b6d96dc867e20f8f36fbd3984b8f1 extends Template
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
  <div data-contextual-id=\"media:media=2:changed=1757594184&amp;langcode=en\" data-contextual-token=\"TbgNU8FPF-UROywgS_8BZ8j9-MIJZ2PBLoifUWPpnG0\" data-drupal-ajax-container=\"\"></div>
  
  <div class=\"field field--name-field-media-image field--type-image field--label-visually_hidden\">
    <div class=\"field__label visually-hidden\"><a href=\"https://organized-silver-porcupine.185-34-216-199.cpanel.site/web/our-hearing-aid?tid=1\">Image</a></div>
              <div class=\"field__item\">  <a href=\"https://organized-silver-porcupine.185-34-216-199.cpanel.site/web/our-hearing-aid?tid=1\"><img loading=\"lazy\" src=\"/web/sites/default/files/styles/large/public/2025-09/photo-1741174844812-c59239e677be.jpeg.webp?itok=B4l2EY96\" width=\"320\" height=\"480\" alt=\"Founded in 2011, HEAREX is dedicated to delivering cutting-edge, precise hearing solutions that elevate your quality of life. Leveraging years of expertise and a highly specialized team, we are committed to guiding you towards a world of clear hearing and seamless communication.\" class=\"image-style-large\"></a>


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
        return "__string_template__49522e4e5b8eabe61fc51bf4b1696ec8";
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
        return new Source("", "__string_template__49522e4e5b8eabe61fc51bf4b1696ec8", "");
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
