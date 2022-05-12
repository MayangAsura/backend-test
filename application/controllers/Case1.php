<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case1 extends CI_Controller {

    function __construct()
	{
		parent::__construct();
       
	}

    public function index(){
        
        
    }

    public function two_odd_primes($number){


        // echo "masuk";
        $single_prime = [2, 3, 5, 7];
        $diff = [];

        foreach ($single_prime as $key => $val) {
            
            $sisa = $number - $val;
            $diff = [];
            
            
            if($sisa>0 && is_prime($sisa)){
                array_push($diff, $val - $sisa);

            }else{
                continue;
            }

        }

        return max($diff);
    }

    // number=> 

    public function is_prime(){
        
        $temp = 0;
        for($i = 1; $i<=$n; $i++){
          if($n % $i == 0)$temp++;
        }
      
        return $temp>2? false : true;
    }
}