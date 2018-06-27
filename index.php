<?php

$all_animals = array (
    'Africa' => array (
    	'Panthera leo', 
    	'Hippotigris', 
    	'Giraffa camelopardalis',
    	'Rhinoceros bicornis', 
    	'Hippopotamus amphibius',
    ),
    'Europe' => array (
    	'Ursus arctos'
    ),
    'Australia' => array (
    	'Vombatidae',
    ),
    'Noth America' => array (
    	'Bison',
    ),
    'South America' => array (
    	'Folivora',
    ),
    'Antarctica' => array (
    	'Mirounga leonina',
    ),
);

$name_two_words = "";
foreach($all_animals as $animals) {

    if(is_array($animals)) {
	foreach($animals as $animal) {
		$animals_list = array();
                $anim = explode(' ', $animal);
                $animals_list[]=$anim;	

 foreach($animals_list as $words){
                    if(count($words) === 2){
                    $name_two_words[]= implode(" ", $words);
}	
                }
       
        }

    }
   
}
foreach($name_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

shuffle($first);
shuffle($second);

 
for($i = 0; $i < count($name_two_words); $i++){
    $final_result[]= $first[$i]. ' ' . $second[$i];  
}
 
echo '<pre>';
print_r($final_result);
?>