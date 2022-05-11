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

/* themes/custom/biocellcollagen/templates/layout/page--front.html.twig */
class __TwigTemplate_2d58c37b3e0d79a22d77761b46402784 extends \Twig\Template
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
        // line 45
        echo "<div class=\"container\">

  <header role=\"main-header\">

    <div class=\"header-inner\">
      <div class=\"logo\">
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"header-menu\">
        <div class=\"row\"> ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_top", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</div>
        <div class=\"row\">";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_bottom", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</div>
      </div>
    </div>
     
    
    <div class=\"row\">
      ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
    </div>
  </header>
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 66
        echo "
    <div class=\"layout-content\">

      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "

      
    </div>";
        // line 73
        echo "
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 74)) {
            // line 75
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 79
        echo "
  </main>

  ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 82)) {
            // line 83
            echo "    <footer role=\"contentinfo\">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 87
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/biocellcollagen/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 87,  108 => 84,  105 => 83,  103 => 82,  98 => 79,  92 => 76,  89 => 75,  87 => 74,  84 => 73,  78 => 69,  73 => 66,  66 => 61,  57 => 55,  53 => 54,  47 => 51,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/biocellcollagen/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\biocellcollagen\\web\\themes\\custom\\biocellcollagen\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74);
        static $filters = array("escape" => 51);
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
