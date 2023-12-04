<?php
namespace FacturaScripts\Plugins\controladorAPIS\Controller;
use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\Role;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\Model\RoleAccess;
use FacturaScripts\Core\Model\RoleUser;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use Symfony\Component\HttpFoundation\Response; // Añadido aquí

class DeleteRole extends Controller
{
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'DeleteRol';
        $pagedata['menu'] = 'public';
        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate(false); // Evita la búsqueda de la plantilla twig
        $dataBase = new DataBase();

        try {
            if ($this->request->getMethod() !== 'POST') {
                $this->response->setStatusCode(
                    Response::HTTP_METHOD_NOT_ALLOWED
                );
                $this->response->headers->set(
                    'Content-Type',
                    'application/json'
                );
                throw new \Exception(
                    'Invalid request method, only POST is allowed'
                );
                // return $this->response;
            }

            // Obtén el id del rol que quieres eliminar desde la petición
            $rolId = $this->request->request->get('id', ''); // Asegúrate de pasar el id en la petición dado que es POST

            if (!empty($rolId)) {
                $role = new Role();
                if ($role->loadFromCode($rolId)) {
                    $dataBase->beginTransaction(); // Iniciar transacción
                    // Eliminar las relaciones con roles_access y roles_users
                    $roleAccessObj = new RoleAccess();
                    $roleUserClass = new RoleUser();
                    $where = [new DataBaseWhere('codrole', $role->codrole)];

                    foreach ([$roleAccessObj, $roleUserClass] as $relationObj) {
                        $relations = $relationObj->all($where);
                        if (!empty($relations)) {
                            foreach ($relations as $relation) {
                                $relation->delete();
                            }
                        }
                    }

                    //Eliminando el rol
                    if ($role->delete()) {
                        $this->response->headers->set(
                            'Content-Type',
                            'application/json'
                        );
                        $this->response->setContent(
                            json_encode([
                                'status' => 'success',
                                'message' => 'Role successfully deleted',
                            ])
                        );
                        $dataBase->commit(); // Finaliza transacción si no hay errores
                    } else {
                        $this->response->setStatusCode(
                            Response::HTTP_INTERNAL_SERVER_ERROR
                        );
                        $this->response->headers->set(
                            'Content-Type',
                            'application/json'
                        );
                        throw new \Exception('Role deletion failed');
                    }
                } else {
                    $this->response->setStatusCode(Response::HTTP_NOT_FOUND);
                    $this->response->headers->set(
                        'Content-Type',
                        'application/json'
                    );
                    throw new \Exception('Role not found');
                }
            }
        } catch (\Exception $e) {
            $dataBase->rollback(); // Deshace los cambios si hay un error
            // Aquí manejas cualquier error no esperado que pueda ocurrir en tu código
            // Puedes adaptar este bloque a tus necesidades, por ejemplo, puedes registrar el error en un log
            // En este caso, vamos a devolver simplemente un error 500 con el mensaje de la excepción
            $this->response->setStatusCode(
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
            $this->response->headers->set('Content-Type', 'application/json');
            $this->response->setContent(
                json_encode([
                    'status' => 'error',
                    'message' =>
                        'An unexpected error occurred: ' . $e->getMessage(),
                ])
            );
        }

        return $this->response;
    }
}
