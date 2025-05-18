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

/* sales/index.html.twig */
class __TwigTemplate_2c6b508f0c62983fb53f742e6b52d553 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sales/index.html.twig", 1);
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

        yield "Sales Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .chart-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        .dashboard-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
        #sales_chart {
            width: 100%;
            height: 500px;
        }
        #orders_chart {
            width: 100%;
            height: 400px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
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

        // line 56
        yield "    <div class=\"container py-4\">
        <div class=\"dashboard-header\">
            <h1 class=\"display-4\">Sales Dashboard</h1>
            <p class=\"lead\">Business analytics and performance metrics</p>
        </div>

        <div class=\"stats-container\">
            <div class=\"stat-card\">
                <h3>Top Selling Book</h3>
                <div id=\"top_book\"></div>
            </div>
            
            <div class=\"stat-card\">
                <h3>Loyal Customers Count</h3>
                <div id=\"loyal_customers_count\"></div>
            </div>
        </div>

        <div class=\"chart-container\">
            <h3>Monthly Orders</h3>
            <div id=\"orders_chart\"></div>
        </div>

        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        google.charts.load('current', {'packages':['corechart', 'table']});
        google.charts.setOnLoadCallback(fetchAndDrawCharts);

        function fetchAndDrawCharts() {
            fetch('/api/sales')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(apiData => {
                    console.log('Received data:', apiData);
                    
                    // Display top book
                    if (apiData.most_sold_books.length > 0) {
                        const topBook = apiData.most_sold_books[0];
                        document.getElementById('top_book').innerHTML = `
                            <h4>\${topBook.titre}</h4>
                            <p>Author: \${topBook.editeur}</p>
                            <p>Total Sold: \${topBook.total_vendu} copies</p>
                        `;
                    }

                    // Display loyal customers count
                    document.getElementById('loyal_customers_count').innerHTML = `
                        <h4>\${apiData.loyal_customers.length} loyal customers</h4>
                        
                    `;

                    // Monthly orders chart
                    const ordersData = new google.visualization.DataTable();
                    ordersData.addColumn('string', 'Month');
                    ordersData.addColumn('number', 'Orders');
                    
                    const ordersRows = apiData.orders_by_period.map(item => [item.period, item.commande_count]);
                    ordersData.addRows(ordersRows);

                    const ordersOptions = {
                        title: 'Monthly Orders',
                        curveType: 'function',
                        legend: { position: 'bottom' },
                        chartArea: { width: '85%', height: '70%' },
                        hAxis: { title: 'Month' },
                        vAxis: { title: 'Number of Orders' },
                        colors: ['#4285F4']
                    };

                    const ordersChart = new google.visualization.LineChart(document.getElementById('orders_chart'));
                    ordersChart.draw(ordersData, ordersOptions);

                   
                    loyalCustomersData.addRows(loyalCustomersRows);

                    const loyalCustomersTable = new google.visualization.Table(document.getElementById('loyal_customers_table'));
                    loyalCustomersTable.draw(loyalCustomersData, {
                        showRowNumber: true,
                        width: '100%',
                        height: '100%',
                        page: 'enable',
                        pageSize: 10
                    });

                    // Resize handlers
                    window.addEventListener('resize', () => {
                        ordersChart.draw(ordersData, ordersOptions);
                        
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('sales_chart').innerHTML = 
                        `<div class=\"alert alert-danger\">Error loading chart data: \${error.message}</div>`;
                });
        }
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
        return "sales/index.html.twig";
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
        return array (  224 => 84,  211 => 83,  175 => 56,  162 => 55,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sales Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .chart-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        .dashboard-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
        #sales_chart {
            width: 100%;
            height: 500px;
        }
        #orders_chart {
            width: 100%;
            height: 400px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"dashboard-header\">
            <h1 class=\"display-4\">Sales Dashboard</h1>
            <p class=\"lead\">Business analytics and performance metrics</p>
        </div>

        <div class=\"stats-container\">
            <div class=\"stat-card\">
                <h3>Top Selling Book</h3>
                <div id=\"top_book\"></div>
            </div>
            
            <div class=\"stat-card\">
                <h3>Loyal Customers Count</h3>
                <div id=\"loyal_customers_count\"></div>
            </div>
        </div>

        <div class=\"chart-container\">
            <h3>Monthly Orders</h3>
            <div id=\"orders_chart\"></div>
        </div>

        
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        google.charts.load('current', {'packages':['corechart', 'table']});
        google.charts.setOnLoadCallback(fetchAndDrawCharts);

        function fetchAndDrawCharts() {
            fetch('/api/sales')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(apiData => {
                    console.log('Received data:', apiData);
                    
                    // Display top book
                    if (apiData.most_sold_books.length > 0) {
                        const topBook = apiData.most_sold_books[0];
                        document.getElementById('top_book').innerHTML = `
                            <h4>\${topBook.titre}</h4>
                            <p>Author: \${topBook.editeur}</p>
                            <p>Total Sold: \${topBook.total_vendu} copies</p>
                        `;
                    }

                    // Display loyal customers count
                    document.getElementById('loyal_customers_count').innerHTML = `
                        <h4>\${apiData.loyal_customers.length} loyal customers</h4>
                        
                    `;

                    // Monthly orders chart
                    const ordersData = new google.visualization.DataTable();
                    ordersData.addColumn('string', 'Month');
                    ordersData.addColumn('number', 'Orders');
                    
                    const ordersRows = apiData.orders_by_period.map(item => [item.period, item.commande_count]);
                    ordersData.addRows(ordersRows);

                    const ordersOptions = {
                        title: 'Monthly Orders',
                        curveType: 'function',
                        legend: { position: 'bottom' },
                        chartArea: { width: '85%', height: '70%' },
                        hAxis: { title: 'Month' },
                        vAxis: { title: 'Number of Orders' },
                        colors: ['#4285F4']
                    };

                    const ordersChart = new google.visualization.LineChart(document.getElementById('orders_chart'));
                    ordersChart.draw(ordersData, ordersOptions);

                   
                    loyalCustomersData.addRows(loyalCustomersRows);

                    const loyalCustomersTable = new google.visualization.Table(document.getElementById('loyal_customers_table'));
                    loyalCustomersTable.draw(loyalCustomersData, {
                        showRowNumber: true,
                        width: '100%',
                        height: '100%',
                        page: 'enable',
                        pageSize: 10
                    });

                    // Resize handlers
                    window.addEventListener('resize', () => {
                        ordersChart.draw(ordersData, ordersOptions);
                        
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('sales_chart').innerHTML = 
                        `<div class=\"alert alert-danger\">Error loading chart data: \${error.message}</div>`;
                });
        }
    </script>
{% endblock %}", "sales/index.html.twig", "C:\\Users\\mohamed\\Downloads\\Symbook-main (1)\\Symbook-main\\templates\\sales\\index.html.twig");
    }
}
