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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 13
        $this->loadTemplate("componentes/tablaP.html.twig", "PermisosControl.html.twig", 13)->display(twig_array_merge($context, ["usuarios" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "roles", [], "any", false, false, false, 13)]));
        // line 14
        echo "      ";
        $this->loadTemplate("componentes/modalP.html.twig", "PermisosControl.html.twig", 14)->display($context);
        echo " ";
        $this->loadTemplate("componentes/modalPaginas.html.twig", "PermisosControl.html.twig", 14)->display($context);
        // line 16
        echo "    </div>
  </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/DataTables/datatables.js"), "html", null, true);
        // line 22
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Plugins/control_permisos/Assets/JS/insertarRol.js"), "html", null, true);
        // line 25
        echo "\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#tableMPaginas\").DataTable(); // Inicializa la DataTable
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable

    \$(document).on(\"click\", \".btn-primary\", function () {
      // Obtener el valor de codrole del botón clicado
      var codrole = \$(this).closest(\"tr\").find(\"th:eq(1)\").text();

      // Asegurarse de que se recoge un valor de codrole
      if (!codrole) {
        Swal.fire(
          \"Error\",
          \"No se ha podido obtener el valor de codrole\",
          \"error\"
        );
        return;
      }

      // Antes de realizar la petición, desmarcar todos los checkboxes
    //  desmarcarCheckboxes();

      var baseUrl = window.location.origin;
      // URL para la petición AJAX
      var url = baseUrl + \"/sistema2/SelectUser_rol\";

      // Realizar petición GET a la API
      \$.get(url, { codrole: codrole })
        .done(function (data) {
          // Parsear la respuesta a JSON
          var response = JSON.parse(data);

          // Verificar si la respuesta contiene un error
          if (response.error) {
            Swal.fire(\"Error\", response.error, \"error\");
            return; // Salir para no ejecutar el código que sigue
          }

          // Manejar la respuesta del API para marcar los checkboxes
       /*   response.forEach(function (item) {
            var pagename = item.pagename;
            var allowdelete = item.allowdelete;

            // Buscar la fila correspondiente en la tabla por pagename
            var \$row = \$(\"#tableMPaginas tbody tr\").filter(function () {
              return \$(this).find(\"td:eq(7)\").text() === pagename;
            });

            // Marcar los checkboxes correspondientes en esa fila
            \$row.find(\"td:eq(1) input\").prop(\"checked\", allowdelete);
            // Y así sucesivamente para los otros checkboxes
          });*/

          // Mostrar el modal después de marcar los checkboxes
          \$(\"#modalPagina\").modal(\"show\");
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          console.error(
            \"Error al obtener datos: \",
            textStatus,
            \", Detalles: \",
            errorThrown
          );
          console.error(\"Respuesta: \", jqXHR.responseText);
          // Mostrar mensaje de error
          Swal.fire(
            \"Error\",
            \"Hubo un problema con la petición: \" + textStatus,
            \"error\"
          );
        });
    });

    \$(document).on(\"click\", \".access-button\", function () {
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
          const url = baseUrl + \"/sistema2/DeleteRole\";
          \$.ajax({
            url: url,
            type: \"POST\",
            data: { id: codrole },
            success: function (response) {
              console.log(response);
              if (response.status == \"success\") {
                Swal.fire(\"¡Eliminado!\", response.message, \"success\");
                window.location.reload(); // Recarga la página después del OK
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
        return array (  93 => 25,  91 => 23,  88 => 22,  86 => 20,  80 => 16,  75 => 14,  73 => 13,  68 => 10,  64 => 9,  58 => 7,  56 => 5,  50 => 2,  36 => 1,);
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
    asset('Plugins/control_permisos/Assets/DataTables/datatables.js')
  }}\"></script>
<script src=\"{{
    asset('Plugins/control_permisos/Assets/JS/insertarRol.js')
  }}\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#tableMPaginas\").DataTable(); // Inicializa la DataTable
    \$(\"#tablaDRoles\").DataTable(); // Inicializa la DataTable

    \$(document).on(\"click\", \".btn-primary\", function () {
      // Obtener el valor de codrole del botón clicado
      var codrole = \$(this).closest(\"tr\").find(\"th:eq(1)\").text();

      // Asegurarse de que se recoge un valor de codrole
      if (!codrole) {
        Swal.fire(
          \"Error\",
          \"No se ha podido obtener el valor de codrole\",
          \"error\"
        );
        return;
      }

      // Antes de realizar la petición, desmarcar todos los checkboxes
    //  desmarcarCheckboxes();

      var baseUrl = window.location.origin;
      // URL para la petición AJAX
      var url = baseUrl + \"/sistema2/SelectUser_rol\";

      // Realizar petición GET a la API
      \$.get(url, { codrole: codrole })
        .done(function (data) {
          // Parsear la respuesta a JSON
          var response = JSON.parse(data);

          // Verificar si la respuesta contiene un error
          if (response.error) {
            Swal.fire(\"Error\", response.error, \"error\");
            return; // Salir para no ejecutar el código que sigue
          }

          // Manejar la respuesta del API para marcar los checkboxes
       /*   response.forEach(function (item) {
            var pagename = item.pagename;
            var allowdelete = item.allowdelete;

            // Buscar la fila correspondiente en la tabla por pagename
            var \$row = \$(\"#tableMPaginas tbody tr\").filter(function () {
              return \$(this).find(\"td:eq(7)\").text() === pagename;
            });

            // Marcar los checkboxes correspondientes en esa fila
            \$row.find(\"td:eq(1) input\").prop(\"checked\", allowdelete);
            // Y así sucesivamente para los otros checkboxes
          });*/

          // Mostrar el modal después de marcar los checkboxes
          \$(\"#modalPagina\").modal(\"show\");
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          console.error(
            \"Error al obtener datos: \",
            textStatus,
            \", Detalles: \",
            errorThrown
          );
          console.error(\"Respuesta: \", jqXHR.responseText);
          // Mostrar mensaje de error
          Swal.fire(
            \"Error\",
            \"Hubo un problema con la petición: \" + textStatus,
            \"error\"
          );
        });
    });

    \$(document).on(\"click\", \".access-button\", function () {
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
          const url = baseUrl + \"/sistema2/DeleteRole\";
          \$.ajax({
            url: url,
            type: \"POST\",
            data: { id: codrole },
            success: function (response) {
              console.log(response);
              if (response.status == \"success\") {
                Swal.fire(\"¡Eliminado!\", response.message, \"success\");
                window.location.reload(); // Recarga la página después del OK
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
", "PermisosControl.html.twig", "C:\\xampp\\htdocs\\sistema2\\Plugins\\control_permisos\\View\\PermisosControl.html.twig");
    }
}
