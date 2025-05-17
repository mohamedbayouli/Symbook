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

/* base.html.twig */
class __TwigTemplate_c0d17a1fc23a85499bf5d4932f34dee4 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
       <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.min (4).css"), "html", null, true);
        yield "\">
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "
        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 15
        yield "    </head>
    <body>
       ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "getRoles", [], "method", false, false, false, 17)))) {
            // line 18
            yield "
  <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <span class=\"fas fa-book-open text-light me-2\"></span>
    <a class=\"navbar-brand\" href=\"#\">Admin</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_all");
            yield "\">
            <i class=\"fas fa-book me-1\"></i>livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
            yield "\">
            <i class=\"fas fa-tags me-1\"></i>catégories
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
            <i class=\"fas fa-tags me-1\"></i>Utilisateurs
          </a>
        </li>
      </ul>
      <ul class=\"navbar-nav\">
        ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
                // line 46
                yield "         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 47
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">
            <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
          </a>
        </li>
       
        ";
            } else {
                // line 53
                yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 54
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\">
            <i class=\"fas fa-user-plus me-1\"></i>Inscription
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 60
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\">
            <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
          </a>
        </li>
        ";
            }
            // line 65
            yield "      </ul>
    </div>
  </div>
</nav>
";
        } else {
            // line 70
            yield "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <span class=\"fas fa-book-open text-light me-2\"></span>
    <a class=\"navbar-brand\" href=\"#\">Symbook</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-home me-1\"></i>Accueil
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_livre_all");
            yield "\">
            <i class=\"fas fa-book me-1\"></i>Nos livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-tags me-1\"></i>Nos catégories
          </a>
        </li>

        ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) {
                // line 96
                yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 97
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes");
                yield "\">
            <i class=\"fas fa-info-circle me-1\"></i>Mes Commandes
          </a>
        </li>
        ";
            }
            // line 102
            yield "      </ul>

      <ul class=\"navbar-nav\">
        ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105)) {
                // line 106
                yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 107
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
                yield "\" title=\"Panier\">
            <i class=\"bi bi-cart\"></i> Panier
            ";
                // line 109
                $context["panier_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "session", [], "any", false, false, false, 109), "get", ["panier", []], "method", false, false, false, 109));
                // line 110
                yield "            ";
                if (((isset($context["panier_count"]) || array_key_exists("panier_count", $context) ? $context["panier_count"] : (function () { throw new RuntimeError('Variable "panier_count" does not exist.', 110, $this->source); })()) > 0)) {
                    // line 111
                    yield "              <span class=\"badge bg-danger rounded-pill\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["panier_count"]) || array_key_exists("panier_count", $context) ? $context["panier_count"] : (function () { throw new RuntimeError('Variable "panier_count" does not exist.', 111, $this->source); })()), "html", null, true);
                    yield "</span>
            ";
                }
                // line 113
                yield "          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 116
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">
            <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
          </a>
        </li>
        ";
            } else {
                // line 121
                yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 122
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\">
            <i class=\"fas fa-user-plus me-1\"></i>Inscription
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
                // line 127
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\">
            <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
          </a>
        </li>
        ";
            }
            // line 132
            yield "      </ul>
    </div>
  </div>
</nav>

";
        }
        // line 138
        yield "     <div class=\"container mt-3\">
    
        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 141
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 143
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "        
        ";
        // line 148
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 151
        yield "        </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        // line 149
        yield "       
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
        return "base.html.twig";
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
        return array (  406 => 149,  393 => 148,  381 => 13,  368 => 12,  357 => 10,  344 => 9,  321 => 5,  307 => 151,  305 => 148,  302 => 147,  295 => 145,  286 => 143,  282 => 142,  277 => 141,  273 => 140,  269 => 138,  261 => 132,  253 => 127,  245 => 122,  242 => 121,  234 => 116,  229 => 113,  223 => 111,  220 => 110,  218 => 109,  213 => 107,  210 => 106,  208 => 105,  203 => 102,  195 => 97,  192 => 96,  190 => 95,  177 => 85,  160 => 70,  153 => 65,  145 => 60,  136 => 54,  133 => 53,  124 => 47,  121 => 46,  119 => 45,  110 => 39,  102 => 34,  94 => 29,  81 => 18,  79 => 17,  75 => 15,  73 => 12,  70 => 11,  68 => 9,  64 => 8,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
       <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap.min (4).css')}}\">
        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}

        {% endblock %}
    </head>
    <body>
       {% if app.user and 'ROLE_ADMIN' in app.user.getRoles() %}

  <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <span class=\"fas fa-book-open text-light me-2\"></span>
    <a class=\"navbar-brand\" href=\"#\">Admin</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_livre_all') }}\">
            <i class=\"fas fa-book me-1\"></i>livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('admin_categories') }}\">
            <i class=\"fas fa-tags me-1\"></i>catégories
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
            <i class=\"fas fa-tags me-1\"></i>Utilisateurs
          </a>
        </li>
      </ul>
      <ul class=\"navbar-nav\">
        {% if app.user %}
         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
            <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
          </a>
        </li>
       
        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
            <i class=\"fas fa-user-plus me-1\"></i>Inscription
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
            <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
          </a>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>
{% else %}
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <span class=\"fas fa-book-open text-light me-2\"></span>
    <a class=\"navbar-brand\" href=\"#\">Symbook</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-home me-1\"></i>Accueil
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('user_livre_all') }}\">
            <i class=\"fas fa-book me-1\"></i>Nos livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-tags me-1\"></i>Nos catégories
          </a>
        </li>

        {% if app.user %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_commandes') }}\">
            <i class=\"fas fa-info-circle me-1\"></i>Mes Commandes
          </a>
        </li>
        {% endif %}
      </ul>

      <ul class=\"navbar-nav\">
        {% if app.user %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('cart_index') }}\" title=\"Panier\">
            <i class=\"bi bi-cart\"></i> Panier
            {% set panier_count = app.session.get('panier', {})|length %}
            {% if panier_count > 0 %}
              <span class=\"badge bg-danger rounded-pill\">{{ panier_count }}</span>
            {% endif %}
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
            <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
          </a>
        </li>
        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
            <i class=\"fas fa-user-plus me-1\"></i>Inscription
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
            <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
          </a>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>

{% endif %}
     <div class=\"container mt-3\">
    
        {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages %}
                    {{ message }}
                {% endfor %}
            </div>
        {% endfor %}
        
        {% block body %}
       
        {% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symphonie 2025\\tp3\\tp3\\templates\\base.html.twig");
    }
}
