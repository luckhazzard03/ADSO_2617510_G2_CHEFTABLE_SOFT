<?php
require_once(realpath(dirname(__FILE__)) . '/Producto.php');

use Producto;

/**
 * @access public
 * @author ONE
 */
class Categoria {
	/**
	 * @AttributeType string
	 */
	private $_nombre;
	/**
	 * @AttributeType string
	 */
	private $_cantidad_Disponible;
	/**
	 * @AttributeType string
	 */
	private $_fecha_Caducidad;
	/**
	 * @AttributeType double
	 */
	private $_precio_Unitario;
	/**
	 * @AttributeType Producto
	 * /**
	 *  * @AssociationType Producto
	 *  * @AssociationMultiplicity *
	 *  * /
	 */
	public $_pERTENECE = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Agregar_Producto() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Eliminar_Producto() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Actualizar_Disponibles_Cant() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Verificar_Fecha_Caducidad() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Calcular_Valor_Total() {
		// Not yet implemented
	}
}
?>