<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function es_primo($num1){
        for ($i = 2; $i < $num1; $i++) {
            if (($num1 % $i) == 0) {
                return 'no es primo';
            }
        }
        return 'es primo';
    }
    public function amigos($num1,$num2){
        $acum1 =0;
        $acum2 =0;
        for ($i =1; $i<$num1; $i++){
            if (($num1 % $i) == 0) {
                $acum1=$acum1+$i;
            }
        }
        for ($j =1; $j<$num2; $j++){

            if ( ($num2 % $j) == 0) {
                $acum2 = $acum2 +$j;
            }
        }
        if($acum1==$num2 && $acum2==$num1){
            return 'los numeros son amigos';
        }else{
            return 'los numeros no son amigos';
        }
    }
}
