<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* livre/userall.html.twig */
class __TwigTemplate_6dd3ed1b72923bdd5e417aef15054bba extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/userall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/userall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livre/userall.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Espace Admin : les livres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center my-5\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_livre_all");
        yield "\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher par titre...\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["q"], "method", false, false, false, 11), "html", null, true);
        yield "\" aria-label=\"Rechercher\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["livre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 21
            yield "                <div class=\"col-md-3 mb-3\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">
                            <img src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "image", [], "any", false, false, false, 24), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 24), "html", null, true);
            yield "\">
                            <h5 class=\"card-title\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">
                                <strong>Editeur:</strong> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "editeur", [], "any", false, false, false, 27), "html", null, true);
            yield "<br>
                                <strong>Date Edition:</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dateEdition", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            yield "<br>
                                <strong>Prix:</strong> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 29), "html", null, true);
            yield "<br>
                                <strong>Catégorie:</strong> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "cat", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
            yield "<br
                                <strong><a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_livre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir Detail...</a></strong>
                                <strong><a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-success\">Ajouter au panier</a></strong>
                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </div>
    </div>
    
    <div class=\"navigation\">
        ";
        // line 42
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 42, $this->source); })()));
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "livre/userall.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  180 => 42,  174 => 38,  162 => 32,  158 => 31,  154 => 30,  150 => 29,  146 => 28,  142 => 27,  137 => 25,  131 => 24,  126 => 21,  122 => 20,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Admin : les livres{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center my-5\">
            <div class=\"col-md-6\">
                <form action=\"{{ path('user_livre_all') }}\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher par titre...\" value=\"{{ app.request.query.get('q') }}\" aria-label=\"Rechercher\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            {% for livre in livre %}
                <div class=\"col-md-3 mb-3\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">
                            <img src=\"{{ livre.image }}\" class=\"card-img-top\" alt=\"{{ livre.titre }}\">
                            <h5 class=\"card-title\">{{ livre.titre }}</h5>
                            <p class=\"card-text\">
                                <strong>Editeur:</strong> {{ livre.editeur }}<br>
                                <strong>Date Edition:</strong> {{ livre.dateEdition|date('d/m/Y') }}<br>
                                <strong>Prix:</strong> {{ livre.prix }}<br>
                                <strong>Catégorie:</strong> {{ livre.cat.libelle }}<br
                                <strong><a href=\"{{ path('user_livre_show', {'id': livre.id}) }}\" class=\"btn btn-primary\">Voir Detail...</a></strong>
                                <strong><a href=\"{{ path('cart_add',{id:livre.id}) }}\" class=\"btn btn-success\">Ajouter au panier</a></strong>
                            </p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    
    <div class=\"navigation\">
        {{ knp_pagination_render(livre) }}
    </div>
{% endblock %}", "livre/userall.html.twig", "C:\\xampp\\htdocs\\symfony 2025\\Symbook-main\\templates\\livre\\userall.html.twig");
    }
}
