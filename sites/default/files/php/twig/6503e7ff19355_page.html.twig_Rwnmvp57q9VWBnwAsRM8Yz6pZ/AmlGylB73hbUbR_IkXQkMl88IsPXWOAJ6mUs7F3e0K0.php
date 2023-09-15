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

/* themes/zuvipro/templates/layout/page.html.twig */
class __TwigTemplate_cbcea788dc11b5d1fe44b0ce66abc8d8b7ad758a6cd149caacee4cb02ae70241 extends \Twig\Template
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
        // line 27
        $this->loadTemplate("@zuvipro/template-parts/header.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 27)->display($context);
        // line 28
        $this->loadTemplate("@zuvipro/template-parts/header-page.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 28)->display($context);
        // line 29
        $this->loadTemplate("@zuvipro/template-parts/highlighted.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 29)->display($context);
        // line 30
        echo "<div id=\"main-wrapper\" class=\"main-wrapper clear\">
  <div class=\"container\">
  <div class=\"main-container\">  
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 35
        echo "      ";
        $this->loadTemplate("@zuvipro/template-parts/content_top.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 35)->display($context);
        // line 36
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
      ";
        // line 37
        $this->loadTemplate("@zuvipro/template-parts/content_bottom.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 37)->display($context);
        // line 38
        echo "      ";
        if (($context["page_share_all"] ?? null)) {
            // line 39
            echo "        ";
            $this->loadTemplate("@zuvipro/template-parts/node_share.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 39)->display($context);
            // line 40
            echo "      ";
        }
        // line 41
        echo "    </main>
    ";
        // line 42
        $this->loadTemplate("@zuvipro/template-parts/sidebar_left.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 42)->display($context);
        // line 43
        echo "    ";
        $this->loadTemplate("@zuvipro/template-parts/sidebar_right.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 43)->display($context);
        // line 44
        echo "  </div> ";
        // line 45
        echo "  </div> ";
        // line 46
        echo "</div>";
        // line 47
        if (($context["animated_sidebar_option"] ?? null)) {
            // line 48
            echo "  ";
            $this->loadTemplate("@zuvipro/template-parts/sidebar_sliding.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 48)->display($context);
        }
        // line 50
        $this->loadTemplate("@zuvipro/template-parts/footer.html.twig", "themes/zuvipro/templates/layout/page.html.twig", 50)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/zuvipro/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 50,  86 => 48,  84 => 47,  82 => 46,  80 => 45,  78 => 44,  75 => 43,  73 => 42,  70 => 41,  67 => 40,  64 => 39,  61 => 38,  59 => 37,  54 => 36,  51 => 35,  45 => 30,  43 => 29,  41 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zuvipro/templates/layout/page.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 27, "if" => 38);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
