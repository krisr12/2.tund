<?php

	$age = 5;
	
	if ($age < 18) {
		
		//true-on väikesem kui 18
		echo "alaealine";
		
	} else {
		//muul juhul
		echo "t2isealine";
		
	}

?>

<br>

<?php

	for ($i=1; $i <= $age; $i = $i + 1) {
		
		echo  $i."palju ";
		
	}
	
	echo "6nne!";
?>

<br>

<?php

echo date("G:i.s t. m. Y");

?>