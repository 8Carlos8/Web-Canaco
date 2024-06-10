<?php require_once('Modelo.php');?>
<?php
class Mensajes extends Modelo {
	public $id;
	public $nombre;
	public $correo;
	public $paisc;
	public $comentarios;

	function __construct() {
		parent::__construct();
		$this->tabla = "usuarios";
	} 

	function lista() {
		$this->consulta = "select * from $this->tabla";

		return $this->encuentraTodos();
	}

	function recuperaRegistro($id) {
		$this->consulta = "select * from $this->tabla where id = $id";

	 	$dato = $this->encuentraUno();	
	 	
	 	if ( isset($dato) ) {
	 		$this->nombre = $dato->nombre;
	 		$this->correo = $dato->correo;
			$this->paisc = $dato->paisc;
	 		$this->comentarios = $dato->comentarios;
	 	}
	}

	function insertaRegistro() {
		$this->traerDatos();

		$this->consulta = 
		"insert into $this->tabla ".
		"values ( null," .
		"'$this->nombre', ".
		"'$this->correo', ".
		"'$this->paisc', ".
		"'$this->comentarios');";

		$this->ejecutaComandoIUD();
	}

	function actualizaRegistro() {
		$this->traerDatos();

		$this->consulta = 
		"update $this->tabla set " .
		"nombre = '$this->nombre'," .
		"correo = '$this->correo'".
		"paisc = '$this->paisc'," .
		"comentarios = '$this->comentarios'".
		"where id = $this->id";

		$this->ejecutaComandoIUD();
	}

	function eliminaRegistro($id) {
		$this->consulta = 
		"delete from $this->tabla ".
		"where id = $id;";

		$this->ejecutaComandoIUD();
	}
    function traerDatos(){
        $this->id = $_POST['id'];
		$this->nombre = $_POST['nombre'];
		$this->correo = $_POST['correo'];
		$this->paisc = $_POST['paisc'];
		$this->comentarios = $_POST['comentarios'];
    }
}
?>