<?php
	$a = array(
	5, 
	"like"=>78, 
	"good"=>784);
	$c = array();
	$c[] = 45;
	$c[] = 854;
	$c[] = "63";
	$c[] = $a;
	$c[] = True;
	$mystere="citron";
	Les_fonction_sur_le_tableau($c,$mystere,$a);
	
	
	function Les_fonction_sur_le_tableau($tab,$b,$tab2){
		// Pour la taille
		$taille = count($tab);
		echo "LA TAILLE DU TABLEAU";
		echo '<br /> taille du tableau passe en prametre est:'.$taille;
		// LA recherche
		if(in_array($b, $tab))
		echo '<br /> Nous avons trouvez votre valeur qui est:!'.$b;
		else
		echo '<br /> La valeur est inexistante!';

		//array_search
		
		$k = array_search($b,$tab);
		echo '<br /> indice = '.$k;


		$d = array_count_values($tab2);
		echo '<pre>';
		print_r($d);
		echo '</pre>';



		//array_merge
		
		$c = array_merge($tab,$tab2);
		echo '<pre>';
		print_r($c);
		echo '</pre>';


		//array_push
		
		array_push($tab, 784, "Bupe");
		echo '<pre>';
		print_r($tab);
		echo '</pre>';
	
	//array_pop
		
		$d = array_pop($tab);
		echo '<pre>';
		print_r($tab);
		echo '</pre>';
		echo '<br /> b = '.$d;
	
	//array_unshift
		
		array_unshift($tab,"bupe");
		echo '<pre>';
		print_r($tab);
		echo '</pre>';
		
		//array_shif
		
		$d = array_shift($tab);
		echo '<pre>';
		print_r($tab);
		echo '</pre>';
		echo '<br /> b = '.$d;




	}
	
	
	
	
	
	
	
	
	
	

?>