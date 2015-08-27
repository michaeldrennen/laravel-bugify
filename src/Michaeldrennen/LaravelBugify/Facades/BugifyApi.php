<?php
namespace Michaeldrennen\LaravelBugify\Facades;

use Illuminate\Support\Facades\Facade;

class BugifyApi extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'bugify_api'; }

}