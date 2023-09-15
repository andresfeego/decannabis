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

/* @zuvipro/template-parts/header-page.html.twig */
class __TwigTemplate_bf673dce9356f3da27905b9b82448aded8edda9c7b99b25231dc5834d8f7f38f extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 1)) {
            // line 2
            echo "<header class=\"header clear\">
";
            // line 3
            if (($context["header_circle_header"] ?? null)) {
                // line 4
                echo "  <div class=\"header-circle header-circle1\"></div>
  <div class=\"header-circle header-circle2\"></div>
  <div class=\"header-circle header-circle3\"></div>
  <div class=\"header-circle header-circle4\"></div>
  <div class=\"header-circle header-circle5\"></div>
  <div class=\"header-circle header-circle6\"></div>
";
            }
            // line 11
            echo "<section id=\"page-header\" class=\"clear\">
  <div class=\"container\">
    <div class=\"page-header\">
      ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
    </div>
  </div><!-- /.container -->
</section>
</header>
";
        }
        // line 20
        echo "<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/header-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  60 => 14,  55 => 11,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/header-page.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/header-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
