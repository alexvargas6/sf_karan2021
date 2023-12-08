<?php

namespace FacturaScripts\Plugins\facturaCliente\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListFacturaCliente extends ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();

        if ($this->user->admin) {
            $data['showTotalPage'] = true; // Muestra el total de la página
            $data['showSumTotal'] = true; // Muestra la suma total del apartado de totales
        } else {
            $data['showTotalPage'] = false;
            $data['showSumTotal'] = false;
        }

        return $data;
    }

    protected function createViews(): void
    {
        // Aquí se definen las vistas adicionales para el módulo ListFacturaCliente
        // Puedes añadir tus propias pestañas, columnas y filtros personalizados según tus necesidades

        // Ejemplo de pestaña adicional
        /* $this->addView(
            'my_custom_tab',
            'FacturasPersonalizadas',
            'facturas-personalizadas'
        );*/

        // Ejemplo de columna adicional en el listado
        // $this->addViewColumn('my_custom_column', 'FechaPersonalizada');

        // Ejemplo de filtro adicional
        //$this->addViewFilter('my_custom_filter', 'EstadoPersonalizado');

        // Puedes añadir tantas vistas adicionales como necesites

        //linea 97 listfacturacliente
    }
}
