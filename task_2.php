<?php 
	// Function to calculate  an array of positive integers
// In math, prime numbers are whole numbers greater than 1, that have only two factors – 1 and the number itself.
// Prime numbers are divisible only by the number 1 or itself.

	function PrimeNumbers($positveInteger)
	{
		$primecheck = 0;
		if ($positveInteger > 0) 
		{
			// Since prime numbers are numbers that is greater than 1, that have only two factors – 1 and the number itself, So will loop from 2
			
			for($i=2; $i < $positveInteger; $i++)
			   {
			      if($positveInteger % $i == 0)
			      {
				   $primecheck = 1; 
				   break;
				  }
				  // else echo "true";
			    }

			    if ($primecheck ==0) {
			    	echo "true";
			    }
			    else
			    	echo "False";
			
			  
		}
		else
		{
			return "Number is not a positive integer.";
		}
	 
	 }

// Testing to check above function
// $positveInteger = 11;
// $primecheck = 0;
// if ($positveInteger > 0) 
// 		{
			
// 			// Since prime numbers are numbers that is greater than 1, that have only two factors – 1 and the number itself, So will loop from 2
// 			for($i=2; $i < $positveInteger; $i++)
// 			   {
// 			      if($positveInteger % $i == 0)
// 			      {
// 				   $primecheck = 1; 
// 				   break;
// 				  }
// 				  // else echo "true";
// 			    }

// 			    if ($primecheck ==0) {
// 			    	echo "true";
// 			    }
// 			    else
// 			    	echo "False";
// 			    // 
			  
// 		}
// 		else
// 		{
// 			return "Number is not a positive integer.";
// 		}

?>
