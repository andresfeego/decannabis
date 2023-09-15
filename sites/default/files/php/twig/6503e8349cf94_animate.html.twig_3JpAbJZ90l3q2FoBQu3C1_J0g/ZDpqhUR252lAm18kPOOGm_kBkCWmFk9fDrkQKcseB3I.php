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

/* @zuvipro/template-parts/animate.html.twig */
class __TwigTemplate_6b049e491c8b367208bed1e2aff0c85f8f7284c6e2ee96521c422841c2608c2c extends \Twig\Template
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
        echo "<script>
var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
if (viewportWidth > 991) {
const animateElements = document.querySelectorAll('.animate-fadeIn');
const animateElements2 = document.querySelectorAll('.animate-fadeInUp');
const animateElements3 = document.querySelectorAll('.animate-fadeInLeft');
const animateElements4 = document.querySelectorAll('.animate-fadeInRight');
const animateElements5 = document.querySelectorAll('.animate-fadeInDown');
const animateElements6 = document.querySelectorAll('.animate-zoom');
const animateElements7 = document.querySelectorAll('.animate-bounce');
const animateElements8 = document.querySelectorAll('.animate-bounceUp');
const animateElements9 = document.querySelectorAll('.animate-flip');
animateObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('fancy','animated');
      animateObserver.unobserve(entry.target);
    } else {
      entry.target.classList.remove('fancy','animated');
    }
  });
},{threshold: 0.1});
animateElements.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements2.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements3.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements4.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements5.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements6.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements7.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements8.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
animateElements9.forEach(animateElement => {
  animateObserver.observe(animateElement);
});
} // End if condition for viewportWidth
</script>";
    }

    public function getTemplateName()
    {
        return "@zuvipro/template-parts/animate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zuvipro/template-parts/animate.html.twig", "/home/feegosys/decannabis.shop/themes/zuvipro/templates/template-parts/animate.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
