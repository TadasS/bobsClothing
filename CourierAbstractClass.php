<?php
abstract class Courier
{
    /**
     * @return integer Unique courier ID
     */
    abstract function getCourierId();

    /**
     * @return string Unique consigment number, must not repeat
     */
    abstract function generateUniqueConsignmentNumber();

    /**
     * @param $list array of consigment's assigned to this courier
     */
    abstract function sendBatch($list);
}