<?php

/**
 * Данный класс описывает поведение перевозчиков
 *
 * Abstract class AbstractBaseСarrier
 */
abstract class AbstractBaseСarrier
{
    //коды валют
    const RUB = 1;
    const DOLLAR = 2;
    const EURO = 3;

    /**
     * Получения имени поставщика
     *
     * @return string
     */
    abstract public function getName();

    /**
     * Получение валют в которых работает
     * данный поставщик
     *
     * @return array
     */
    abstract public function getCurrency();

    /**
     * Метод для расчета стоимости доставки в зависимости от веса.
     *
     * @param $weight
     * @return int
     * @throws \Exception
     */
    abstract public function getPriceDelivery($weight);
}