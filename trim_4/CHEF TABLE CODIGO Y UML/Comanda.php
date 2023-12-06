<?php
require_once(realpath(dirname(__FILE__)) . '/Mesero.php');
require_once(realpath(dirname(__FILE__)) . '/Cierre_Ventas.php');
require_once(realpath(dirname(__FILE__)) . '/Menú.php');

use Mesero;
use Cierre_Ventas;
use Menú;

/**
 * @access public
 * @author ONE
 */
class Comanda {
	/**
	 * @AttributeType string
	 */
	private $_numero_Orden;
	/**
	 * @AttributeType string
	 */
	private $_fecha_Comanda;
	/**
	 * @AttributeType string
	 */
	private $_platos_Ordenados;
	/**
	 * @AttributeType string
	 */
	private $_tipo_Menu;
	/**
	 * @AttributeType int
	 */
	private $_total_Pagar;
	/**
	 * @AttributeType string
	 */
	private $_numero_Mesa;
	/**
	 * @AttributeType Mesero
	 * /**
	 *  * @AssociationType Mesero
	 *  * @AssociationMultiplicity 1
	 *  * /
	 */
	public $_gENERA;
	/**
	 * @AttributeType Cierre Ventas
	 * /**
	 *  * @AssociationType Cierre Ventas
	 *  * /
	 */
	public $_unnamed_Cierre_Ventas_;
	/**
	 * @AttributeType Menú
	 * /**
	 *  * @AssociationType Menú
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_sOLICITA = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Agregar_Plato() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Eliminar_Plato() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Buscar_Plato() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Calcular_Total() {
		// Not yet implemented
	}
}
?>