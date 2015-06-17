<?php
use Slim\Slim;

class helpers {

  static function jsonResponse( $error = true, $message = '', $data = array() ) {

    $app               = Slim::getInstance();
    $response          = new stdClass();
    $response->error   = $error;
    $response->message = $message;
    $response->data    = $data;
echo'h';
    $app->response()->header('Content-Type', 'application/json');
    return $app->response()->body( json_encode($response) );

  }

}