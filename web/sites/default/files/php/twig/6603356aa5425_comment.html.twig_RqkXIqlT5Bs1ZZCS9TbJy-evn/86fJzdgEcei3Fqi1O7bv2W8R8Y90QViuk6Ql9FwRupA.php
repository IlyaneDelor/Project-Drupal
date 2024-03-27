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

/* themes/zuvi/templates/content/comment.html.twig */
class __TwigTemplate_80c0940fb3bb45729ec90c30691a2018 extends Template
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
        // line 68
        $context["classes"] = [(((        // line 69
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["comment"] ?? null), "owner", [], "any", false, false, true, 70), "anonymous", [], "any", false, false, true, 70)) ? ("comment-by-anonymous") : ("")), (((        // line 71
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 71)))) ? ("comment-by-author") : (""))];
        // line 74
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["js-comment single-comment", ($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ">
  ";
        // line 80
        echo "  ";
        if (($context["comment_user_pic"] ?? null)) {
            // line 81
            echo "    <header class=\"comment-user-picture\">
      ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 82, $this->source), "html", null, true);
            echo "
      <mark class=\"hidden\" data-comment-timestamp=\"";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 83, $this->source), "html", null, true);
            echo "\"></mark>
    </header>
  ";
        }
        // line 86
        echo "
  <div class=\"single-comment-content-body\">
    ";
        // line 88
        if (($context["title"] ?? null)) {
            // line 89
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 89, $this->source), "html", null, true);
            echo "
      <h3";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["single-comment-title"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 90, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 93
        echo "
    <div class=\"single-comment-meta\">
      <span>";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 95, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 95, $this->source), "html", null, true);
        echo "</span>
      ";
        // line 96
        if (($context["parent"] ?? null)) {
            // line 97
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 97, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 99
        echo "    </div> <!-- /.single-comment-meta -->

    <div";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["single-comment-content"], "method", false, false, true, 101), 101, $this->source), "html", null, true);
        echo ">
      ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 102, $this->source), "html", null, true);
        echo "
    </div>
  </div> <!-- /.single-comment-content -->
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["status", "comment", "author_id", "commented_entity", "attributes", "comment_user_pic", "user_picture", "new_indicator_timestamp", "title", "title_prefix", "title_attributes", "title_suffix", "author", "created", "parent", "content_attributes", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/zuvi/templates/content/comment.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 102,  109 => 101,  105 => 99,  99 => 97,  97 => 96,  91 => 95,  87 => 93,  82 => 91,  76 => 90,  71 => 89,  69 => 88,  65 => 86,  59 => 83,  55 => 82,  52 => 81,  49 => 80,  44 => 74,  42 => 71,  41 => 70,  40 => 69,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zuvi/templates/content/comment.html.twig", "C:\\wamp64\\www\\drupal-project\\web\\themes\\zuvi\\templates\\content\\comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 80);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
