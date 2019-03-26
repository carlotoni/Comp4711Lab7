<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\CURLRequest;

use App\Models\WorkModel;

$client = new CURLRequest(
    new \Config\App(),
    new \CodeIgniter\HTTP\URI(),
    new \CodeIgniter\HTTP\Response(new \Config\App()),
    $options
);

$response = $client->request('GET', 'localhost:8080', [
    'user_input' => ['order', 'quantity', 'price']
]);

$this->input->post(array('order', 'quantity', 'price'));

function post($array)
 {
  $curl_handle = curl_init();
  curl_setopt($curl_handle, CURLOPT_URL, $this->API);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_handle, CURLOPT_POST, 1);
  curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $array);
  $buffer = curl_exec($curl_handle);
  return $buffer;
}

class Client extends Controller
{
    use ResponseTrait;

    
}