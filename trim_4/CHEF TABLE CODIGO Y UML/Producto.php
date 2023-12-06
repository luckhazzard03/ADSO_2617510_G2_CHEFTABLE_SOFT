<?php
require_once(realpath(dirname(__FILE__)) . '/Menú.php');
require_once(realpath(dirname(__FILE__)) . '/Categoria.php');

use Menú;
use Categoria;

/**
 * @access public
 * @author ONE
 */
class Producto {
	/**
	 * @AttributeType string
	 */
	private $_codigo;
	/**
	 * @AttributeType string
	 */
	private $_stock;
	/**
	 * @AttributeType string
	 */
	private $_tipo_Insumo;
	/**
	 * @AttributeType string
	 */
	private $_nombre;
	/**
	 * @AttributeType Menú
	 * /**
	 *  * @AssociationType Menú
	 *  * @AssociationMultiplicity 1
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_tIENE;
	/**
	 * @AttributeType Categoria
	 * /**
	 *  * @AssociationType Categoria
	 *  * @AssociationMultiplicity 1
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_pERTENECE;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Genera_Alerta_Faltantes() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Agrega_Ingrediente() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Buscar_Ingrediente() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Eliminar_Ingrediente() {
		// Not yet implemented
	}
}
?>