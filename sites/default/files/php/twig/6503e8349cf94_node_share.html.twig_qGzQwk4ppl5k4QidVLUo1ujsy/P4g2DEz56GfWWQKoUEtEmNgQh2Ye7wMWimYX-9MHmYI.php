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

/* @zuvipro/template-parts/node_share.html.twig */
class __TwigTemplate_8744949ab33d2460fb9f05f7e917d3315e3f8da2a3fd5de20bd6c62fd740a054 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 1) == "page")) {
            // line 2
            echo "  ";
            if (($context["page_share_page"] ?? null)) {
                // line 3
                echo "    ";
                $this->loadTemplate("@zuvipro/template-parts/share-node.html.twig", "@zuvipro/template-parts/node_share.html.twig", 3)->display($context);
                // line 4
                echo "  ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "getType", [], "any", false, false, true, 5) == "article")) {
            // line 6
            echo "  ";
            if (($context["page_share_article"] ?? null)) {
                // line 7
                echo "    ";
                $this->loadTemplate("@zuvipro/template-parts/share-node.html.twig", "@zuvipro/template-parts/node_share.html.twig", 7)->display($context);
                // line 8
                echo "  ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "getType", [], "any", false, false, true, 9) == "book")) {
            // line 10
            echo "  ";
            if (($context["page_share_book"] ?? null)) {
                // line 11
                echo "    ";
                $this->loadTemplate("@zuvipro/template-parts/share-node.html.twig", "@zuvipro/template-parts/node_share.html.twig", 11)->display($context);
                // line 12
                echo "  ";
            }
        } else {
            // line 14
            echo "  ";
            if (($context["page_share_other"] ?? null)) {
                // line 15
                echo "    ";
                $this->loadTemplate("@zuvipro/template-parts/share-node.html.twig", "@zuvipro/template-parts/node_share.html.twig", 15)->display($context);
                // line 16
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/node_share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  76 => 15,  73 => 14,  69 => 12,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/node_share.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/node_share.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
