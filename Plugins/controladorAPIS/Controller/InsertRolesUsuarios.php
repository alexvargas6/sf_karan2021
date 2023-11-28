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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nick = isset($_POST['nick']) ? $_POST['nick'] : false;
            $role = isset($_POST['role']) ? $_POST['role'] : false;

            if (!$nick || !$role) {
                $response->setContent(
                    json_encode([
                        'error' => 'Se requieren los campos nick y role.',
                    ])
                );
                return $response;
            }
            // Busca si ya existe un registro con los mismos valores
            $where = [
                new DataBaseWhere('nick', $nick),
                new DataBaseWhere('codrole', $role),
            ];
            if (RoleUser::count($where) > 0) {
                $response->setContent(
                    json_encode([
                        'error' =>
                            'Ya existe un registro con el mismo nick y role.',
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
                        'success' =>
                            'Se ha asignado el usuario al rol correctamente.',
                    ])
                );
            } else {
                $response->setContent(
                    json_encode([
                        'error' => 'No se ha podido asignar el usuario al rol.',
                    ])
                );
            }
        } else {
            $response->setContent(
                json_encode([
                    'error' => 'Este método solo admite solicitudes POST.',
                ])
            );

            return $response;
        }

        return $response;
    }
}
