<?php
class Batch
{
    // used to store all consigments
    private $consigments = [];

    public function addOrder (Order $order) {
        $courier = $order->getCourier();

        // type check to avoid errors
        if (!is_a($courier, 'Courier')) {

            throw new Exception('Order returned not Courier object type.');
        }

        $consignment = new Consignment();
        $consignment->setCourier($courier);
        $consignment->setUniqueNumber($courier->generateUniqueConsignmentNumber());
        $this->consigments[] = $consignment;
    }

    function end () {
        // check if any consigments
        if (empty($this->consigments)) {

            return;
        }

        $data = [];

        // sort consigments to arrays by courier
        foreach ($this->consigments as $consigment) {
            $courier = $consigment->getCourier();
            $data[$courier->getCourierId()][] = $consigment;
        }

        foreach($data as $list) {
            $courier = $list[0]->getCourier();
            $courier->sendBatch($list);
        }
    }
}