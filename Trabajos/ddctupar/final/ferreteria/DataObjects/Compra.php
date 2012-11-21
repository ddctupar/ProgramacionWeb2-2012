<?php
/**
 * Table Definition for compra
 */
require_once 'DB/DataObject.php';

class DO_Compra extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'compra';              // table name
    public $id_compra;                       // int(4)  primary_key not_null unsigned
    public $cliente_id_cliente;              // int(4)   not_null unsigned
    public $producto_id_producto;            // int(4)   not_null unsigned
    public $cantidad;                        // int(4)   unsigned
    public $precio_unitario;                 // float  
    public $precio_total;                    // float  
    public $comprado;                        // tinyint(1)  
    public $fecha;                           // date  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DO_Compra',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
