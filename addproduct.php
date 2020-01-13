<?php



require_once 'config/init.php';



//Escaping user inputs
 $name= trim(addslashes(strip_tags($_POST['name'])));
 $brand= trim(addslashes(strip_tags($_POST['brand'])));
 $quantity= trim(addslashes(strip_tags($_POST['quantity'])));
 $price= trim(addslashes(strip_tags($_POST['price'])));
 $category= trim(addslashes(strip_tags($_POST['category'])));



if(empty($name) || empty($brand) || empty($quantity) || empty($price) || empty($category)){
    
    $_SESSION['error']="please fill all required fields";
    $location= $_SERVER['HTTP_REFERER'];
    header("Location: {$location}");

}else{


 $date_created = time();
global $database;


 //inserting bits
 $sql="INSERT INTO products(name, brand, category, quantity, price) VALUES(:name, :brand, :category, :quantity, :price)";
 

 $result = $database->prepare($sql);
 $result->bindParam('name',$name,PDO::PARAM_STR);
 $result->bindParam('brand',$brand,PDO::PARAM_STR);
 $result->bindParam('category',$category,PDO::PARAM_STR);
 $result->bindParam('quantity',$quantity,PDO::PARAM_INT);
 $result->bindParam('price',$price,PDO::PARAM_INT);

 
 $result->execute();



 if($result->rowCount() > 0){

 	$_SESSION['success']= "Product Added Successfully";
	$location=$_SERVER['HTTP_REFERER'];
	header("Location: {$location}");

}
else{
    $_SESSION['error']= "An error occured. Please try again";
	$location=$_SERVER['HTTP_REFERER'];
	header("Location: {$location}");
}
}
 	
 






?>