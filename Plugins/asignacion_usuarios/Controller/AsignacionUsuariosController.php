<?php
namespace FacturaScripts\Plugins\asignacion_usuarios\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\User;

class AsignacionUsuariosController extends Controller
{
    public $users;
    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'asignacion de usuarios';
        $pagedata['menu'] = 'control';
        $pagedata['icon'] = 'fas fa-users';

        return $pagedata;
    }

    public function privateCore(&$response, $user, $permissions): void
    {
        parent::privateCore($response, $user, $permissions);

        $userModel = new User(); // creamos instancia del modelo User
        $this->users = $userModel->all(); // cargamos todos los usuarios en la propiedad users.
    }
}
