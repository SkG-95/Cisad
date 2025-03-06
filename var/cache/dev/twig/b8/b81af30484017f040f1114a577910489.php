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

/* user/index.html.twig */
class __TwigTemplate_5cda8c6a08601f906f5d2ad2eea0f110 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Gestion des Utilisateurs";
        
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Gestion des Utilisateurs</h1>

    <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white\">
            <h3 class=\"card-title mb-0\">Liste des Utilisateurs</h3>
        </div>
        <div class=\"card-body\">
            <table id=\"userTable\" class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Rôles</th>
                        <th>Rang</th>
                        <th>Victoires</th>
                        <th>Défaites</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            yield "                    <tr>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33)), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 34
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 34), "rank", [], "any", false, false, false, 34), "html", null, true)) : ("N/A"));
            yield "</td> ";
            // line 35
            yield "                        <td>";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 35), "victoire", [], "any", false, false, false, 35), "html", null, true)) : (0));
            yield "</td> ";
            // line 36
            yield "                        <td>";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 36), "defaite", [], "any", false, false, false, 36), "html", null, true)) : (0));
            yield "</td> ";
            // line 37
            yield "                        <td>
                            <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>

                            ";
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 41)) {
                // line 42
                yield "                                ";
                // line 43
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infos_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "infos", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Modifier Infos</a>
                            ";
            } else {
                // line 45
                yield "                                ";
                // line 46
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infos_new", ["user_id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\">Ajouter Infos</a>
                            ";
            }
            // line 48
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                </tbody>
            </table>
        </div>
        <div class=\"card-footer text-center\">
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-success\">Créer un nouvel utilisateur</a>
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#userTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json' // Traduction en français
            },
            columnDefs: [
                { orderable: false, targets: [7] } // Désactiver le tri sur la colonne \"Actions\"
            ]
        });
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
        return "user/index.html.twig";
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
        return array (  212 => 59,  206 => 55,  197 => 51,  195 => 50,  189 => 48,  183 => 46,  181 => 45,  175 => 43,  173 => 42,  171 => 41,  166 => 39,  162 => 38,  159 => 37,  155 => 36,  151 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  129 => 29,  124 => 28,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Gestion des Utilisateurs</h1>

    <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white\">
            <h3 class=\"card-title mb-0\">Liste des Utilisateurs</h3>
        </div>
        <div class=\"card-body\">
            <table id=\"userTable\" class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Rôles</th>
                        <th>Rang</th>
                        <th>Victoires</th>
                        <th>Défaites</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                        <td>{{ user.infos ? user.infos.rank : 'N/A' }}</td> {# Affiche le rang ou \"N/A\" si aucune donnée n'existe #}
                        <td>{{ user.infos ? user.infos.victoire : 0 }}</td> {# Affiche les victoires ou 0 par défaut #}
                        <td>{{ user.infos ? user.infos.defaite : 0 }}</td> {# Affiche les défaites ou 0 par défaut #}
                        <td>
                            <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>

                            {% if user.infos %}
                                {# Si des infos existent, afficher un bouton pour les modifier #}
                                <a href=\"{{ path('app_infos_edit', {'id': user.infos.id}) }}\" class=\"btn btn-sm btn-primary\">Modifier Infos</a>
                            {% else %}
                                {# Si aucune info n'existe, afficher un bouton pour en ajouter #}
                                <a href=\"{{ path('app_infos_new', {'user_id': user.id}) }}\" class=\"btn btn-sm btn-success\">Ajouter Infos</a>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer text-center\">
            <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-success\">Créer un nouvel utilisateur</a>
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#userTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json' // Traduction en français
            },
            columnDefs: [
                { orderable: false, targets: [7] } // Désactiver le tri sur la colonne \"Actions\"
            ]
        });
    });
</script>
{% endblock %}
", "user/index.html.twig", "/Users/ryanchaibat/Desktop/testtechryan/TestTechRyan/templates/user/index.html.twig");
    }
}
