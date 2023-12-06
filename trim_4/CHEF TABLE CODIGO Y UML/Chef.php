<?php
require_once(realpath(dirname(__FILE__)) . '/Menú.php');
require_once(realpath(dirname(__FILE__)) . '/Usuario.php');

use Menú;
use Usuario;

/**
 * @access public
 * @author ONE
 */
class Chef extends Usuario {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType Menú
	 * /**
	 *  * @AssociationType Menú
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_hACE = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Crear_plato() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Modificar_Plato() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Ver_Menu() {
		// Not yet implemented
	}
}
?>