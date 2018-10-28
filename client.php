<?php 

require 'vendor/autoload.php';
Predis\Autoloader::register();

try {    
    /**
     * Create new redis client and connect to redis
     * @var Ambiguous $redis
     */
    $redis = new Predis\Client(array(
        "scheme" => "tcp",
        "host" => "127.0.0.1",
        "port" => 6379
    ));
    
    // set key "message" to value "hello world"
    $redis->set('message', 'Hello world');
    
    // get value of key "Message"
    $value = $redis->get('message');
    
    // print value
    echo print($value);
    
} catch (Exception $e) {
    die($e->getMessage());
}

?>