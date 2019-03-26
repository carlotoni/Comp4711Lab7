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
    'user_input' => ['name', 'quantity', 'price']
]);

$this->input->get(array('name', 'quantity', 'price'));

class Client extends Controller
{
    use ResponseTrait;

    
}