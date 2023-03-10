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

/* produits.html.twig */
class __TwigTemplate_ff109dc13aea70fe0644b7b19de11d22 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits.html.twig"));

        // line 1
        echo "<section>
  <div>    
    <ul class=\"categorie\">
      <li class=\"categorie_item_t\">
        <a class=\"categorie_font\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("click&collect");
        echo "\">All</a>|
      </li>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categor"]) || array_key_exists("categor", $context) ? $context["categor"] : (function () { throw new RuntimeError('Variable "categor" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "      <li class=\"categorie_item_t\">
        <a class=\"categorie_font\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_categorie", ["name" => twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
  </div>

  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 16
            echo "      <div>
        <div class=\"button_categorie\">
                <img class=\"button_image\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"\">
                <p class=\"button_content\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                <p class=\"button_description\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                <p class=\"button_price\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "price", [], "any", false, false, false, 21), "html", null, true);
            echo " €</p>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 16,  74 => 15,  69 => 12,  58 => 9,  55 => 8,  51 => 7,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
  <div>    
    <ul class=\"categorie\">
      <li class=\"categorie_item_t\">
        <a class=\"categorie_font\" href=\"{{ path('click&collect') }}\">All</a>|
      </li>
      {% for item in categor %}
      <li class=\"categorie_item_t\">
        <a class=\"categorie_font\" href=\"{{ path('page_categorie', {'name': item.name}) }}\">{{item.name}}</a>
      </li>
      {% endfor %}
    </ul>
  </div>

  {% for produits in liste %}
      <div>
        <div class=\"button_categorie\">
                <img class=\"button_image\" src=\"{{produits.image}}\" alt=\"\">
                <p class=\"button_content\">{{produits.name}}</p>
                <p class=\"button_description\">{{produits.description}}</p>
                <p class=\"button_price\">{{produits.price}} €</p>
        </div>
      </div>
  {% endfor %}
</section>", "produits.html.twig", "/home/etudiants/longuechaux1/public_html/sae401_sla-back/templates/produits.html.twig");
    }
}
