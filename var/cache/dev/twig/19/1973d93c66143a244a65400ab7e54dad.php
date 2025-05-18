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

/* commande/show.html.twig */
class __TwigTemplate_728f7a0997135c4cb68eeeff0a79c775 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/show.html.twig", 1);
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

        yield "Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Détails de la Commande #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <strong>Date:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 13, $this->source); })()), "dateCommande", [], "any", false, false, false, 13), "d/m/Y H:i"), "html", null, true);
        yield "
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <strong>Statut:</strong> 
                        <span class=\"badge 
                            ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18) == "validée")) {
            yield "bg-success
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19) == "annulée")) {
            yield "bg-danger
                            ";
        } else {
            // line 20
            yield "bg-warning";
        }
        yield "\">
                            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Livres commandés</h5>
                
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Livre</th>
                            <th>Prix unitaire</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 39, $this->source); })()), "commandeLivres", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["commandeLivre"]) {
            // line 40
            yield "                            <tr>
                                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commandeLivre"], "livre", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commandeLivre"], "livre", [], "any", false, false, false, 42), "prix", [], "any", false, false, false, 42), "html", null, true);
            yield " dt</td>
                                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commandeLivre"], "quantite", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commandeLivre"], "livre", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44) * CoreExtension::getAttribute($this->env, $this->source, $context["commandeLivre"], "quantite", [], "any", false, false, false, 44)), "html", null, true);
            yield " dt</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commandeLivre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan=\"3\" class=\"text-end\">Total global:</th>
                            <th>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 51, $this->source); })()), "total", [], "any", false, false, false, 51), "html", null, true);
        yield " dt</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"card-footer text-end\">
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes");
        yield "\" class=\"btn btn-secondary\">
                    Retour à l'historique
                </a>
            </div>
        </div>
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
        return "commande/show.html.twig";
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
        return array (  199 => 57,  190 => 51,  184 => 47,  175 => 44,  171 => 43,  167 => 42,  163 => 41,  160 => 40,  156 => 39,  135 => 21,  130 => 20,  125 => 19,  121 => 18,  113 => 13,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande #{{ commande.id }}{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Détails de la Commande #{{ commande.id }}</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <strong>Date:</strong> {{ commande.dateCommande|date('d/m/Y H:i') }}
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <strong>Statut:</strong> 
                        <span class=\"badge 
                            {% if commande.status == 'validée' %}bg-success
                            {% elseif commande.status == 'annulée' %}bg-danger
                            {% else %}bg-warning{% endif %}\">
                            {{ commande.status }}
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Livres commandés</h5>
                
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Livre</th>
                            <th>Prix unitaire</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for commandeLivre in commande.commandeLivres %}
                            <tr>
                                <td>{{ commandeLivre.livre.titre }}</td>
                                <td>{{ commandeLivre.livre.prix }} dt</td>
                                <td>{{ commandeLivre.quantite }}</td>
                                <td>{{ commandeLivre.livre.prix * commandeLivre.quantite }} dt</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan=\"3\" class=\"text-end\">Total global:</th>
                            <th>{{ commande.total }} dt</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"card-footer text-end\">
                <a href=\"{{ path('app_commandes') }}\" class=\"btn btn-secondary\">
                    Retour à l'historique
                </a>
            </div>
        </div>
    </div>
{% endblock %}", "commande/show.html.twig", "C:\\xampp\\htdocs\\symfony 2025\\Symbook-main\\templates\\commande\\show.html.twig");
    }
}
