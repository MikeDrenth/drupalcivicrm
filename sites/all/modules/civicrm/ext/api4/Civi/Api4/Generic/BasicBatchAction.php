<?php

namespace Civi\Api4\Generic;

/**
 * Basic action for deleting or performing some other task with a set of records.  Ex:
 *
 * $myAction = new BasicBatchAction('Entity', 'action', function($item) {
 *   // Do something with $item
 *   $return $item;
 * });
 *
 * @package Civi\Api4\Generic
 */
class BasicBatchAction extends AbstractBatchAction {

  /**
   * @var callable
   *
   * Function(array $item, BasicBatchAction $thisAction) => array
   */
  private $doer;

  /**
   * BasicBatchAction constructor.
   *
   * @param string $entityName
   * @param string $actionName
   * @param string|array $select
   *   One or more fields to select from each matching item.
   * @param callable $doer
   *   Function(array $item, BasicBatchAction $thisAction) => array
   */
  public function __construct($entityName, $actionName, $select = 'id', $doer = NULL) {
    parent::__construct($entityName, $actionName, $select);
    $this->doer = $doer;
  }

  /**
   * We pass the doTask function an array representing one item to update.
   * We expect to get the same format back.
   *
   * @param \Civi\Api4\Generic\Result $result
   */
  public function _run(Result $result) {
    foreach ($this->getBatchRecords() as $item) {
      $result[] = $this->doTask($item);
    }
  }

  /**
   * This Basic Batch class can be used in one of two ways:
   *
   * 1. Use this class directly by passing a callable ($doer) to the constructor.
   * 2. Extend this class and override this function.
   *
   * Either way, this function should return an array with an output record
   * for the item.
   *
   * @param array $item
   * @return array
   */
  protected function doTask($item) {
    return call_user_func($this->doer, $item, $this);
  }

}
