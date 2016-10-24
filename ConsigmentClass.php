<?php
class Consignment
{
    private $courier;
    private $uniqueNumber;

    /**
     * @param Courier $courier
     */
    public function setCourier(Courier $courier)
    {
        $this->courier = $courier;
    }

    /**
     * @return Courier
     */
    public function getCourier()
    {

        return $this->courier;
    }

    /**
     * @param $uniqueNumber string
     */
    public function setUniqueNumber($uniqueNumber)
    {
        $this->uniqueNumber = $uniqueNumber;
    }

    /**
     * @return string
     */
    public function getUniqueNumber()
    {

        return $this->uniqueNumber;
    }
}