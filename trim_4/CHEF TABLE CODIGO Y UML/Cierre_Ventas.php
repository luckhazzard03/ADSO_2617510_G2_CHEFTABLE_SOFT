<?php
require_once(realpath(dirname(__FILE__)) . '/Comanda.php');

use Comanda;

/**
 * @access public
 * @author ONE
 */
class Cierre_Ventas {
	/**
	 * @AttributeType string
	 */
	private $_fecha_Venta;
	/**
	 * @AttributeType int
	 */
	private $_venta_Mes;
	/**
	 * @AttributeType boolean
	 */
	private $_total_VentaMes;
	/**
	 * @AttributeType string
	 */
	private $_lista_Comandas_Venta;
	/**
	 * @AttributeType double
	 */
	private $_total_Venta_Dia;
	/**
	 * @AttributeType Comanda
	 * /**
	 *  * @AssociationType Comanda
	 *  * /
	 */
	public $_unnamed_Comanda_;

	/**
	 * @access public
	 * @param aBoolean
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function Calcular_Cierre_Mes($aBoolean) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aString
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function Generar_Reporte($aString) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return double
	 * @ReturnType double
	 */
	public function Generar_Cierre_Dia() {
		// Not yet implemented
	}
}
?>