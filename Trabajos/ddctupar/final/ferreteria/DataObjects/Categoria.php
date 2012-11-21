<?php
/**
 * Table Definition for categoria
 */
require_once 'DB/DataObject.php';

class DO_Categoria extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'categoria';           // table name
    public $id_categoria;                    // int(4)  primary_key not_null unsigned
    public $producto_id_producto;            // int(4)   not_null unsigned
    public $tipo;                            // varchar(100)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DO_Categoria',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
