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
                'SELECT * FROM roles_users ru INNER JOIN roles r ON r.codrole = ru.codrole WHERE ru.nick = :nick';
            $params = ['nick' => $nick];
            error_log('Parámetros:' . json_encode($params));
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
