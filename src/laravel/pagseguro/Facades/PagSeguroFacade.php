<?php

namespace laravel\pagseguro\Facades;

use laravel\pagseguro\Address\Address;
use \laravel\pagseguro\Item\Item;
use \laravel\pagseguro\Item\ItemCollection;
use \laravel\pagseguro\Payment\Payment;

/**
 * PagSeguro Facade
 * @author  Isaque de Souza <isaquesb@gmail.com>, Michael Douglas <michaeldouglas010790@gmail.com>
 */
class PagSeguroFacade
{

    /**
     * Create Address Instance
     * @param array $data
     * @return Address
     */
    public static function createAddress(array $data = [])
    {
        return new Address($data);
    }

    /**
     * Create Item Instance
     * @param array $data
     * @return Item
     */
    public static function createItem(array $data = [])
    {
        return new Item($data);
    }

    /**
     * Create Item Collection Instance
     * @param array $data
     * @return ItemCollection
     * @throws \InvalidArgumentException
     */
    public static function createItemCollection(array $data = [])
    {
        return ItemCollection::factory($data);
    }
}
