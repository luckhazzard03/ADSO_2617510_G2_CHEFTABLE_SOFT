<?php
require_once(realpath(dirname(__FILE__)) . '/Chef.php');
require_once(realpath(dirname(__FILE__)) . '/Producto.php');
require_once(realpath(dirname(__FILE__)) . '/Comanda.php');

use Chef;
use Producto;
use Comanda;

/**
 * @access public
 * @author ONE
 */
class Menú {
	/**
	 * @AttributeType string
	 */
	private $_tipo;
	/**
	 * @AttributeType string
	 */
	private $_descripción_Menu;
	/**
	 * @AttributeType double
	 */
	private $_precio;
	/**
	 * @AttributeType Chef
	 * /**
	 *  * @AssociationType Chef
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_hACE;
	/**
	 * @AttributeType Producto
	 * /**
	 *  * @AssociationType Producto
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_tIENE = array();
	/**
	 * @AttributeType Comanda
	 * /**
	 *  * @AssociationType Comanda
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_sOLICITA;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Disponibilidad_Menu() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Agregar_Menu() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Eliminar_Menu() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Modificar_Precio() {
		// Not yet implemented
	}
}
?>