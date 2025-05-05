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
          <a class=\"nav-link  \" href=\"#\">
            <i class=\"fas fa-home me-1 \"></i>Accueil
            
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"\">
            <i class=\"fas fa-book me-1\"></i>Nos livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-tags me-1\"></i>Nos catégories
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-info-circle me-1\"></i>À propos
          </a>
        </li>
      </ul>
      <ul class=\"navbar-nav\">
        ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            yield "         <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
            <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
          </a>
        </li>
       
        ";
        } else {
            // line 57
            yield "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
            <i class=\"fas fa-user-plus me-1\"></i>Inscription
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 64
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
          </a>
        </li>
        ";
        }
        // line 69
        yield "      </ul>
    </div>
  </div>
</nav>
     <div class=\"container mt-3\">
    
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 76
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 78
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "        
        ";
        // line 83
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 86
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

    // line 83
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

        // line 84
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
        return array (  286 => 84,  273 => 83,  261 => 13,  248 => 12,  237 => 10,  224 => 9,  201 => 5,  187 => 86,  185 => 83,  182 => 82,  175 => 80,  166 => 78,  162 => 77,  157 => 76,  153 => 75,  145 => 69,  137 => 64,  128 => 58,  125 => 57,  116 => 51,  113 => 50,  111 => 49,  75 => 15,  73 => 12,  70 => 11,  68 => 9,  64 => 8,  58 => 5,  52 => 1,);
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
          <a class=\"nav-link  \" href=\"#\">
            <i class=\"fas fa-home me-1 \"></i>Accueil
            
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"\">
            <i class=\"fas fa-book me-1\"></i>Nos livres
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-tags me-1\"></i>Nos catégories
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-info-circle me-1\"></i>À propos
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
