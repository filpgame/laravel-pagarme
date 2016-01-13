<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 13/01/16
 * Time: 18:38
 */

namespace Filpgame\Pagarme;


use Illuminate\Support\Facades\Facade;

class PagarmeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pagarme';
    }
}