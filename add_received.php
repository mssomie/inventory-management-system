<?php require_once 'includes/header.php'; ?>
        <!-- Contact Area Start -->
<?php        
global $database;

$sql = "SELECT * FROM products";

$result = $database->query($sql);




?>



        <div class="contact-area fix mb-95">
            <div style="width: 100%;" class="contact-form pt-110">
                <h1 class="contact-title">ADD RECEIVED ITEM</h1>
                <?php if(isset($_SESSION['success']) || !empty($_SESSION['success'])){

echo '<!-- start message box item -->
<div class="alert alert-success alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>'.$_SESSION['success'].'</strong> 
</div>
<!-- end message box item -->';

unset($_SESSION['success']);

} ?>



<?php if(isset($_SESSION['error']) || !empty($_SESSION['error'])){

echo '<!-- start message box item -->
<div class="alert alert-danger alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>'.$_SESSION['error'].'</strong> 
</div>
<!-- end message box item -->';

unset($_SESSION['error']);

} ?>
                <form class="contact-form" id="contact-form" action="addreceived.php" method="post" >
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" name="id" id="id" placeholder="Product ID" readonly>
                        </div>
                        <div class="col-md-7">
                            <!-- <input type="text" name="l_name" id="l_name" placeholder="Last Name *"> -->
                            <select style="height: 46px; width: 100%; background-color: #fbfbfb; margin: 0 0 20px; padding: 0 15px; " onchange="setID(event)" name="name" id="name" required>
                            <option value=''> Select a Product</option>
                            <?php
                            if($result->rowCount() > 0){
                           
                            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value='".$row['id']."'>". $row['brand'].' '. $row['name']."</option>";
                            }
                        }
                                ?>
                                    
                            </select>
                           
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
                        </div>
                        <button type="submit" class="submit-btn default-btn" >
                        <span>Add Received Product</span>
                    </button>
                    </div>
                    
                   
                    
                </form>
            </div>
          
        </div>
       <?php require_once 'includes/footer.php'; ?>
       <script>
       function reset(){
        $('#name').val("");
       }
       function submit(){
           console.log('supposed to submit');
           document.getElementById("contact-form").submit();// Form submission
       }
                            function setID(e){
                                
                                document.getElementById('id').value=e.target.value;
                            }
                            
                            </script>