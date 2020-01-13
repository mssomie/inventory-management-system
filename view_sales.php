<?php require_once 'includes/header.php'; ?>

      
<?php
require_once 'config/init.php';

global $database;

$sql = "SELECT * FROM sales";

$result = $database->query($sql);




?>

        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table id="myTable" class="table product-table text-center">
                       <thead>
                            <tr>
                                <th class="table-remo ve">id</th>
                                <th class="table-image">Number of Items</th>
                                <th class="table-p-name">Total Price</th>
                                <th class="table-p-price">Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        

                            if($result->rowCount() > 0){
                               

                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['no_of_items']."</td>";
                            echo "<td>".$row['price']."</td>";
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