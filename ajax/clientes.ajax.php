<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class AjaxClientes{

	/*=============================================
	EDITAR CLIENTE
	=============================================*/	

	public $idCliente;
	public $DocumentoId;

	public function ajaxEditarCliente(){

		$item = "id";
		$valor = $this->idCliente;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);


	}

	/*=============================================
	VALIDAR NO REPETIR IDCOUMENTO CLIENTE
	=============================================*/	

	public function ajaxValidarIdDocumentoCliente(){

		$item = "documento";
		$valor = $this->DocumentoId;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);

	}	

}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if(isset($_POST["idCliente"])){

	$cliente = new AjaxClientes();
	$cliente -> idCliente = $_POST["idCliente"];
	$cliente -> ajaxEditarCliente();

}

/*=============================================
VALIDAR NO REPETIR IDDOCUMENTO CLIENTE
=============================================*/

if(isset( $_POST["varPostnuevoDocumentoId"])){

	$idPostDocumetoCliente = new AjaxClientes();
	$idPostDocumetoCliente -> DocumentoId = $_POST["varPostnuevoDocumentoId"];
	$idPostDocumetoCliente -> ajaxValidarIdDocumentoCliente();

}