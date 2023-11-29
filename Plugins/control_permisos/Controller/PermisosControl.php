<?php
namespace FacturaScripts\Plugins\control_permisos\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\RoleUser;
use FacturaScripts\Core\Model\Role;
class PermisosControl extends Controller
{
    public $roles;

    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'Control de permisos';
        $pagedata['menu'] = 'control';
        $pagedata['icon'] = 'fas fa-address-book';

        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions): void
    {
        parent::privateCore($response, $user, $permissions);
        // Aquí es donde accederemos a los roles

        $roleModel = new Role();
        $this->roles = $roleModel->all(); // Traerá todos los datos de la tabla roles

        // Ahora los datos están disponibles para usar en la plantilla
    }
}