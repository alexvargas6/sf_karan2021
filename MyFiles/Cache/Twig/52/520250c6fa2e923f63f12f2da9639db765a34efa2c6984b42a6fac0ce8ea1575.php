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

/* Login/Login.html.twig */
class __TwigTemplate_96042cb91fb7d76bd64f7b64b84415bac5c924e3ad2b6038990f1f1a6add4c20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
  <div class=\"row justify-content-md-center\">
    <div class=\"col-md-6\">
      <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        <div class=\"card mt-4\">
          <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\">
            ";
        // line 9
        $context["idfile"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", ["default", "idloginimage", 0], "method", false, false, false, 9);
        // line 10
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 10, $context, $this->getSourceContext());
        echo "
          </a>
          <div class=\"card-body\">
            <p class=\"card-text text-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("login-text"), "html", null, true);
        echo "</p>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                  <span class=\"input-group-text\">
                    <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                  </span>
                </span>
                <input
                  type=\"text\"
                  name=\"fsNick\"
                  class=\"form-control\"
                  maxlength=\"50\"
                  placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        echo "\"
                  required=\"\"
                  autocomplete=\"off\"
                  autofocus=\"\"
                />
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                  <span class=\"input-group-text\">
                    <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                  </span>
                </span>
                <input
                  type=\"password\"
                  name=\"fsPassword\"
                  class=\"form-control\"
                  maxlength=\"50\"
                  placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("password"), "html", null, true);
        echo "\"
                  required=\"\"
                  autocomplete=\"off\"
                />
              </div>
              <a
                href=\"#\"
                class=\"btn btn-block btn-link\"
                data-toggle=\"modal\"
                data-target=\"#newPasswordModal\"
              >
                ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("i-forgot-password"), "html", null, true);
        echo "
              </a>
            </div>
            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
              ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("login"), "html", null, true);
        echo "
            </button>
          </div>
          <div class=\"card-footer text-center\">
            <p>ALFATECH 2023</p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<form action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
  <div
    class=\"modal fade\"
    id=\"newPasswordModal\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
  >
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            <i class=\"fas fa-user-lock mr-2\"></i> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        echo "
          </h5>
          <button
            type=\"button\"
            class=\"close\"
            data-dismiss=\"modal\"
            aria-label=\"Close\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <a
            href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\"
            rel=\"nofollow\"
            target=\"_blank\"
            class=\"btn btn-block btn-link mb-3\"
          >
            ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("need-help-password"), "html", null, true);
        echo "
          </a>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"text\"
                name=\"fsNewUserPasswd\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        echo "\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsNewPasswd\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        echo "\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsNewPasswd2\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("repeat-new-password"), "html", null, true);
        echo "\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("database"), "html", null, true);
        echo "
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsDbPasswd\"
                class=\"form-control\"
                placeholder=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("db-password"), "html", null, true);
        echo "\"
                autocomplete=\"off\"
              />
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
";
    }

    // line 184
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<style>
  body {
    background-color: #333a40;
  }
</style>
";
    }

    // line 191
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo " ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 192
            echo " ";
            if ((1 === twig_compare(($context["idfile"] ?? null), 0))) {
                echo " ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(                // line 193
($context["idfile"] ?? null));
                echo " ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 193))) {
                    echo " ";
                    // line 194
                    $context["url"] = twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "url", ["download-permanent"], "method", false, false, false, 194);
                    echo " ";
                }
                echo " ";
            }
            // line 195
            echo "<img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            echo "\" alt=\"FacturaScripts\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 195,  330 => 194,  325 => 193,  321 => 192,  306 => 191,  295 => 185,  291 => 184,  279 => 177,  268 => 169,  254 => 158,  244 => 151,  223 => 133,  202 => 115,  185 => 101,  164 => 83,  149 => 71,  135 => 60,  128 => 56,  114 => 45,  92 => 26,  76 => 13,  69 => 10,  67 => 9,  63 => 8,  58 => 6,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MicroTemplate.html.twig\" %} {% block body %}
{{ parent() }}
<div class=\"container\">
  <div class=\"row justify-content-md-center\">
    <div class=\"col-md-6\">
      <form action=\"{{ asset('') }}\" method=\"post\" class=\"form\">
        <div class=\"card mt-4\">
          <a href=\"{{ asset('') }}\">
            {% set idfile = appSettings.get('default','idloginimage', 0) %}
            {{ _self.loadLogo(idfile) }}
          </a>
          <div class=\"card-body\">
            <p class=\"card-text text-center\">{{ trans(\"login-text\") }}</p>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                  <span class=\"input-group-text\">
                    <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                  </span>
                </span>
                <input
                  type=\"text\"
                  name=\"fsNick\"
                  class=\"form-control\"
                  maxlength=\"50\"
                  placeholder=\"{{ trans('user') }}\"
                  required=\"\"
                  autocomplete=\"off\"
                  autofocus=\"\"
                />
              </div>
            </div>
            <div class=\"form-group\">
              <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                  <span class=\"input-group-text\">
                    <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                  </span>
                </span>
                <input
                  type=\"password\"
                  name=\"fsPassword\"
                  class=\"form-control\"
                  maxlength=\"50\"
                  placeholder=\"{{ trans('password') }}\"
                  required=\"\"
                  autocomplete=\"off\"
                />
              </div>
              <a
                href=\"#\"
                class=\"btn btn-block btn-link\"
                data-toggle=\"modal\"
                data-target=\"#newPasswordModal\"
              >
                {{ trans(\"i-forgot-password\") }}
              </a>
            </div>
            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
              {{ trans(\"login\") }}
            </button>
          </div>
          <div class=\"card-footer text-center\">
            <p>ALFATECH 2023</p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<form action=\"{{ asset('') }}\" method=\"post\" class=\"form\">
  <div
    class=\"modal fade\"
    id=\"newPasswordModal\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
  >
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            <i class=\"fas fa-user-lock mr-2\"></i> {{ trans(\"new-password\") }}
          </h5>
          <button
            type=\"button\"
            class=\"close\"
            data-dismiss=\"modal\"
            aria-label=\"Close\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <a
            href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\"
            rel=\"nofollow\"
            target=\"_blank\"
            class=\"btn btn-block btn-link mb-3\"
          >
            {{ trans(\"need-help-password\") }}
          </a>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"text\"
                name=\"fsNewUserPasswd\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"{{ trans('user') }}\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsNewPasswd\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"{{ trans('new-password') }}\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsNewPasswd2\"
                class=\"form-control\"
                maxlength=\"50\"
                placeholder=\"{{ trans('repeat-new-password') }}\"
                required=\"\"
                autocomplete=\"off\"
              />
            </div>
          </div>
          <div class=\"form-group\">
            {{ trans(\"database\") }}
            <div class=\"input-group\">
              <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                </span>
              </span>
              <input
                type=\"password\"
                name=\"fsDbPasswd\"
                class=\"form-control\"
                placeholder=\"{{ trans('db-password') }}\"
                autocomplete=\"off\"
              />
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ trans(\"save\") }}
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
{% endblock %} {% block css %}
{{ parent() }}
<style>
  body {
    background-color: #333a40;
  }
</style>
{% endblock %} {% macro loadLogo(idfile) %} {% set url =
'Dinamic/Assets/Images/horizontal-logo.png' %} {% if idfile > 0 %} {% set
attached = attachedFile(idfile) %} {% if attached.filename is not empty %} {%
set url = attached.url('download-permanent') %} {% endif %} {% endif %}
<img class=\"card-img-top\" src=\"{{ asset(url) }}\" alt=\"FacturaScripts\" />
{% endmacro loadLogo %}
", "Login/Login.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\alfatech_login\\View\\Login\\Login.html.twig");
    }
}
