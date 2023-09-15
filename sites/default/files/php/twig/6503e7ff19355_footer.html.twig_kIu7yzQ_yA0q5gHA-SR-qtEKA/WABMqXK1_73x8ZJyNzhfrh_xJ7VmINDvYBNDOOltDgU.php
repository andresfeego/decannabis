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

/* @zuvipro/template-parts/footer.html.twig */
class __TwigTemplate_bba75261f1338d9bae358c3a64e50f592d250bbe1106c11181490ff5de6172b6 extends \Twig\Template
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
        echo "<!-- Start: Footer -->
<footer class=\"footer block-section clear\">
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <section id=\"footer-top\">
      <div class=\"footer-top container clear\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 9
        echo "<!-- /footer-top -->

  ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 11))) {
            // line 12
            echo "    ";
            if (($context["footer_wave"] ?? null)) {
                // line 13
                echo "  <div class=\"footer-wave\">
<svg viewBox=\"0 0 1440 102\" fill-opacity=\"1\" xmlns=\"http://www.w3.org/2000/svg\">
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 0L60 12.1429C120 24.2857 240 48.5714 360 43.7143C480 38.8571 600 4.85714 720 9.71429C840 14.5714 960 58.2857 1080 68C1200 77.7143 1320 53.4286 1380 41.2857L1440 29.1429V102H1380C1320 102 1200 102 1080 102C960 102 840 102 720 102C600 102 480 102 360 102C240 102 120 102 60 102H0V0Z\" />
</svg>
  </div> <!-- /footer-wave -->
    ";
            }
            // line 18
            echo "<!-- /footer_wave condition -->
    <section id=\"footer-blocks\">
      <div class=\"container footer-container clear\">
        <div class=\"footer-block\">
          ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 22)) {
                // line 23
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 25
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block\">
          ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 28)) {
                // line 29
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 31
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block\">
          ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 34)) {
                // line 35
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 37
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block last-footer-block\">
          ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 40)) {
                // line 41
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 43
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 46
        echo " ";
        // line 47
        echo "
  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 48)) {
            // line 49
            echo "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container clear\">
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 54
        echo "<!-- /footer-bottom -->

 ";
        // line 56
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 57
            echo "  <section id=\"footer-bottom-last\">
    <div class=\"footer-bottom-last container clear\">
      ";
            // line 59
            if (($context["copyright_text"] ?? null)) {
                // line 60
                echo "          <div class=\"copyright\">
            ";
                // line 61
                if ((($context["copyright_text_custom"] ?? null) != "")) {
                    // line 62
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["copyright_text_custom"] ?? null), 62, $this->source), "<p>,<div>,<span>,<a>,<img>,<ol>,<ul>,<li>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<mark>,<br>,<hr>,<i>"));
                    echo "
            ";
                } else {
                    // line 64
                    echo "              &copy; ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 64, $this->source), "html", null, true);
                    echo ", All rights reserved.
            ";
                }
                // line 66
                echo "          </div>
      ";
            }
            // line 68
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 69
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 70
                $this->loadTemplate("@zuvipro/template-parts/social-icons.html.twig", "@zuvipro/template-parts/footer.html.twig", 70)->display($context);
                // line 71
                echo "        </div>
      ";
            }
            // line 73
            echo "      </div> <!--/.text_right -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 76
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 78
        if (($context["fancy_cursor"] ?? null)) {
            // line 79
            echo "<script>
window.addEventListener('resize', cursorcircle);
function cursorcircle() {
  if (window.innerWidth > 991) {
    const cursor = document.getElementById('cursor');
    document.addEventListener('mousemove', e => {
      cursor.setAttribute(\"style\", \"top: \"+(e.clientY - 20)+\"px; left: \"+(e.clientX - 20)+\"px; opacity: 1;\");
    });
    document.addEventListener( 'click', function() {
      cursor.classList.add( 'cursor-click' );
      setTimeout(() => {
        cursor.classList.remove('cursor-click');
      }, 500);
    });
  }
}
</script>
<div id=\"cursor\"></div>
";
        }
        // line 98
        if (($context["scrolltotop_on"] ?? null)) {
            // line 99
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 101
        if (($context["cookie_message"] ?? null)) {
            // line 102
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvipro/cookiealert-scripts"), "html", null, true);
            echo "
  ";
            // line 103
            $this->loadTemplate("@zuvipro/template-parts/cookie.html.twig", "@zuvipro/template-parts/footer.html.twig", 103)->display($context);
        }
        // line 105
        echo "<!-- End: Footer -->
";
        // line 106
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 107
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvipro/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 109
        if (($context["fontawesome_five"] ?? null)) {
            // line 110
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvipro/fontawesome5"), "html", null, true);
            echo "
";
        }
        // line 112
        if (($context["font_icon_material"] ?? null)) {
            // line 113
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvipro/material"), "html", null, true);
            echo "
";
        }
        // line 115
        if (($context["sticky_header_option"] ?? null)) {
            // line 116
            echo "<style>
.header-top {
  position: sticky;
}
</style>
";
        }
        // line 122
        if (($context["animated_content"] ?? null)) {
            // line 123
            echo "  ";
            $this->loadTemplate("@zuvipro/template-parts/animate.html.twig", "@zuvipro/template-parts/footer.html.twig", 123)->display($context);
            // line 124
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zuvipro/animated-content"), "html", null, true);
            echo "
";
        }
        // line 126
        echo "<style>
";
        // line 127
        if ((($context["circle_type"] ?? null) == "circle_solid")) {
            // line 128
            echo ".header-circle {
  background: var(--circle-color);
}
";
        }
        // line 132
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 132,  299 => 128,  297 => 127,  294 => 126,  288 => 124,  285 => 123,  283 => 122,  275 => 116,  273 => 115,  267 => 113,  265 => 112,  259 => 110,  257 => 109,  251 => 107,  249 => 106,  246 => 105,  243 => 103,  238 => 102,  236 => 101,  232 => 99,  230 => 98,  209 => 79,  207 => 78,  203 => 76,  197 => 73,  193 => 71,  191 => 70,  188 => 69,  185 => 68,  181 => 66,  173 => 64,  167 => 62,  165 => 61,  162 => 60,  160 => 59,  156 => 57,  154 => 56,  150 => 54,  143 => 51,  139 => 49,  137 => 48,  134 => 47,  132 => 46,  126 => 43,  120 => 41,  118 => 40,  113 => 37,  107 => 35,  105 => 34,  100 => 31,  94 => 29,  92 => 28,  87 => 25,  81 => 23,  79 => 22,  73 => 18,  65 => 13,  62 => 12,  60 => 11,  56 => 9,  49 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/footer.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 70);
        static $filters = array("escape" => 6, "raw" => 62, "striptags" => 62, "date" => 64);
        static $functions = array("attach_library" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'raw', 'striptags', 'date'],
                ['attach_library']
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
