<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/socialmedia.html.twig */
class __TwigTemplate_3ff8abf8c2d50625b6bc46ac1d96dd896c632c3b847f133ebe36a229ef119d50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"social-pages\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute($context["page"], "url", []))) {
                // line 4
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" ";
                (($this->getAttribute($context["page"], "title", [])) ? (print (twig_escape_filter($this->env, (("title=\"" . $this->getAttribute($context["page"], "title", [])) . "\""), "html", null, true))) : (print ("")));
                echo " target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "icon", []), "html", null, true);
                echo "\"></i></a>
\t\t";
            }
            // line 6
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/socialmedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  50 => 6,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social-pages\">
\t{% for page in social_pages %}
\t\t{% if page.url|length %}
\t\t\t<a href=\"{{ page.url }}\" {{ page.title ? 'title=\"' ~ page.title ~ '\"' }} target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-{{ page.icon }}\"></i></a>
\t\t{% endif %}
\t{% endfor %}
</div>", "partials/socialmedia.html.twig", "/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/plugins/social-media-links/templates/partials/socialmedia.html.twig");
    }
}
