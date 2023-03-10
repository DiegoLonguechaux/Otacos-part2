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

/* accueil.html.twig */
class __TwigTemplate_893ea950ad5d6a0e6c166c04a289dfbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <title>Original French Tacos - O'Tacos</title>
</head>
<body class=\"body_acceuil\">

<main class=\"page_acceuil\">
    <div class=\"organisation\">
        <div class=\"barredenav\">
            <div class=\"sidebar\">

                <div class=\"selection_lang\">
                    <img src=\"./images/france.svg\" alt=\"\">
                    <a class=\"langue\" href=\"\">FR</a>
                </div>
    
                <div class=\"selection-nav\">
                    <nav class=\"primary-nav\">
                        <ul class=\"primary-nav__list\">
                            <li class=\"primary-nav__item active\">
                                <a class=\"primary-nav__link\" href=\"#\">Accueil</a>
                            </li>
                            <li class=\"primary-nav__item\">
                                <a class=\"primary-nav__link\" href=\"./click&collect\">Click & Collect</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    
                <footer class=\"footer\">
                    <img class=\"logotacos\" src=\"./images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"./images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"./images/insta.svg\" alt=\"\">
                    </div>
    
                    <div class=\"info\">
                        <ul class=\"info_list\">
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Contact</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Mentions légales</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <div>
            <header>
                <div>
                    <div class=\"header_acceuil\">
                        <h1 class=\"header_title\">42 INGREDIENTS</h1>
                        <img class=\"logo_accueil\" src=\"./images/logotacos.svg\" alt=\"\">
                        <h1 class=\"header_title\">40 000 COMBINAISONS</h1>
                    </div>
                </div>
            </header>


            <div class=\"clavier\">
                <img src=\"./images/clavier.PNG\" alt=\"\">
            </div>
        </div>
    </div>
</main>>
</body>>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  134 => 8,  127 => 7,  51 => 10,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% block stylesheets %}
        <link href=\"{{ asset('./css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <title>Original French Tacos - O'Tacos</title>
</head>
<body class=\"body_acceuil\">

<main class=\"page_acceuil\">
    <div class=\"organisation\">
        <div class=\"barredenav\">
            <div class=\"sidebar\">

                <div class=\"selection_lang\">
                    <img src=\"./images/france.svg\" alt=\"\">
                    <a class=\"langue\" href=\"\">FR</a>
                </div>
    
                <div class=\"selection-nav\">
                    <nav class=\"primary-nav\">
                        <ul class=\"primary-nav__list\">
                            <li class=\"primary-nav__item active\">
                                <a class=\"primary-nav__link\" href=\"#\">Accueil</a>
                            </li>
                            <li class=\"primary-nav__item\">
                                <a class=\"primary-nav__link\" href=\"./click&collect\">Click & Collect</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    
                <footer class=\"footer\">
                    <img class=\"logotacos\" src=\"./images/logotacos.svg\" alt=\"\">
                    <div class=\"socialmedia\">
                        <img class=\"fb\" src=\"./images/fb.svg\" alt=\"\">
                        <img class=\"instagram\" src=\"./images/insta.svg\" alt=\"\">
                    </div>
    
                    <div class=\"info\">
                        <ul class=\"info_list\">
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Contact</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Mentions légales</a>
                            </li>
                            <li class=\"info_item\">
                                <a class=\"info_font\" href=\"\">Cookie Policy</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <div>
            <header>
                <div>
                    <div class=\"header_acceuil\">
                        <h1 class=\"header_title\">42 INGREDIENTS</h1>
                        <img class=\"logo_accueil\" src=\"./images/logotacos.svg\" alt=\"\">
                        <h1 class=\"header_title\">40 000 COMBINAISONS</h1>
                    </div>
                </div>
            </header>


            <div class=\"clavier\">
                <img src=\"./images/clavier.PNG\" alt=\"\">
            </div>
        </div>
    </div>
</main>>
</body>>", "accueil.html.twig", "/home/etudiants/longuechaux1/public_html/sae401_sla-back/templates/accueil.html.twig");
    }
}
