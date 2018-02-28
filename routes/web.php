<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    phpinfo();
});

Route::get('/teste', function () {
    $opts = array(
        'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
    );

    $params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false,
        'soap_version' => SOAP_1_1, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180,
        'stream_context' => stream_context_create($opts) );
    $url = asset('http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl');

    try{
        $client = new SoapClient($url,$params);
        //dd($client->ObterDeputados());
        libxml_use_internal_errors(true);

        $retorno = $client->ObterDeputados()->ObterDeputadosResult;

        $DeputadosObj = simplexml_load_string('<xml>'.$retorno->any.'</xml>');
        $json  = json_encode($DeputadosObj);
        $listDeputados = json_decode($json, true);
        $CollectDeputados = collect($listDeputados['deputados']['deputado']);
        $deputadosSort = $CollectDeputados->sortBy('nome');

        foreach ($deputadosSort as $item){
            //print_r($item).'<br />';
            echo $item['ideCadastro']. ' - ' .$item['nome'] .'<br />';
        }







        /*$test = (($retorno->any));
        //var_dump($test);
        $doc = new DOMDocument();
        echo $doc->saveXML($doc->createTextNode($test));*/


    }catch (SoapFault $fault){
        echo '<br />'.$fault;
    }
    //return view('teste');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/grupos', 'GruposController@index')->name('grupos');
Route::get('/planilha', 'PlanilhaController@index')->name('planilha');


