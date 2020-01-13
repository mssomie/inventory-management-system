<?php require_once 'includes/header.php'; ?>

      
<?php
require_once 'config/init.php';

global $database;

    




            
            
    $sql= "SELECT c.*, s.name AS product_name, s.brand AS brand from receipt c  LEFT JOIN products s ON (c.product_id=s.id) ";
    $result = $database->query($sql);         




?>

        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table id="myTable" class="table product-table text-center">
                       <thead>
                            <tr>
                                <th class="table-remo ve">ID</th>
                                <th class="table-image">Product ID</th>
                                <th> Product Name</th>
                                <th> Brand</th>
                                <th class="table-p-name">Quantity</th>
                                <th class="table-p-price">Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        

                            if($result->rowCount() > 0){
                               

                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['product_id']."</td>";
                            echo "<td>".$row['product_name']."</td>";
                            echo "<td>".$row['brand']."</td>";
                            echo "<td>".$row['number']."</td>";
                            echo "<td>".date('Y-m-d H:i:s', $row['date'])."</td>";
                           
                            echo "</tr>";
                            }
                            }else{
                                echo '<h3> No Sales Yet </h3>';
                            }




                    ?>

                        </tbody>
                    </table>
                </div>

    <?php require_once 'includes/footer.php'; ?>