<?php


//caso o caminho esteja hospedado no próprio servidor
//coloque o ficheiro no caminho: 'public/assets/xml/file.xml'
$opts = array(
    'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
);

$params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false,
    'soap_version' => SOAP_1_2, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180,
    'stream_context' => stream_context_create($opts) );
$url = asset('http://www.camara.gov.br/SitCamaraWS/Deputados.asmx?wsdl');

try{
    $client = new SoapClient($url,$params);
    dd($client->ObterDeputados());

}catch (SoapFault $fault){
    echo '<br />'.$fault;
}

/*
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_TIMEOUT => 90000,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        // Set Here Your Requesred Headers
        'Content-Type: application/json',
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

//$data = file_get_contents($url);
$xml = simplexml_load_string($response);
//dd($response);

dd($xml);*/


