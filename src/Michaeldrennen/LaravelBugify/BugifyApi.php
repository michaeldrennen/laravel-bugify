<?php
// http://docs.guzzlephp.org/en/latest/quickstart.html
namespace Michaeldrennen\LaravelBugify;

use /** @noinspection PhpUndefinedNamespaceInspection */
    GuzzleHttp\Client;

use /** @noinspection PhpUndefinedNamespaceInspection */
    GuzzleHttp\Psr7\Request;


/**
 * Class Spider
 * @package Dprc\Spider
 */
class BugifyApi {
    protected $client = null;
    protected $cookie_jar = null;

    /**
     *
     */
    public function __construct() {
        $this->client = new Client([// Base URI is used with relative requests
                                    //'base_uri' => 'fims.deerparkrd.com',
                                    // You can set any number of default request options.
                                    //'timeout'  => 2.0,
                                    //'cookies' => true
        ]);

        $this->cookie_jar = new \GuzzleHttp\Cookie\CookieJar();
    }



    public static function greeting(){
        return "What up dawg";
    }

}