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

/* cart/index.html.twig */
class __TwigTemplate_831030f0f48905f5a6d41e4688303437 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                ";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "                    <table class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th>Livre</th>
                                <th>Prix unitaire</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 21) != null)) {
                    // line 22
                    yield "                                    <tr>
                                        <td>";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 23), "titre", [], "any", false, false, false, 23), "html", null, true);
                    yield "</td>
                                        <td class=\"unit-price\">";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 24), "prix", [], "any", false, false, false, 24), "html", null, true);
                    yield " dt</td>
                                        <td>
                                            <form action=\"";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-flex\">
                                                <input type=\"number\" name=\"quantity\" value=\"";
                    // line 27
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["panier"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), [], "array", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27), "html", null, true)) : (1));
                    yield "\" min=\"1\" class=\"form-control quantity-input\" style=\"width: 80px\" data-livre-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
                    yield "\">
                                            </form>
                                        </td>
                                        <td class=\"total-price\" data-livre-id=\"";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
                    yield "\">
                                            ";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 31), "prix", [], "any", false, false, false, 31) * CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 31)), "html", null, true);
                    yield " dt
                                        </td>
                                        <td>
                                            <a href=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                    yield "\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"bi bi-trash\"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                ";
                }
                // line 40
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                            <tr class=\"table-primary\">
                                <td colspan=\"3\" class=\"text-end\"><strong>Total général</strong></td>
                                <td colspan=\"2\">
                                    ";
            // line 44
            $context["total"] = 0;
            // line 45
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 46
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 46) != null)) {
                    // line 47
                    yield "                                            ";
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 47), "prix", [], "any", false, false, false, 47) * (((CoreExtension::getAttribute($this->env, $this->source, ($context["panier"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), [], "array", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "livre", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47)) : (1))));
                    // line 48
                    yield "                                        ";
                }
                // line 49
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                                    <strong id=\"global-total\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()), "html", null, true);
            yield " dt</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"text-end\">
                        <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_commander");
            yield "\" class=\"btn btn-success btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> Valider la commande
                        </a>
                    </div>
                        <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_all");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-book\"></i> Voir les livres disponibles
                    </a>
                ";
        } else {
            // line 64
            yield "                    <div class=\"alert alert-info\">
                        Votre panier est vide.
                    </div>
                        <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_all");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-book\"></i> Voir les livres disponibles
                    </a>
                ";
        }
        // line 71
        yield "            </div>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const quantityInputs = document.querySelectorAll('.quantity-input');
            
            quantityInputs.forEach(input => {

                input.addEventListener('change', function() {
                    updatePrice(this);
                });
                
                input.addEventListener('input', function() {
                    updatePrice(this);
                });
            });
            
            function updatePrice(inputElement) {
                const livreId = inputElement.dataset.livreId;
                const quantity = inputElement.value;
                const unitPriceElement = inputElement.closest('tr').querySelector('.unit-price');
                const totalPriceElement = inputElement.closest('tr').querySelector('.total-price');
                
                const unitPrice = parseFloat(unitPriceElement.textContent.replace(' dt', ''));
                
                const newTotal = unitPrice * quantity;
                
                totalPriceElement.textContent = newTotal.toFixed(2) + ' dt';
                
                fetch(`/cart/update/\${livreId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: `quantity=\${quantity}`
                })
                .then(response => {
                    if (!response.ok) {
                        console.error('Erreur lors de la mise à jour du panier');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
                
                updateGlobalTotal();
            }
            
            function updateGlobalTotal() {
                let globalTotal = 0;
                const totalPriceElements = document.querySelectorAll('.total-price');
                
                totalPriceElements.forEach(element => {
                    const priceText = element.textContent.replace(' dt', '');
                    globalTotal += parseFloat(priceText);
                });
                
                document.getElementById('global-total').textContent = globalTotal.toFixed(2) + ' dt';
            }
        });
    </script>
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
        return "cart/index.html.twig";
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
        return array (  244 => 76,  231 => 75,  217 => 71,  210 => 67,  205 => 64,  198 => 60,  191 => 56,  181 => 50,  175 => 49,  172 => 48,  169 => 47,  166 => 46,  161 => 45,  159 => 44,  154 => 41,  148 => 40,  139 => 34,  133 => 31,  129 => 30,  121 => 27,  117 => 26,  112 => 24,  108 => 23,  105 => 22,  102 => 21,  98 => 20,  85 => 9,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                {% if data|length > 0 %}
                    <table class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th>Livre</th>
                                <th>Prix unitaire</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for element in data %}
                                {% if element.livre != null %}
                                    <tr>
                                        <td>{{ element.livre.titre }}</td>
                                        <td class=\"unit-price\">{{ element.livre.prix }} dt</td>
                                        <td>
                                            <form action=\"{{ path('cart_update', {'id': element.livre.id}  ) }}\" method=\"post\" class=\"d-flex\">
                                                <input type=\"number\" name=\"quantity\" value=\"{{ panier[element.livre.id] ?? 1 }}\" min=\"1\" class=\"form-control quantity-input\" style=\"width: 80px\" data-livre-id=\"{{ element.livre.id }}\">
                                            </form>
                                        </td>
                                        <td class=\"total-price\" data-livre-id=\"{{ element.livre.id }}\">
                                            {{ (element.livre.prix * element.quantity) }} dt
                                        </td>
                                        <td>
                                            <a href=\"{{ path('cart_remove', {'id': element.livre.id}) }}\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"bi bi-trash\"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endfor %}
                            <tr class=\"table-primary\">
                                <td colspan=\"3\" class=\"text-end\"><strong>Total général</strong></td>
                                <td colspan=\"2\">
                                    {% set total = 0 %}
                                    {% for element in data %}
                                        {% if element.livre != null %}
                                            {% set total = total + (element.livre.prix * (panier[element.livre.id] ?? 1)) %}
                                        {% endif %}
                                    {% endfor %}
                                    <strong id=\"global-total\">{{ total }} dt</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"text-end\">
                        <a href=\"{{ path('cart_commander') }}\" class=\"btn btn-success btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> Valider la commande
                        </a>
                    </div>
                        <a href=\"{{ path('app_livre_all') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-book\"></i> Voir les livres disponibles
                    </a>
                {% else %}
                    <div class=\"alert alert-info\">
                        Votre panier est vide.
                    </div>
                        <a href=\"{{ path('app_livre_all') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-book\"></i> Voir les livres disponibles
                    </a>
                {% endif %}
            </div>
        </section>
    </main>
{% endblock %}
{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const quantityInputs = document.querySelectorAll('.quantity-input');
            
            quantityInputs.forEach(input => {

                input.addEventListener('change', function() {
                    updatePrice(this);
                });
                
                input.addEventListener('input', function() {
                    updatePrice(this);
                });
            });
            
            function updatePrice(inputElement) {
                const livreId = inputElement.dataset.livreId;
                const quantity = inputElement.value;
                const unitPriceElement = inputElement.closest('tr').querySelector('.unit-price');
                const totalPriceElement = inputElement.closest('tr').querySelector('.total-price');
                
                const unitPrice = parseFloat(unitPriceElement.textContent.replace(' dt', ''));
                
                const newTotal = unitPrice * quantity;
                
                totalPriceElement.textContent = newTotal.toFixed(2) + ' dt';
                
                fetch(`/cart/update/\${livreId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: `quantity=\${quantity}`
                })
                .then(response => {
                    if (!response.ok) {
                        console.error('Erreur lors de la mise à jour du panier');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
                
                updateGlobalTotal();
            }
            
            function updateGlobalTotal() {
                let globalTotal = 0;
                const totalPriceElements = document.querySelectorAll('.total-price');
                
                totalPriceElements.forEach(element => {
                    const priceText = element.textContent.replace(' dt', '');
                    globalTotal += parseFloat(priceText);
                });
                
                document.getElementById('global-total').textContent = globalTotal.toFixed(2) + ' dt';
            }
        });
    </script>
{% endblock %}", "cart/index.html.twig", "C:\\xampp\\htdocs\\symfony 2025\\tp3\\templates\\cart\\index.html.twig");
    }
}
