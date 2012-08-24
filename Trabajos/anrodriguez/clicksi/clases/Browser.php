<?php
require_once 'config.php';

/**
 * Visualizar resultSet en tablas.
 *
 * @author Alberto N. Rodriguez <anrodriguez@live.com.ar>
 */
class Browser {
    private $resulSet;
    private $paginaActual;
    private $filasPagina;
    private $totalFilas;
    
    private $mostrarDesde;
    private $mostrarHasta;
    private $maxPagina;

    
    public function __construct($rs) {
        $this->setDatos($rs);
        $this->filasPagina=CANT_FILAS_PAGINADO;
        $this->paginaActual=1;
        $this->mostrarDesde=0;
        $this->mostrarHasta=CANT_FILAS_PAGINADO;
        $this->setMaxPaginas();
    }
    
    public function setDatos($rs) {
        $this->resulSet     = $rs;
        $this->paginaActual = 1;
        $this->totalFilas   = count($this->resulSet);
        $this->setMaxPaginas();
    }
    
    public function setFilasPagina($cant) {
        $this->filasPagina = $cant;
        $this->setMaxPaginas();
    }

    public function getPagina() {
        
        $buffer = array();
        $this->setDesdeHastaPagina();
        for ($i=$this->mostrarDesde; $i<$this->mostrarHasta; $i++)
            $buffer[$i] = $this->resulSet[$i];
         return $buffer;
    }
    
    private function setDesdeHastaPagina() {
        $this->mostrarDesde = $this->paginaActual * $this->filasPagina;
        if($this->mostrarDesde<0||$this->mostrarDesde>$this->totalFilas)
            $this->mostrarDesde=0;        
        
        $this->mostrarHasta = $this->mostrarDesde + $this->filasPagina;        
        if ($this->mostrarHasta>=$this->totalFilas)
            $this->mostrarHasta=$this->totalFilas;
    }
    
    private function setMaxPaginas() {
        $this->maxPagina    = intval($this->totalFilas / $this->filasPagina) + ($this->totalFilas % $this->filasPagina);
    }
    
    public function avanzarPagina() {
        $this->paginaActual++;
        if ($this->paginaActual>$this->maxPagina)
            $this->paginaActual=$this->maxPagina;
    }

    public function retrocederPagina() {
        $this->paginaActual--;
        if ($this->paginaActual<0)
            $this->paginaActual=0;
    }
    
}
?>
