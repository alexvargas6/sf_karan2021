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

/* FS2017Migrator.html.twig */
class __TwigTemplate_cea8c7ff82e57e11b75f2c26d641d468ddb89500a96f1560c7e93f049b1a56b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "FS2017Migrator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"bg-light pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h2\">
                        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "working", [], "any", false, false, false, 9)) {
            // line 10
            echo "                            <i class=\"fas fa-sync fa-spin fa-fw\"></i>
                        ";
        } else {
            // line 12
            echo "                            <i class=\"fas fa-database fa-fw\"></i>
                        ";
        }
        // line 14
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("2017-migrator"), "html", null, true);
        echo "
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "migrationLog", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">
                            <ul class=\"mb-0\">
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "migrationLog", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 28
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $context["log"], "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                            </ul>
                        </div>
                        ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "working", [], "any", false, false, false, 32)) {
                // line 33
                echo "                            <div class=\"card-footer\">
                                <button class=\"btn btn-warning\">
                                    <i class=\"fas fa-cog fa-spin fa-fw\"></i> ";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("run"), "html", null, true);
                echo "
                                </button>
                            </div>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 38
($context["fsc"] ?? null), "findFileBackup", [], "method", false, false, false, 38)) {
                // line 39
                echo "                            <div class=\"card-footer\">
                                <a class=\"btn btn-danger\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 40), "html", null, true);
                echo "?action=remove-backup\">
                                    <i class=\"fas fa-trash-alt fa-fw\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("remove-backup"), "html", null, true);
                echo "
                                </a>
                            </div>
                        ";
            }
            // line 45
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 49
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "enableRun", [], "any", false, false, false, 49)) {
            // line 50
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("2017-migrator-paragraph"), "html", null, true);
            echo "</div>
                        <div class=\"card-footer\">
                            <form method=\"post\">
                                <button type=\"button\" class=\"btn btn-warning\" onclick=\"executeMigration();\">
                                    <i class=\"fas fa-terminal fa-fw\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("run"), "html", null, true);
            echo "
                                </button>
                            </form>
                        </div>
                    </div>
                    ";
            // line 62
            $context["filesBackup"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "findFileBackup", [], "method", false, false, false, 62);
            // line 63
            echo "                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">
                            <h2 class=\"h5 card-title\">
                                <i class=\"fas fa-save fa-fw\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("files"), "html", null, true);
            echo "
                            </h2>
                            <p class=\"card-text\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("2017-files-paragraph"), "html", null, true);
            echo "</p>
                            ";
            // line 69
            if (($context["filesBackup"] ?? null)) {
                // line 70
                echo "                                <div class=\"alert alert-success mb-0\">
                                    <i class=\"fas fa-check fa-fw\"></i> ";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("backup-found"), "html", null, true);
                echo "
                                </div>
                            ";
            } else {
                // line 74
                echo "                                <div class=\"alert alert-warning mb-0\">
                                    <i class=\"fas fa-times fa-fw\"></i> ";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("backup-not-found"), "html", null, true);
                echo "
                                </div>
                            ";
            }
            // line 78
            echo "                        </div>
                        ";
            // line 79
            if ((0 === twig_compare(($context["filesBackup"] ?? null), false))) {
                // line 80
                echo "                            <div class=\"card-footer\">
                                <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 81), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-redo fa-fw\"></i> ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
                echo "
                                </a>
                            </div>
                        ";
            }
            // line 86
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 90
        echo "    </div>
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function executeMigration() {
            bootbox.confirm({
                title: \"";
        // line 98
        echo $this->env->getFunction('trans')->getCallable()("confirm-migration");
        echo "\",
                message: \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure-migration"), "html", null, true);
        echo "\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        echo "\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
        echo "\",
                        className: 'btn-warning'
                    }
                },
                callback: function (result) {
                    if (result) {
                        window.location = \"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 112), "html", null, true);
        echo "?action=Inicio\";
                    }
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "FS2017Migrator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 112,  257 => 106,  251 => 103,  244 => 99,  240 => 98,  232 => 94,  228 => 93,  223 => 90,  217 => 86,  210 => 82,  206 => 81,  203 => 80,  201 => 79,  198 => 78,  192 => 75,  189 => 74,  183 => 71,  180 => 70,  178 => 69,  174 => 68,  169 => 66,  164 => 63,  162 => 62,  154 => 57,  147 => 53,  142 => 50,  139 => 49,  133 => 45,  126 => 41,  122 => 40,  119 => 39,  117 => 38,  111 => 35,  107 => 33,  105 => 32,  101 => 30,  92 => 28,  88 => 27,  81 => 22,  79 => 21,  68 => 14,  64 => 12,  60 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %}

{% block body %}
    <div class=\"bg-light pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h2\">
                        {% if fsc.working %}
                            <i class=\"fas fa-sync fa-spin fa-fw\"></i>
                        {% else %}
                            <i class=\"fas fa-database fa-fw\"></i>
                        {% endif %}
                        {{ trans('2017-migrator') }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        {% if fsc.migrationLog %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">
                            <ul class=\"mb-0\">
                                {% for log in fsc.migrationLog %}
                                    <li>{{ log }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                        {% if fsc.working %}
                            <div class=\"card-footer\">
                                <button class=\"btn btn-warning\">
                                    <i class=\"fas fa-cog fa-spin fa-fw\"></i> {{ trans('run') }}
                                </button>
                            </div>
                        {% elseif fsc.findFileBackup() %}
                            <div class=\"card-footer\">
                                <a class=\"btn btn-danger\" href=\"{{ fsc.url() }}?action=remove-backup\">
                                    <i class=\"fas fa-trash-alt fa-fw\"></i> {{ trans('remove-backup') }}
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if fsc.enableRun %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">{{ trans('2017-migrator-paragraph') }}</div>
                        <div class=\"card-footer\">
                            <form method=\"post\">
                                <button type=\"button\" class=\"btn btn-warning\" onclick=\"executeMigration();\">
                                    <i class=\"fas fa-terminal fa-fw\"></i> {{ trans('run') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    {% set filesBackup = fsc.findFileBackup() %}
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-body\">
                            <h2 class=\"h5 card-title\">
                                <i class=\"fas fa-save fa-fw\"></i> {{ trans('files') }}
                            </h2>
                            <p class=\"card-text\">{{ trans('2017-files-paragraph') }}</p>
                            {% if filesBackup %}
                                <div class=\"alert alert-success mb-0\">
                                    <i class=\"fas fa-check fa-fw\"></i> {{ trans('backup-found') }}
                                </div>
                            {% else %}
                                <div class=\"alert alert-warning mb-0\">
                                    <i class=\"fas fa-times fa-fw\"></i> {{ trans('backup-not-found') }}
                                </div>
                            {% endif %}
                        </div>
                        {% if filesBackup == false %}
                            <div class=\"card-footer\">
                                <a href=\"{{ fsc.url() }}\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-redo fa-fw\"></i> {{ trans('refresh') }}
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        function executeMigration() {
            bootbox.confirm({
                title: \"{{ trans('confirm-migration') | raw }}\",
                message: \"{{ trans('are-you-sure-migration') }}\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> {{ trans('cancel') }}\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> {{ trans('continue') }}\",
                        className: 'btn-warning'
                    }
                },
                callback: function (result) {
                    if (result) {
                        window.location = \"{{ fsc.url() }}?action=Inicio\";
                    }
                }
            });
        }
    </script>
{% endblock %}", "FS2017Migrator.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\FS2017Migrator\\View\\FS2017Migrator.html.twig");
    }
}
