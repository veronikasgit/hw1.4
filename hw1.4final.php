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
        'Ursus arctos',
        'Erinaceus europaeus',
    ),
    'Australia' => array (
        'Vombatidae',
        'Macropus',
    ),
    'Noth America' => array (
        'Bison',
        'Gulo gulo',
    ),
    'South America' => array (
        'Folivora',
        'Cingulata',
    ),
    'Antarctica' => array (
        'Mirounga leonina',
        'Mirounga Gray',
    ),
);

$name_two_words = "";
foreach($all_animals as $continent => $animals) {
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