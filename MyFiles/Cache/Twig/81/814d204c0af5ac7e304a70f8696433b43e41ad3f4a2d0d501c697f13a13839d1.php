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

/* componentes/modalP.html.twig */
class __TwigTemplate_a3ae8911d77331d7bc6831da2756d28c3cdec14b004246969c3e1a61095e5c59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"modalRoles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalRolesLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalRolesLabel\">Agregar Nuevo Rol</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Formulario para capturar información -->
                <form id=\"formularioRoles\">
                    <div class=\"form-group\">
                        <label for=\"codrole\">Código de Rol:</label>
                        <input type=\"text\" class=\"form-control\" id=\"codrole\" name=\"codrole\" maxlength=\"20\" pattern=\"[A-Za-z0-9]+\" title=\"El código no debe contener espacios ni caracteres especiales\" required>
                        <small>El código no debe contener espacios ni caracteres especiales.</small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"descripcion\">Descripción:</label>
                        <textarea class=\"form-control\" id=\"descripcion\" name=\"descripcion\" maxlength=\"150\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-info\" id=\"guardarRol\">Guardar Rol</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "componentes/modalP.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div class=\"modal fade\" id=\"modalRoles\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalRolesLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalRolesLabel\">Agregar Nuevo Rol</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Formulario para capturar información -->
                <form id=\"formularioRoles\">
                    <div class=\"form-group\">
                        <label for=\"codrole\">Código de Rol:</label>
                        <input type=\"text\" class=\"form-control\" id=\"codrole\" name=\"codrole\" maxlength=\"20\" pattern=\"[A-Za-z0-9]+\" title=\"El código no debe contener espacios ni caracteres especiales\" required>
                        <small>El código no debe contener espacios ni caracteres especiales.</small>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"descripcion\">Descripción:</label>
                        <textarea class=\"form-control\" id=\"descripcion\" name=\"descripcion\" maxlength=\"150\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-info\" id=\"guardarRol\">Guardar Rol</button>
                </form>
            </div>
        </div>
    </div>
</div>
", "componentes/modalP.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\componentes\\modalP.html.twig");
    }
}
