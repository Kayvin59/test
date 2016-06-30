<?php 

//Spaceship operator, renvopie 0 si les 2 sont égaux, 1 si gauche est plus grand et -1 si droite est plus grand
echo 2 <=> 33;

//Null coalesce operator
/*
if(isset($_GET['id']){
	$id = $_GET['id'];
}else{
	$id = '1';
})
*/

$id = $_GET['id'] ?? '1';
echo $id;

//Type scalaire (int: on force la fct a donner un int)
function random(int $min, int $max){
	return "Random entre ".$min." et ".$max;
}
echo random(1, 37);
/*
function random(int $min, int $max) : float{
	return $min * $max;
}
echo random(1, 58.48);*/

//try catch 
try{
	echo "test";
	throw new Exception("Error Processing Request", 1);	
} catch(Exception $e){
	var_dump($e);
}

?>