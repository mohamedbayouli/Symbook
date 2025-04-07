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

/* inscription/inscription.html.twig */
class __TwigTemplate_3fcfd9f889462e3d4ac64fd8c8c5dd5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/inscription.html.twig", 1);
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

        yield "Hello InscriptionController!";
        
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
        yield "<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-lg p-4\" style=\"width: 100%; max-width: 500px;\">
        <h2 class=\"text-center mb-4\">Créer un compte</h2>
        <form action=\"../../controlleur/user/newacc.php\" method=\"post\" id=\"signup\" novalidate>
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Entrer votre nom\">
            </div>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Entrer votre email\">
            </div>

            <div class=\"mb-3\">
                <label for=\"birthday\" class=\"form-label\">Date de naissance</label>
                <input type=\"date\" class=\"form-control\" id=\"birthday\" name=\"birthday\">
            </div>

            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label> 
<p class=\"text-danger\">
                (*)le mot doit contenir au moins 8 caractères et un chiffre.
            

            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Entrer votre mot de passe\">
            </div>

            <div class=\"mb-3\">
                <label for=\"password_confirmation\" class=\"form-label\">Répéter le mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password_confirmation\" name=\"password_confirmation\" placeholder=\"Répéter votre mot de passe\">
            </div>
            
<p class=\"text-danger\">Les deux mots de passe ne sont pas identiques.</p>
            <button type=\"submit\" class=\"btn btn-primary w-100\" name='ok'>s'inscrire</button>
        </form>
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
        return "inscription/inscription.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello InscriptionController!{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-lg p-4\" style=\"width: 100%; max-width: 500px;\">
        <h2 class=\"text-center mb-4\">Créer un compte</h2>
        <form action=\"../../controlleur/user/newacc.php\" method=\"post\" id=\"signup\" novalidate>
            <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Entrer votre nom\">
            </div>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Entrer votre email\">
            </div>

            <div class=\"mb-3\">
                <label for=\"birthday\" class=\"form-label\">Date de naissance</label>
                <input type=\"date\" class=\"form-control\" id=\"birthday\" name=\"birthday\">
            </div>

            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label> 
<p class=\"text-danger\">
                (*)le mot doit contenir au moins 8 caractères et un chiffre.
            

            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Entrer votre mot de passe\">
            </div>

            <div class=\"mb-3\">
                <label for=\"password_confirmation\" class=\"form-label\">Répéter le mot de passe</label>
                <input type=\"password\" class=\"form-control\" id=\"password_confirmation\" name=\"password_confirmation\" placeholder=\"Répéter votre mot de passe\">
            </div>
            
<p class=\"text-danger\">Les deux mots de passe ne sont pas identiques.</p>
            <button type=\"submit\" class=\"btn btn-primary w-100\" name='ok'>s'inscrire</button>
        </form>
    </div>
</div>
{% endblock %}
", "inscription/inscription.html.twig", "C:\\xampp\\htdocs\\symphonie 2025\\tp3\\tp3\\templates\\inscription\\inscription.html.twig");
    }
}
