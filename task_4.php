<?php 

	function validatePassword($password){
		$string = preg_match('@[a-z]@', $password);
		$number = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);

		if (strlen($password)) {
			return " Password should be at least 8 characters in length";
		}
		elseif ($string && $number & $specialChars) {
			return 3;
		}
		elseif ($string && $number) {
			return 2;
		}
		elseif ($number) {
			return 1;
		}
		else
			return 0;
	}

?>
