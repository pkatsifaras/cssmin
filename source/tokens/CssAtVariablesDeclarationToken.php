<?php
/**
 * This {@link aCssToken CSS token} represents a declaration of a @variables at-rule block.
 * 
 * @package		CssMin/Tokens
 * @link		http://code.google.com/p/cssmin/
 * @author		Joe Scylla <joe.scylla@gmail.com>
 * @copyright	2008 - 2011 Joe Scylla <joe.scylla@gmail.com>
 * @license		http://opensource.org/licenses/mit-license.php MIT License
 * @version		3.0.0
 */
class CssAtVariablesDeclarationToken extends aCssNullToken
	{
	/**
	 * Property name of the declaration.
	 * 
	 * @var string
	 */
	public $Property = "";
	/**
	 * Is the declaration flagged as important?
	 * 
	 * @var boolean
	 */
	public $IsImportant = false;
	/**
	 * Value of the declaration.
	 * 
	 * @var string
	 */
	public $Value = "";
	/**
	 * Set the properties of the @variables declaration. 
	 * 
	 * @param string $property Property of the declaration
	 * @param string $value Value of the declaration
	 * @param boolean $isImportant Is the !important flag is set?
	 * @return void
	 */
	public function __construct($property, $value, $isImportant = false)
		{
		$this->Property		= $property;
		$this->Value		= $value;
		$this->IsImportant	= $isImportant;
		}
	}
?>