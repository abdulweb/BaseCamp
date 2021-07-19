<?php 
	// Function to calculate  an array of positive integers
// In math, prime numbers are whole numbers greater than 1, that have only two factors – 1 and the number itself.
// Prime numbers are divisible only by the number 1 or itself.

	function PrimeNumbers($array)
		$arrayPrime = array();
		$number = 4;
		$primecheck = 0
	for ($i=0; $i <count($array) ; $i++) { 
			# code...
			if ($array[$i] > 1) {
				# code...
				for($j=2; $j < $array[$i]; $j++)
			   {
			      if($array[$i] % $j == 0)
			      {
				   $primecheck = 1; 
				   // break;
				  }
				  
				  if ($primecheck ==0) 
			    	array_push($arrayPrime, $array[$i]);
			    
			    }

			    

			}
		}
		return ($arrayPrime);
	 
	 }

?>
