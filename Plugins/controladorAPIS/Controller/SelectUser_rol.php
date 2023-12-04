<?php
namespace FacturaScripts\Plugins\controladorAPIS\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\RoleAccess;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class SelectUser_rol extends Controller
{
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'SelectUser_rol';
        $pagedata['menu'] = 'public';
        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate(false); // Evita la búsqueda de la plantilla twig
        try {
            // obten el codrole del URL
            $codrole = $this->request->get('codrole');

            // lanzar una excepción si codrole no está definido
            if (empty($codrole)) {
                throw new \Exception('Se requiere el parámetro codrole');
            }

            // obtener el modelo de role_access
            $roleAccessModel = new RoleAccess();

            $where = [new DataBaseWhere('codrole', $codrole)];
            $roleAccessRecords = $roleAccessModel->all($where);

            // lanzar una excepción si no se encuentra ningún registro
            if (empty($roleAccessRecords)) {
                throw new \Exception(
                    'No se encontraron registros para el codrole proporcionado'
                );
            }

            // devuelve los registros como respuesta JSON
            $response->setContent(json_encode($roleAccessRecords));
        } catch (\Exception $e) {
            // devuelve el mensaje de error como respuesta JSON
            $response->setContent(json_encode(['error' => $e->getMessage()]));
        }
    }
}
