<?php
namespace FacturaScripts\Plugins\controladorAPIS\Controller;
use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\RoleUser;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class InsertRolesUsuarios extends Controller
{
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'InsertRolesUsuarios';
        $pagedata['menu'] = 'public';
        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate(false); // Evita la búsqueda de la plantilla twig
        try {
            // Iniciar una transacción
            $this->dataBase->beginTransaction();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nick = isset($_POST['nick']) ? $_POST['nick'] : false;
                //$role = isset($_POST['role']) ? $_POST['role'] : false;
                // Convertimos los roles a array para poder trabajar con ellos
                $rolesActuales = isset($_POST['rolesActuales'])
                    ? explode(',', $_POST['rolesActuales'])
                    : [];
                $rolesNuevos = isset($_POST['rolesNuevos'])
                    ? explode(',', $_POST['rolesNuevos'])
                    : [];

                // Filtramos los roles nuevos para quedarnos solo con los que no estén en los roles actuales
                $rolesParaInsertar = array_diff($rolesNuevos, $rolesActuales);
                $rolesParaEliminar = array_diff($rolesActuales, $rolesNuevos);
                // Verificar si ambos arrays están vacíos
                if (empty($rolesParaInsertar) && empty($rolesParaEliminar)) {
                    throw new \Exception(
                        'No se ha hecho ninguna modificación.'
                    );
                }
                if (!empty($rolesParaInsertar)) {
                    foreach ($rolesParaInsertar as $role) {
                        $roleUser = new RoleUser();
                        $roleUser->nick = $nick;
                        $roleUser->codrole = $role;

                        if (!$roleUser->save()) {
                            throw new \Exception(
                                'No se ha podido asignar el role ' .
                                    $role .
                                    ' al usuario.'
                            );
                        }
                    }
                }

                // Recorremos la lista de roles para insertar y los guardamos en la base de datos

                if (!empty($rolesParaEliminar)) {
                    foreach ($rolesParaEliminar as $role) {
                        // Crear una instancia del modelo
                        $roleUser = new RoleUser();

                        // Crea una condición para encontrar el role para eliminar
                        $where = [
                            new DataBaseWhere('codrole', $role),
                            new DataBaseWhere('nick', $nick),
                        ];

                        // Carga el registro del usuario
                        if ($roleUser->loadFromCode('', $where)) {
                            // Luego intenta eliminar el registro del modelo
                            if (!$roleUser->delete()) {
                                throw new \Exception(
                                    'No se ha podido quitar el role ' .
                                        $role .
                                        ' del usuario.'
                                );
                            }
                        }
                    }
                }

                // Si todo ha ido bien, enviamos una respuesta de éxito
                $response->setContent(
                    json_encode([
                        'success' =>
                            'Se han modificado correctamente los permisos del usuario.',
                    ])
                );
            } else {
                throw new \Exception(
                    'Este método solo admite solicitudes POST.'
                );
            }
            // Si todas las operaciones fueron exitosas, se confirma la transacción
            $this->dataBase->commit();
        } catch (\Exception $e) {
            // Si alguna operación falla, se deshace la transacción
            $this->dataBase->rollback();
            $response->setContent(json_encode(['error' => $e->getMessage()]));
        }

        return $response;
    }
}
