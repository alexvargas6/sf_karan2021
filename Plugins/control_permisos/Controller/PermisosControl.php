<?php
namespace FacturaScripts\Plugins\control_permisos\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Model\RoleUser;
use FacturaScripts\Core\Model\Page;
use FacturaScripts\Core\Model\Role;
class PermisosControl extends Controller
{
    public $roles;
    public $pages;

    public function getPageData(): array
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'Control de permisos';
        $pagedata['menu'] = 'control';
        $pagedata['icon'] = 'fas fa-address-book';

        return $pagedata;
    }

    /**
     * List of all the pages.
     *
     * @return Page[]
     */
    protected function getAllPages(): array
    {
        $page = new Page();
        $order = ['menu' => 'ASC', 'title' => 'ASC'];
        return $page->all([], $order, 0, 0);
    }

    public function privateCore(&$response, $user, $permissions): void
    {
        parent::privateCore($response, $user, $permissions);
        // Aquí es donde accederemos a los roles

        $roleModel = new Role();
        $this->roles = $roleModel->all(); // Traerá todos los datos de la tabla roles
        $pageModel = new Page();
        $this->pages = [];

        foreach ($this->getAllPages() as $page) {
            $page->title = $this->toolBox()
                ->i18n()
                ->trans($page->title);
            $page->menu = $this->toolBox()
                ->i18n()
                ->trans($page->menu);
            $this->pages[] = $page;
        }
        // Ahora los datos están disponibles para usar en la plantilla
    }
}
