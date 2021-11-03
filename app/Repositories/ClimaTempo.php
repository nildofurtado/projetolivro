<?php
namespace App\Repositories;
use Illuminate\Support\Facades\Http;

class ClimaTempo
{
    public function local()
    {
        $response = Http::get('https://api.hgbrasil.com/weather?key=250f65f9&user_ip=remote');
        $retorno = json_decode($response);

        $json_dados =
        array(
            'temp'=>$retorno->results->temp ,
            'description' => $retorno->results->description,
            'img_id' => $retorno->results->img_id);
        return $json_dados;
    }
}