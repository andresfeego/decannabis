<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @zuvipro/template-parts/cookie.html.twig */
class __TwigTemplate_59afc8142e49790da753148f73d50495fa8836a0fe0af0ecba85ba42c52f1d94 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Start Cookie Alert -->
<div class=\"cookiealert\" role=\"alert\">
  <div class=\"container\">
    <p>
      ";
        // line 5
        if ((($context["cookie_message_custom"] ?? null) != "")) {
            // line 6
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["cookie_message_custom"] ?? null), 6, $this->source), "<p>,<div>,<span>,<a>,<img>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<hr>,<i>"));
            echo "
      ";
        } else {
            // line 8
            echo "        This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies.
      ";
        }
        // line 10
        echo "      <button type=\"button\" class=\"acceptcookies\" aria-label=\"Close\">I agree</button>
    </p>
  </div>
</div>
<!-- End Cookie Alert -->
";
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/cookie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 8,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/cookie.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/cookie.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("raw" => 6, "striptags" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags'],
                []
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
