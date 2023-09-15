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

/* @zuvipro/template-parts/slider.html.twig */
class __TwigTemplate_be6aef1f69bb268498bf3c7dafcb99035abba8e13a2ab3f3e673a4902e8645cd extends \Twig\Template
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
        echo "<section class=\"slider\">
  <div class=\"container\">
    <div class=\"owl-carousel home-slider\">
      ";
        // line 4
        if ((($context["slider_code"] ?? null) != "")) {
            // line 5
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 5, $this->source), "<div>,<span>,<ul>,<ol>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<mark>,<br>,<button>,<i>,<source>,<hr>"));
            echo "
      ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("@zuvipro/template-parts/slider-default.html.twig", "@zuvipro/template-parts/slider.html.twig", 7)->display($context);
            // line 8
            echo "      ";
        }
        // line 9
        echo "    </div> <!--/.home-slider -->
    ";
        // line 10
        if (($context["header_circle_slider"] ?? null)) {
            // line 11
            echo "    <div class=\"header-circle header-circle1\"></div>
    <div class=\"header-circle header-circle2\"></div>
    <div class=\"header-circle header-circle3\"></div>
    <div class=\"header-circle header-circle4\"></div>
    <div class=\"header-circle header-circle5\"></div>
    <div class=\"header-circle header-circle6\"></div>
    ";
        }
        // line 18
        echo "  </div> <!-- /.container -->
</section>
";
        // line 20
        if (($context["slider_wave"] ?? null)) {
            // line 21
            echo "<div class=\"slider-wave\">
<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 160\"><path fill-opacity=\"1\" d=\"M0,32L60,26.7C120,21,240,11,360,42.7C480,75,600,149,720,154.7C840,160,960,96,1080,74.7C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z\"></path></svg>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  76 => 20,  72 => 18,  63 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/slider.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 7);
        static $filters = array("raw" => 5, "striptags" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
