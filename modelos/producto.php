<?php
class producto{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProd;
   
    public function MostrarDatos() {
        echo "•ID: " . $this->Id ."<br>"
        ."•Nombre del producto: " . $this->Nombre."<br>"
        ."•Precio: " . $this->Precio."<br>"
        ."•Stock: " . $this->Stock;

        echo '<br>'."•-----------------------• " .'<br>'
        ."•ID: " . $this->TipoProd->Id ."<br>"
        ."•Descripcion: " . $this->TipoProd->Descripcion; 
        
    }
}



?>