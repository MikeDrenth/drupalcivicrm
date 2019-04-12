<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Core/Timezone.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e54363ef08090c4dfbed076c842edd03)
 */

/**
 * Database access object for the Timezone entity.
 */
class CRM_Core_DAO_Timezone extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_timezone';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * Timezone Id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Timezone full name
   *
   * @var string
   */
  public $name;

  /**
   * ISO Code for timezone abbreviation
   *
   * @var string
   */
  public $abbreviation;

  /**
   * GMT name of the timezone
   *
   * @var string
   */
  public $gmt;

  /**
   * @var int
   */
  public $offset;

  /**
   * Country Id
   *
   * @var int unsigned
   */
  public $country_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_timezone';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'country_id', 'civicrm_country', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Timezone ID'),
          'description' => ts('Timezone Id'),
          'required' => TRUE,
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Timezone Name'),
          'description' => ts('Timezone full name'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
        ],
        'abbreviation' => [
          'name' => 'abbreviation',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Timezone Abbreviation'),
          'description' => ts('ISO Code for timezone abbreviation'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
        ],
        'gmt' => [
          'name' => 'gmt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('GMT Name of Timezone'),
          'description' => ts('GMT name of the timezone'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
        ],
        'offset' => [
          'name' => 'offset',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('GMT Offset'),
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
        ],
        'country_id' => [
          'name' => 'country_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Country'),
          'description' => ts('Country Id'),
          'required' => TRUE,
          'table_name' => 'civicrm_timezone',
          'entity' => 'Timezone',
          'bao' => 'CRM_Core_DAO_Timezone',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Country',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'timezone', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'timezone', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
