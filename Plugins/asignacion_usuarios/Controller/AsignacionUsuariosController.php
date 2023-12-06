<?php
namespace FacturaScripts\Plugins\asignacion_usuarios\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\User;
use FacturaScripts\Core\Model\Role;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class AsignacionUsuariosController extends Controller
{
    public $users;
    public $roles;
    public $fsRoute;
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'Asignacion de usuarios';
        $pagedata['menu'] = 'control';
        $pagedata['icon'] = 'fas fa-users';
        // $data['fs_route'] = '/public';

        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions): void
    {
        parent::privateCore($response, $user, $permissions);
        $userModel = new User(); // creamos instancia del modelo User
        $where = [new DataBaseWhere('admin', false)];
        $this->users = $userModel->all($where);

        $roleModel = new Role(); // creamos instancia del modelo Role
        $this->roles = $roleModel->all(); // cargamos todos los roles en la propiedad roles.
        $this->fsRoute = '/public';
    }
}
