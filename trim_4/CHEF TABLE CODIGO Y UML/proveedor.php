<?php
require_once(realpath(dirname(__FILE__)) . '/Administrador.php');

use Administrador;

/**
 * @access public
 * @author ONE
 */
class proveedor {
	/**
	 * @AttributeType string
	 */
	private $_nombre;
	/**
	 * @AttributeType string
	 */
	private $_telefono;
	/**
	 * @AttributeType string
	 */
	private $_correo_Electronico;
	private $_productos__Suministrados;
	/**
	 * @AttributeType Administrador
	 * /**
	 *  * @AssociationType Administrador
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_unnamed_Administrador_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Gestionar_Suministros() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Verificar_Disponibilidad() {
		// Not yet implemented
	}
}
?>