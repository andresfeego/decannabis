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

/* themes/zuvipro/templates/layout/page--front.html.twig */
class __TwigTemplate_6a641983c16a0b0228a00a06cd15895284e9142d6cdada7af66eda9996578b17 extends \Twig\Template
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
        // line 11
        $this->loadTemplate("@zuvipro/template-parts/header.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        if (($context["slider_show"] ?? null)) {
            // line 13
            echo "  ";
            $this->loadTemplate("@zuvipro/template-parts/slider.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 13)->display($context);
        }
        // line 15
        $this->loadTemplate("@zuvipro/template-parts/highlighted.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 15)->display($context);
        // line 16
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container clear\">
    ";
        // line 18
        $this->loadTemplate("@zuvipro/template-parts/content_home.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 18)->display($context);
        // line 19
        echo "  </div><!--/container-->
  <div class=\"container\">
    ";
        // line 21
        if (($context["front_sidebar"] ?? null)) {
            // line 22
            echo "      <div class=\"main-container\">
    ";
        }
        // line 24
        echo "    <main id=\"main\" class=\"page-content home-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 26
        echo "      ";
        $this->loadTemplate("@zuvipro/template-parts/content_top.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 26)->display($context);
        // line 27
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
      
      ";
        // line 29
        $this->loadTemplate("@zuvipro/template-parts/content_bottom.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 29)->display($context);
        // line 30
        echo "      ";
        if (($context["page_share_all"] ?? null)) {
            // line 31
            echo "        ";
            if (($context["page_share_front"] ?? null)) {
                // line 32
                echo "          ";
                $this->loadTemplate("@zuvipro/template-parts/share-node.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 32)->display($context);
                // line 33
                echo "        ";
            }
            // line 34
            echo "      ";
        }
        // line 35
        echo "    </main>
    ";
        // line 36
        if (($context["front_sidebar"] ?? null)) {
            // line 37
            echo "      ";
            $this->loadTemplate("@zuvipro/template-parts/sidebar_left.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 37)->display($context);
            // line 38
            echo "      ";
            $this->loadTemplate("@zuvipro/template-parts/sidebar_right.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 38)->display($context);
            // line 39
            echo "      </div> ";
            // line 40
            echo "    ";
        }
        // line 41
        echo "  </div> ";
        // line 42
        echo "</div>";
        // line 43
        if (($context["animated_sidebar_option"] ?? null)) {
            // line 44
            echo "  ";
            $this->loadTemplate("@zuvipro/template-parts/sidebar_sliding.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 44)->display($context);
        }
        // line 46
        $this->loadTemplate("@zuvipro/template-parts/footer.html.twig", "themes/zuvipro/templates/layout/page--front.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/zuvipro/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  116 => 44,  114 => 43,  112 => 42,  110 => 41,  107 => 40,  105 => 39,  102 => 38,  99 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  79 => 30,  77 => 29,  71 => 27,  68 => 26,  65 => 24,  61 => 22,  59 => 21,  55 => 19,  53 => 18,  49 => 16,  47 => 15,  43 => 13,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zuvipro/templates/layout/page--front.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 12);
        static $filters = array("escape" => 27);
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
