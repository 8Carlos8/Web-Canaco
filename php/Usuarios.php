<?php require_once('Modelo.php');?>
<?php
class Usuarios extends Modelo {
	public $id;
	public $nombre;
	public $apellido;
	public $correo;
	public $contrasenia;

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
	 		$this->apellido = $dato->apellido;
			$this->correo = $dato->correo;
	 		$this->contrasenia = $dato->contrasenia;
	 	}
	}

	function insertaRegistro() {
		$this->traerDatos();

		$this->consulta = 
		"insert into $this->tabla (nombre, apellido, correo, contrasenia) ".
		"values ( " .
		"'$this->nombre',".
		"'$this->apellido',".
		"'$this->correo',".
		"'$this->contrasenia');";

		$this->ejecutaComandoIUD();
	}

	function actualizaRegistro() {
		$this->traerDatos();

		$this->consulta = 
		"update $this->tabla set " .
		"nombre = '$this->nombre'," .
		"apellido = '$this->apellido'".
		"correo = '$this->correo'," .
		"contrasenia = '$this->contrasenia'".
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
		$this->apellido = $_POST['apellido'];
		$this->correo = $_POST['correo'];
		$this->contrasenia = $_POST['contrasenia'];
    }
}
?>