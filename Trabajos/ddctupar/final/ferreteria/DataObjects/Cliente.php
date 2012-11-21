<?php
/**
 * Table Definition for cliente
 */
require_once 'DB/DataObject.php';

class DO_Cliente extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'cliente';             // table name
    public $id_cliente;                      // int(4)  primary_key not_null unsigned
    public $nombre;                          // varchar(100)   not_null
    public $apellido;                        // varchar(100)   not_null
    public $email;                           // varchar(100)   not_null
    public $username;                        // varchar(100)   not_null
    public $pass;                            // varchar(255)   not_null
    public $fecha_registro;                  // date   not_null
    public $administrador;                   // tinyint(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DO_Cliente',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
