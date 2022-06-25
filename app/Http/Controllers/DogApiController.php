<?php



namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class DogApiController extends BaseController{

    public function dogApi(){
        $api_key = env('api_key');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.thedogapi.com/v1/breeds');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('x-api-key: '.$api_key));

        $result=curl_exec($curl);
        curl_close($curl);
        return $result;

    }
}
?>