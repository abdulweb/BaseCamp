<?php 
	// Function to calculate  an array of positive integers

	function arrayOfPostiveInteger($positive_integer)
	{
		$sumOfPostive = 0; $sumOfNegative = 0; $sumofArray = [];

		for ($i=0; $i < count($positive_integer); $i++) 
		{ 
			if ($positive_integer[$i] % 2 == 0) 
			{
				$sumOfPostive = $sumOfPostive + $positive_integer[$i];
			}
			else
			{
				$sumOfNegative = $sumOfNegative + $positive_integer[$i];
			}
		}

		$sumofArray [0] = $sumOfPostive;

		$sumofArray [1] = $sumOfNegative;

		return "Sum of array :". $sumofArray;
	}



// Testing above function
// $positive_integer =  array(1,2,3,4,5,6,7,8,9);
?>
