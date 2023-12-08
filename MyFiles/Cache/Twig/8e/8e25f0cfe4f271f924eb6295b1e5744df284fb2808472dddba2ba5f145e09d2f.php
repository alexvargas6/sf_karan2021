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

/* PermisosControl.html.twig */
class __TwigTemplate_58d2d9b43b80a1eaeb87b6265a69cb53f177e4ebd694dec78cc37569bc86a72e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "PermisosControl.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<link
  rel=\"stylesheet\"
  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/DataTables/datatables.css"), "html", null, true);
        // line 7
        echo "\"
/>

";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 14
        $this->loadTemplate("componentes/tablaP.html.twig", "PermisosControl.html.twig", 14)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 14)]));
        // line 15
        echo "      ";
        $this->loadTemplate("componentes/modalP.html.twig", "PermisosControl.html.twig", 15)->display($context);
        echo " ";
        $this->loadTemplate("componentes/modalPaginas.html.twig", "PermisosControl.html.twig", 15)->display($context);
        // line 17
        echo "    </div>
  </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/JS/afetDom.js"), "html", null, true);
        // line 23
        echo "\"></script>

<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/DataTables/datatables.js"), "html", null, true);
        // line 27
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/JS/insertarRol.js"), "html", null, true);
        // line 30
        echo "\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#tableMPaginas\").DataTable();

    // Seleccionar el campo de búsqueda y agregar la clase \"form-control\"
    \$('#tableMPaginas_filter input[type=\"search\"]').addClass(\"form-control\");
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable
    \$('#tablaDRoles_filter input[type=\"search\"]').addClass(\"form-control\");

    // Aplicar estilo al input search de la tabla #tablaDRoles
    \$(\"#tableMPaginas_filter\").css(\"text-align\", \"right\");

    // Aplicar estilo al input search de la tabla #tableMPaginas
    \$(\"#tablaDRoles_filter\").css(\"text-align\", \"right\");

    \$(document).on(\"click\", \".access-button\", function () {
      event.preventDefault(); // Evita la recarga de la página
      var codrole = \$(this).attr(\"data-role\"); // Captura el codrole del botón
      Swal.fire({
        title: \"¿Estás seguro?\",
        text: \"¿Seguro que quieres eliminar este permiso?\",
        icon: \"warning\",
        showCancelButton: true,
        confirmButtonColor: \"#3085d6\",
        cancelButtonColor: \"#d33\",
        confirmButtonText: \"Sí, bórralo!\",
      }).then((result) => {
        if (result.isConfirmed) {
          var baseUrl = window.location.origin;
          // toma la url para la petición AJAX
          const url = baseUrl + \"/public/DeleteRole\";
          \$.ajax({
            url: url,
            type: \"POST\",
            data: { id: codrole },
            success: function (response) {
              console.log(response);
              if (response.status == \"success\") {
                Swal.fire(\"¡Eliminado!\", response.message, \"success\").then(
                  (result) => {
                    if (result.isConfirmed) {
                      window.location.reload(); // Recarga la página después del OK
                    }
                  }
                );
                // window.location.reload(); // Recarga la página después del OK
              } else if (response.status == \"error\") {
                Swal.fire(\"Error\", response.message, \"error\");
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              Swal.fire(
                \"Error\",
                \"Error al procesar la petición: \" +
                  jqXHR.status +
                  \" - \" +
                  jqXHR.responseText,
                \"error\"
              );
              //console.log(textStatus, errorThrown);
            },
          });
        }
      });
    });
  });
  \$(\"#formularioRoles\").on(\"submit\", function (e) {
    e.preventDefault();
    insertRol();
  });
  // Delegación de eventos para los checkboxes
  \$(document).on(\"change\", \".form-check-input\", function () {
    var isChecked = \$(this).prop(\"checked\");
    var checkboxId = \$(this).attr(\"id\");

    var pagename = checkboxId.split(\"_\")[1]; // Obtenemos el nombre de la página

    if (checkboxId.startsWith(\"mostrar_\")) {
      // Si se cambia el checkbox 'Mostrar'
      if (!isChecked) {
        \$(\".form-check-input\").prop(\"checked\", false); // Desmarcar todos los checkboxes
      }
    } else {
      // Si se cambia cualquier otro checkbox
      if (!\$(\"#mostrar_\" + pagename).prop(\"checked\")) {
        // Si 'Mostrar' no está marcado
        \$(\"#mostrar_\" + pagename).prop(\"checked\", true); // Marcar 'Mostrar' correspondiente
      }
    }
  });

  \$(document).on(\"hidden.bs.modal\", \"#modalPagina\", function () {
    desmarcarCheckboxes();
  });
  // Llamar a la función limpiarModal al cerrar el modal usando jQuery (Bootstrap)
  \$(\"#modalRoles\").on(\"hidden.bs.modal\", function (e) {
    limpiarModal();
  });
  function desmarcarCheckboxes() {
    \$(\"#tableMPaginas tbody tr td input[type='checkbox']\").prop(
      \"checked\",
      false
    );
  }
  function limpiarModal() {
    // Obtener referencia a los campos del formulario dentro del modal
    let codigoRolInput = document.getElementById(\"codrole\");
    let descripcionInput = document.getElementById(\"descripcion\");

    // Limpiar los valores de los campos del formulario
    codigoRolInput.value = \"\";
    descripcionInput.value = \"\";
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "PermisosControl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  98 => 28,  95 => 27,  93 => 25,  89 => 23,  87 => 21,  81 => 17,  76 => 15,  74 => 14,  69 => 11,  65 => 10,  58 => 7,  56 => 5,  50 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuBghTemplate.html.twig\" %} {% block head %}
{{ parent() }}
<link
  rel=\"stylesheet\"
  href=\"{{
    asset('Plugins/control_permisos/Assets/DataTables/datatables.css')
  }}\"
/>

{% endblock %} {% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {% include 'componentes/tablaP.html.twig' with { 'usuarios': fsc.roles }%}
      {% include 'componentes/modalP.html.twig'%} {% include
      'componentes/modalPaginas.html.twig'%}
    </div>
  </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"{{
    asset('Plugins/control_permisos/Assets/JS/afetDom.js')
  }}\"></script>

<script src=\"{{
    asset('Plugins/control_permisos/Assets/DataTables/datatables.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/control_permisos/Assets/JS/insertarRol.js')
  }}\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#tableMPaginas\").DataTable();

    // Seleccionar el campo de búsqueda y agregar la clase \"form-control\"
    \$('#tableMPaginas_filter input[type=\"search\"]').addClass(\"form-control\");
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable
    \$('#tablaDRoles_filter input[type=\"search\"]').addClass(\"form-control\");

    // Aplicar estilo al input search de la tabla #tablaDRoles
    \$(\"#tableMPaginas_filter\").css(\"text-align\", \"right\");

    // Aplicar estilo al input search de la tabla #tableMPaginas
    \$(\"#tablaDRoles_filter\").css(\"text-align\", \"right\");

    \$(document).on(\"click\", \".access-button\", function () {
      event.preventDefault(); // Evita la recarga de la página
      var codrole = \$(this).attr(\"data-role\"); // Captura el codrole del botón
      Swal.fire({
        title: \"¿Estás seguro?\",
        text: \"¿Seguro que quieres eliminar este permiso?\",
        icon: \"warning\",
        showCancelButton: true,
        confirmButtonColor: \"#3085d6\",
        cancelButtonColor: \"#d33\",
        confirmButtonText: \"Sí, bórralo!\",
      }).then((result) => {
        if (result.isConfirmed) {
          var baseUrl = window.location.origin;
          // toma la url para la petición AJAX
          const url = baseUrl + \"/public/DeleteRole\";
          \$.ajax({
            url: url,
            type: \"POST\",
            data: { id: codrole },
            success: function (response) {
              console.log(response);
              if (response.status == \"success\") {
                Swal.fire(\"¡Eliminado!\", response.message, \"success\").then(
                  (result) => {
                    if (result.isConfirmed) {
                      window.location.reload(); // Recarga la página después del OK
                    }
                  }
                );
                // window.location.reload(); // Recarga la página después del OK
              } else if (response.status == \"error\") {
                Swal.fire(\"Error\", response.message, \"error\");
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              Swal.fire(
                \"Error\",
                \"Error al procesar la petición: \" +
                  jqXHR.status +
                  \" - \" +
                  jqXHR.responseText,
                \"error\"
              );
              //console.log(textStatus, errorThrown);
            },
          });
        }
      });
    });
  });
  \$(\"#formularioRoles\").on(\"submit\", function (e) {
    e.preventDefault();
    insertRol();
  });
  // Delegación de eventos para los checkboxes
  \$(document).on(\"change\", \".form-check-input\", function () {
    var isChecked = \$(this).prop(\"checked\");
    var checkboxId = \$(this).attr(\"id\");

    var pagename = checkboxId.split(\"_\")[1]; // Obtenemos el nombre de la página

    if (checkboxId.startsWith(\"mostrar_\")) {
      // Si se cambia el checkbox 'Mostrar'
      if (!isChecked) {
        \$(\".form-check-input\").prop(\"checked\", false); // Desmarcar todos los checkboxes
      }
    } else {
      // Si se cambia cualquier otro checkbox
      if (!\$(\"#mostrar_\" + pagename).prop(\"checked\")) {
        // Si 'Mostrar' no está marcado
        \$(\"#mostrar_\" + pagename).prop(\"checked\", true); // Marcar 'Mostrar' correspondiente
      }
    }
  });

  \$(document).on(\"hidden.bs.modal\", \"#modalPagina\", function () {
    desmarcarCheckboxes();
  });
  // Llamar a la función limpiarModal al cerrar el modal usando jQuery (Bootstrap)
  \$(\"#modalRoles\").on(\"hidden.bs.modal\", function (e) {
    limpiarModal();
  });
  function desmarcarCheckboxes() {
    \$(\"#tableMPaginas tbody tr td input[type='checkbox']\").prop(
      \"checked\",
      false
    );
  }
  function limpiarModal() {
    // Obtener referencia a los campos del formulario dentro del modal
    let codigoRolInput = document.getElementById(\"codrole\");
    let descripcionInput = document.getElementById(\"descripcion\");

    // Limpiar los valores de los campos del formulario
    codigoRolInput.value = \"\";
    descripcionInput.value = \"\";
  }
</script>
{% endblock %}
", "PermisosControl.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\control_permisos\\View\\PermisosControl.html.twig");
    }
}
