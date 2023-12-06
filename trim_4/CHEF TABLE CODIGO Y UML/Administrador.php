<?php
require_once(realpath(dirname(__FILE__)) . '/proveedor.php');
require_once(realpath(dirname(__FILE__)) . '/Usuario.php');

use proveedor;
use Usuario;

/**
 * @access public
 * @author ONE
 */
class Administrador extends Usuario {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType proveedor
	 * /**
	 *  * @AssociationType proveedor
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_rEGISTRA = array();

	/**
	 * @access public
	 */
	public function Gestionar_Inventarios() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Gestionar_Personal() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function Generar_Reportes() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Registrar_Proveedores() {
		// Not yet implemented
	}
}
?>