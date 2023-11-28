<?php
namespace FacturaScripts\Plugins\controladorAPIS\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\RoleUser; // Importa el nombre de clase del modelo RoleUser correcto

class RolesUsuarios extends Controller
{
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'RolesUsuarios';
        $pagedata['menu'] = 'public';
        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate(false); // Evita la búsqueda de la plantilla twig
        $nick = isset($_GET['nick']) ? $_GET['nick'] : false;

        if (!$nick) {
            $response->setContent(
                json_encode(['error' => 'No se ha proporcionado un nick'])
            );
            return $response;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $dataBase = new DataBase();
            $sql =
                'SELECT * FROM roles_users ru INNER JOIN roles r ON r.codrole = ru.codrole WHERE ru.nick = ' .
                $dataBase->var2str($nick);

            $params = ['nick' => $nick];

            $data = $dataBase->select($sql, $params);

            if (empty($data)) {
                $response->setContent(
                    json_encode([
                        'error' => "No se ha encontrado ningún usuario con el nombre de usuario: $nick.",
                    ])
                );
                return $response;
            }

            $response->setContent(json_encode($data));
        }
        return $response;
    }
}
/*public function privateCore(&$response, $user, $permissions)
{
    parent::privateCore($response, $user, $permissions);
    $this->setTemplate(false); // Evita la búsqueda de la plantilla twig

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nick = isset($_POST['nick']) ? $_POST['nick'] : false;
        $role = isset($_POST['role']) ? $_POST['role'] : false;

        if (!$nick || !$role) {
            $response->setContent(
                json_encode([
                    'error' => 'Se requieren los campos nick y role.'
                ])
            );
            return $response;
        }

        $roleUser = new RoleUser();
        $roleUser->nick = $nick;
        $roleUser->codrole = $role;

        if ($roleUser->save()) {
            $response->setContent(
                json_encode([
                    'success' => "Se ha asignado el usuario al rol correctamente."
                ])
            );
        } else {
            $response->setContent(
                json_encode([
                    'error' => "No se ha podido asignar el usuario al rol."
                ])
            );
        }
    } else {
        // El código original para el GET request
    }

    return $response;
}
*/
