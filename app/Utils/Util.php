<?php 
namespace App\Utils;
use Illuminate\Support\Facades\Http;
class Util {
    public static function checkProductStock($id, $size="")
    {
        $response = Http::get(env('API_URL').'get_stock_qty/'.$id.'/'.$size);
        $stock = $response->json();
        return (int)$stock['qty'];
    }
}

?>