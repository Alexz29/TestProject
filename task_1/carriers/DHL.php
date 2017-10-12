<?php
namespace carriers;

use AbstractBaseСarrier;

/**
 * Class DHL DHL
 * @package adapters
 */
class DHL extends AbstractBaseСarrier
{
    /**
     * Имя перевозчика
     *
     * @return string
     */
    public function getName(){
        return 'DHL';
    }

    /**
     * Валюты поддерживаемые поставщиком
     *
     * @return array
     */
    public function getCurrency(){
        return [
            self::RUB
        ];
    }

    /**
     * Метод для расчета стоимости доставки в зависимости от веса.
     *
     * @param $weight
     * @return int
     * @throws \Exception
     */
    public function getPriceDelivery($weight){
        return $weight * 100;
    }
}
