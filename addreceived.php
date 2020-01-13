<?php



require_once 'config/init.php';

echo ('here');

//Escaping user inputs
 $name= trim(addslashes(strip_tags($_POST['name'])));
 $id= trim(addslashes(strip_tags($_POST['id'])));
 $quantity= trim(addslashes(strip_tags($_POST['quantity'])));
 



if(empty($name) ||empty($quantity) || empty($id)){
    
    $_SESSION['error']="please fill all required fields";
    $location= $_SERVER['HTTP_REFERER'];
    header("Location: {$location}");

}else{


 $date_created = time();
global $database;


 //inserting bits
 $sql="INSERT INTO receipt(product_id, number, date) VALUES(:id, :quantity, :date)";
 

 $result = $database->prepare($sql);
 $result->bindParam('id',$id,PDO::PARAM_INT);
 $result->bindParam('quantity',$quantity,PDO::PARAM_INT);
 $result->bindParam('date',$date_created,PDO::PARAM_INT);
 
 $result->execute();
 

 if($result->rowCount() > 0){
	 $sql2="UPDATE products set quantity = quantity+ :quantity WHERE id=:id";
	 $result2= $database->prepare($sql2);
	 $result2->bindValue('quantity', $quantity, PDO::PARAM_INT);
	$result2->bindValue('id', $id, PDO::PARAM_INT);
	$result2->execute();
	if($result2){

 	$_SESSION['success']= "Product Updated Successfully";
	$location=$_SERVER['HTTP_REFERER'];
	header("Location: {$location}");
	}else{
		$_SESSION['error']= "An error occured. Please try again";
	$location=$_SERVER['HTTP_REFERER'];
	header("Location: {$location}");
	}

}
else{
    $_SESSION['error']= "An error occured. Please try again";
	$location=$_SERVER['HTTP_REFERER'];
	header("Location: {$location}");
}
}
 	
 






?>