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

/* @zuvipro/template-parts/header.html.twig */
class __TwigTemplate_03ab71b13ca615d9dadb42af02e68551a6be5f2102ed84809fae99655112f2c8 extends \Twig\Template
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
        echo "<!-- Start: Header -->
";
        // line 2
        if (($context["preloader_option"] ?? null)) {
            // line 3
            echo "  <div class=\"loader\">
    <div class=\"loader-inner\">
      <div class=\"loader-icon\">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
";
        }
        // line 12
        echo "<header class=\"header-top\">
  <div class=\"container header-main\">
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 14)) {
            // line 15
            echo "      <div class=\"site-brand\">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 19
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 19) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 19))) {
            // line 20
            echo "      <div class=\"header-main-right\">
        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 21)) {
                // line 22
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 23
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 30
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 30)) {
                // line 31
                echo "          ";
                $this->loadTemplate("@zuvipro/template-parts/search.html.twig", "@zuvipro/template-parts/header.html.twig", 31)->display($context);
                // line 32
                echo "        ";
            }
            // line 33
            echo "        ";
            if (($context["animated_sidebar_option"] ?? null)) {
                // line 34
                echo "        <div class=\"sliding-panel-icon\">
          <i class=\"icon-align-left\"></i>
        </div>
      ";
            }
            // line 38
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 40
        echo "  </div> <!-- /.container -->
</header>
";
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  110 => 38,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  85 => 26,  80 => 23,  78 => 22,  76 => 21,  73 => 20,  70 => 19,  64 => 16,  61 => 15,  59 => 14,  55 => 12,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/header.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 31);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
