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

/* themes/custom/sweetscented/templates/node--blog--full.html.twig */
class __TwigTemplate_886e251b5a4973a096eef27198d06bfa49c05d652d1e2e6dd5456535ca8f49a4 extends \Twig\Template
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
        // line 69
        echo "
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 78)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 79)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 80)) ? ("node--unpublished") : ("")), 7 => ((        // line 81
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 81, $this->source)))) : (""))];
        // line 84
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">
  <header class=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 85, $this->source), "html", null, true);
        echo "\">
    ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 86, $this->source), "html", null, true);
        echo "
    ";
        // line 87
        if (($context["label"] ?? null)) {
            // line 88
            echo "    <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 89, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            echo "</a>
      </h1>
      ";
        }
        // line 92
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 92, $this->source), "html", null, true);
        echo "
      ";
        // line 93
        if (($context["display_submitted"] ?? null)) {
            // line 94
            echo "      <div class=\"node__meta\">
        <span";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 95, $this->source), "html", null, true);
            echo ">
          ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 96, $this->source), "html", null, true);
            echo "
          </span>
      </div>
      ";
        }
        // line 100
        echo "
      ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 101)) {
            // line 102
            echo "      <div class=\"blog-category\">
        Chủ đề -";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_category", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 106
        echo "  </header>

  <div";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => ($context["layout"] ?? null)], "method", false, false, true, 108), 108, $this->source), "html", null, true);
        echo ">
    ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 109)) {
            // line 110
            echo "    <div class=\"blog-body\">
      ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 116)) {
            // line 117
            echo "    <div class=\"blog-tags\">
      Tags - ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_related_blogs", [], "any", false, false, true, 122)) {
            // line 123
            echo "    <div class=\"blog-related_blogs\">
      <h3>Related blogs</h3>
      ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_related_blogs", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 128
        echo "
    </article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sweetscented/templates/node--blog--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 128,  162 => 125,  158 => 123,  156 => 122,  153 => 121,  147 => 118,  144 => 117,  142 => 116,  138 => 114,  132 => 111,  129 => 110,  127 => 109,  123 => 108,  119 => 106,  113 => 103,  110 => 102,  108 => 101,  105 => 100,  98 => 96,  94 => 95,  91 => 94,  89 => 93,  84 => 92,  76 => 89,  71 => 88,  69 => 87,  65 => 86,  61 => 85,  56 => 84,  54 => 81,  53 => 80,  52 => 79,  51 => 78,  50 => 77,  49 => 76,  48 => 75,  47 => 73,  44 => 71,  42 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Olivero's theme implementation to display a node.
*
* Available variables:
* - node: The node entity with limited access to object properties and methods.
* Only method names starting with \"get\", \"has\", or \"is\" and a few common
* methods such as \"id\", \"label\", and \"bundle\" are available. For example:
* - node.getCreatedTime() will return the node creation timestamp.
* - node.hasField('field_example') returns TRUE if the node bundle includes
* field_example. (This does not indicate the presence of a value in this
* field.)
* - node.isPublished() will return whether the node is published or not.
* Calling other methods, such as node.delete(), will result in an exception.
* See \\Drupal\\node\\Entity\\Node for a full list of public properties and
* methods for the node object.
* - label: (optional) The title of the node.
* - content: All node items. Use {{ content }} to print them all,
* or print a subset such as {{ content.field_example }}. Use
* {{ content|without('field_example') }} to temporarily suppress the printing
* of a given child element.
* - author_picture: The node author user entity, rendered using the \"compact\"
* view mode.
* - metadata: Metadata for this node.
* - date: (optional) Themed creation date field.
* - author_name: (optional) Themed author name field.
* - url: Direct URL of the current node.
* - display_submitted: Whether submission information should be displayed.
* - attributes: HTML attributes for the containing element.
* The attributes.class element may contain one or more of the following
* classes:
* - node: The current template type (also known as a \"theming hook\").
* - node--type-[type]: The current node type. For example, if the node is an
* \"Article\" it would result in \"node--type-article\". Note that the machine
* name will often be in a short form of the human readable label.
* - node--view-mode-[view_mode]: The View Mode of the node; for example, a
* teaser would result in: \"node--view-mode-teaser\", and
* full: \"node--view-mode-full\".
* The following are controlled through the node publishing options.
* - node--promoted: Appears on nodes promoted to the front page.
* - node--sticky: Appears on nodes ordered above other non-sticky nodes in
* teaser listings.
* - node--unpublished: Appears on unpublished nodes visible only to site
* admins.
* - title_attributes: Same as attributes, except applied to the main title
* tag that appears in the template.
* - content_attributes: Same as attributes, except applied to the main
* content tag that appears in the template.
* - author_attributes: Same as attributes, except applied to the author of
* the node tag that appears in the template.
* - title_prefix: Additional output populated by modules, intended to be
* displayed in front of the main title tag that appears in the template.
* - title_suffix: Additional output populated by modules, intended to be
* displayed after the main title tag that appears in the template.
* - view_mode: View mode; for example, \"teaser\" or \"full\".
* - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
* - page: Flag for the full page state. Will be true if view_mode is 'full'.
* - readmore: Flag for more state. Will be true if the teaser content of the
* node cannot hold the main body content.
* - logged_in: Flag for authenticated user status. Will be true when the
* current user is a logged-in member.
* - is_admin: Flag for admin user status. Will be true when the current user
* is an administrator.
*
* @see template_preprocess_node()
*/
#}

{% set layout = layout ? 'layout--' ~ layout|clean_class %}

{%
set classes = [
'node',
'node--type-' ~ node.bundle|clean_class,
layout ? 'grid-full',
layout ? 'ie11-autorow',
node.isPromoted() ? 'node--promoted',
node.isSticky() ? 'node--sticky',
not node.isPublished() ? 'node--unpublished',
view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
]
%}
<article{{ attributes.addClass(classes) }}>
  <header class=\"{{ layout }}\">
    {{ title_prefix }}
    {% if label %}
    <h1{{ title_attributes.addClass('node__title') }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h1>
      {% endif %}
      {{ title_suffix }}
      {% if display_submitted %}
      <div class=\"node__meta\">
        <span{{ author_attributes }}>
          {{ date }}
          </span>
      </div>
      {% endif %}

      {% if content.field_blog_category %}
      <div class=\"blog-category\">
        Chủ đề -{{ content.field_blog_category }}
      </div>
      {% endif %}
  </header>

  <div{{ content_attributes.addClass('node__content', layout) }}>
    {% if content.body %}
    <div class=\"blog-body\">
      {{ content.body }}
    </div>
    {% endif %}
    </div>

    {% if content.field_tags %}
    <div class=\"blog-tags\">
      Tags - {{ content.field_tags }}
    </div>
    {% endif %}

    {% if content.field_related_blogs %}
    <div class=\"blog-related_blogs\">
      <h3>Related blogs</h3>
      {{ content.field_related_blogs }}
    </div>
    {% endif %}

    </article>", "themes/custom/sweetscented/templates/node--blog--full.html.twig", "/app/themes/custom/sweetscented/templates/node--blog--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 87);
        static $filters = array("clean_class" => 70, "escape" => 84);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
