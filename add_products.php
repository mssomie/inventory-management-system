<?php require_once 'includes/header.php'; ?>
        <!-- Add Product Area Start -->
        <div class="contact-area fix mb-95">
            <div style="width: 100%;" class="contact-form pt-110">
                <h1 class="contact-title">ADD NEW PRODUCT</h1>
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
                <form id="contact-form" action="addproduct.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" placeholder="Product Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="brand" id="brand" placeholder="Product Brand *" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="category" id="category" placeholder="Category" required>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="price" id="price" placeholder="Unit Price" >
                        </div>
                    </div>
                   
                    <button type="submit" class="submit-btn default-btn">
                        <span>Add Product</span>
                    </button>
                   
                </form>
            </div>
          
        </div>
       <?php require_once 'includes/footer.php'; ?>