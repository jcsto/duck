<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage as Storage;

trait LoggingTrait
{
    protected static $instance = null;
    
    /** call this method to get instance */
    public static function instance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
    
    /** protected to prevent cloning */
    protected function __clone()
    {
    }
    
    /** protected to prevent instantiation from outside of the class */
    protected function __construct()
    {
    }
    
    /**
     * Log Every time the duck makes an action
     *
     * @param $msg
     */
    public static function log($msg)
    {
        // Log message in file
        echo '-- Logging Message --<br/>';
        $msg .= ' ' . date('Y-m-d H:i:s');
        Storage::append('duck.log', $msg);
    }
}
