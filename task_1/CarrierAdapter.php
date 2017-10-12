<?php

/**
 * Class CarrierAdapter
 * @package app
 */
class CarrierAdapter extends AbstractBaseСarrier
{
    /**
     * @var AbstractBaseСarrier
     */
    protected $carrier;

    /**
     * CarrierAdapter constructor.
     * @param AbstractBaseСarrier $carrier
     * @param int $currencyCode
     * @throws Exception
     */
    public function __construct(AbstractBaseСarrier $carrier, $currencyCode=self::RUB){
        $this->carrier = $carrier;

        if (!in_array($currencyCode, $carrier->getCurrency()))
            throw new \Exception('this currency is not supported, parameter currencyCode wrong.');
    }

    /**
     * Получения имени перевозчика
     *
     * @return string
     */
    public function getName(){
        return $this->carrier->getName();
    }

    /**
     * Получение валют в которых работает перевозчик
     *
     * @return array
     */
    public function getCurrency(){
        return $this->carrier->getCurrency();
    }


    /**
     * Метод для расчета стоимости доставки в зависимости от веса.
     *
     * @param $weight
     * @return int
     * @throws \Exception
     */
    public function getPriceDelivery($weight){
        return $this->carrier->getPriceDelivery($weight);
    }
}