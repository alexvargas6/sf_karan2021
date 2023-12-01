<?php
namespace FacturaScripts\Plugins\controladorAPIS\Controller;
use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\Role;

class InserRol extends Controller
{
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'InserRol';
        $pagedata['menu'] = 'public';
        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate(false); // Evita la búsqueda de la plantilla twig
        try {
            $this->dataBase->beginTransaction();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $jsonData = file_get_contents('php://input');
                $postData = json_decode($jsonData);

                if (
                    $postData !== null &&
                    property_exists($postData, 'descripcion') &&
                    property_exists($postData, 'rolId')
                ) {
                    // verifica que los campos tengan un valor
                    if (
                        trim($postData->descripcion) === '' ||
                        trim($postData->rolId) === ''
                    ) {
                        throw new \Exception(
                            'Todos los campos son obligatorios'
                        );
                    }

                    $rolModel = new Role();

                    // verifica si el rol con ese código ya existe
                    if ($rolModel->loadFromCode($postData->rolId)) {
                        // si existe un rol con ese código, enviamos un mensaje de error
                        throw new \Exception(
                            'Ya existe un rol con este nombre'
                        );
                    } else {
                        // si no existe, insertamos el nuevo rol
                        $rolModel->descripcion = $postData->descripcion;
                        $rolModel->codrole = $postData->rolId;
                        if ($rolModel->save()) {
                            $this->response->setContent(
                                json_encode([
                                    'status' => 'success',
                                    'message' => 'Role created',
                                ])
                            );
                        } else {
                            throw new \Exception('Error creating the role');
                        }
                    }
                } else {
                    throw new \Exception('Invalid parameters');
                }
            } else {
                throw new \Exception(
                    'Este método solo admite solicitudes POST.'
                );
            }
            $this->dataBase->commit();
        } catch (\Exception $e) {
            // Si alguna operación falla, se deshace la transacción
            $this->dataBase->rollback();
            $response->setContent(json_encode(['error' => $e->getMessage()]));
        }

        return $this->response;
    }
}
