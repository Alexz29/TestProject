<?php
namespace carriers;

use AbstractBaseСarrier;

/**
 * Class PostOfRussia Почта россии
 * @package adapters
 */
class PostOfRussia extends AbstractBaseСarrier{

    /**
     * Имя перевозчика
     *
     * @return string
     */
    public function getName(){
        return 'Почта россии';
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
        return ($weight<= 10) ? 100: 1000;
    }
}