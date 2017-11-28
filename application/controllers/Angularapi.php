<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . 'libraries\REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;
/**
*
* @package         CodeIgniter
* @subpackage      Rest Server
* @category        Controller

 */
Class Angularapi extends REST_Controller {

	function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
    	
    }
    public function index_get()
    {
      $this->set_response(['status' => FALSE,'message' => 'Data will be pass through POST method'], REST_Controller::HTTP_OK);

    }

     public function index_post()
    {

        $request_id = (int) $this->post('request_id');
       
          $params = new stdClass();
         switch($request_id)
         {
              // request_id 0 bad request 
               case 0:
               $this->set_response(['response' => 201,'message' => 'BAD REQUEST'], REST_Controller::HTTP_OK); 
               break;
               // login 

           }
       }
}
