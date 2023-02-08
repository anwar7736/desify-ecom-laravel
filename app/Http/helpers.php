<?php
    function app_name(){
        return env('APP_NAME');
    }

    function calculateDiscount($product){
        if($product['ecom_price'] != 0 && $product['ecom_price'] != $product['variation']['default_sell_price'])
        {
             return (int)((($product['variation']['default_sell_price'] - $product['ecom_price'])/$product['variation']['default_sell_price'])*100);
        }
        else {
          return 0;
        }
      
    }

    function calculate_row_total($item)
    {
        if($item['regular_price'] > 0)
        {
             return (int) $item['quantity'] * (int) $item['regular_price'];
        }
        else{
            return (int) $item['quantity'] * (int) $item['default_price'];
        }
       
    }

    function getTotalCart()
    {
       $total_item = count(session()->get('cart', []));
   
       return $total_item;
    }
   
    function getCartItems()
    {
       return session()->get('cart', []);
    }

?>