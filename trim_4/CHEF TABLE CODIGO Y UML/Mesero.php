<?php
require_once(realpath(dirname(__FILE__)) . '/Comanda.php');
require_once(realpath(dirname(__FILE__)) . '/Usuario.php');

use Comanda;
use Usuario;

/**
 * @access public
 * @author ONE
 */
class Mesero extends Usuario {
	/**
	 * @AttributeType int
	 */
	private $_iD;
	/**
	 * @AttributeType int
	 */
	private $_numero_Mesas_Asignadas;
	/**
	 * @AttributeType string
	 */
	private $_numero_Comanda;
	/**
	 * @AttributeType Comanda
	 * /**
	 *  * @AssociationType Comanda
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_gENERA = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Tomar_Orden() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Entregar_Orden() {
		// Not yet implemented
	}
}
?>