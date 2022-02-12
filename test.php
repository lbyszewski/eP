<?php
	$zmiennaA = $_POST['one'];
	$zmiennaB = $_POST['two'];
	
	
	if($zmiennaA<=$zmiennaB){
		$zmiennaC = $_POST['tree'];
		for($i = $zmiennaA; $i<=$zmiennaB;$i++){
			if($i % $zmiennaC == 0){
				echo ('<table border="1">' . '<tr>' . '<th>' . $i . '</th>' . '</tr>' . '</table>');
			}
			
		}
		
	}

    

?>


