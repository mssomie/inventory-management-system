<?php require_once 'includes/header.php'; ?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<?php
require_once 'config/init.php';

global $database;

$sql = "SELECT * FROM products";

$result = $database->query($sql);




?>

        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table id="myTable" class="table product-table text-center">
                    <input style="width: 100%; height: 66px; font-size: 18px;  font-family: Poppins, sans-serif;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for product names..">
                        <thead>
                            <tr>
                                <th class="table-remo ve">id</th>
                                <th class="table-image">Name</th>
                                <th class="table-p-name">Category</th>
                                <th class="table-p-price">Brand</th>
                                <th class="table-p-qty">Quantity</th>
                                <th class="table-total">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            if($result->rowCount() > 0){
                                $i=1;

                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['category']."</td>";
                            echo "<td>".$row['brand']."</td>";
                            echo "<td>".$row['quantity']."</td>";
                            echo "<td>".$row['price']."</td>";
                            
                            $i++;
                            echo "</tr>";
                            }
                            }else{
                                echo '<h3> No Products Found </h3>';
                            }




                    ?>

                        </tbody>
                    </table>
                </div>
               
           
        <!-- Footer Area Start -->
    <?php require_once 'includes/footer.php'; ?>