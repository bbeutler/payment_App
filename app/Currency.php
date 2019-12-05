<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $currencyName;


    public function changeCurrency($currencyName){

    	switch ($currencyName) {
    		case 'NGN':
    			
    			$result = $currency * 485;
    			return $result;
    			break;

    		case 'KES':
    			
    			$result = $currency * 116;
    			return $result;
    			break;

    		case 'GHS':
    			
    			$result = $currency * 5.9;
    			return $result;
    			break;

    		default:
    			echo "GO GUY";
    			break;
    	}
    }
}
