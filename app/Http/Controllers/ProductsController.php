<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    const store_hash = 'ykfzqnv8mh';
    const apiKey = 'euzctswzjc9xh1luiov0jrw7bub6l56';

    public function index(){

    	$Unirest = new \Unirest\Request();

    	$url = "https://api.bigcommerce.com/stores/".$this::store_hash."/v3/catalog/products";

    	$headers = array('Accept' => 'Application/json', 'Content-Type' => 'Application/json', 'X-Auth-Token' => $this::apiKey);


    	$resp = $Unirest->get($url, $headers);

    	$response = $resp->raw_body;
    	
    	$res = json_decode($response, true);

    	return view('welcome')->with('products', $res['data']);


    }

    public function store(Request $request){


    	$data = array(
    		'name'   => $request->name,
    		'price'  => (float)$request->price,
    		'weight' => (float)$request->weight,
    		'type'   => $request->type
    	);

    	$url = "https://api.bigcommerce.com/stores/".$this::store_hash."/v3/catalog/products";

    	$headers = array('Accept' => 'Application/json', 'Content-Type' => 'Application/json', 'X-Auth-Token' => $this::apiKey);

    	$req_body = new \Unirest\Request\Body();
    	
    	// $body = response()->json($data);
    	$body = $req_body->json($data);

    	$Unirest = new \Unirest\Request();

    	$resp = $Unirest->post($url, $headers, $body);

    	// return $resp->raw_body;

    	$product = new Products;
    	$product->create($request->all());

    	return view('success');





    }
}
