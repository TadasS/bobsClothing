<?php
interface Order
{
    /**
     * @return Courier;
     */
    public function getCourier();
}