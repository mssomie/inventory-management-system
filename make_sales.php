<?php require_once 'includes/header.php'; ?>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

<div id='myapp'>
 
  

 

        <!-- Cart Area Start -->
        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table class="table product-table text-center">
                    <div v-on:click="allRecords" class="table-bottom-wrapper">
                        <!-- <list></list> -->
    <div class="table-coupon d-flex fix justify-content-start">
        
 
        <select  v-model="bought.item" @change='allRecords()' id="productdrop"  >
            
            <option  v-for='product in products' :value='product.id' :key='product.id' @click="addProduct(product.id)" > {{product.name}}</option>

</select>  
<input v-model="bought.quantity" type="number" name="number">

        <button v-on:click='addToCart' >Add Product</button>
    </div>
                   
                </div>
            </div>
                        <thead>
                             <tr>
                                <th class="t able-remove">remove</th>
                                <th class="table-image">product_id</th>
                                <th class="table-p-name">product</th>
                                <th class="table-p-price">price</th>
                                <th class="table-p-qty">quantity</th>
                                <th class="table-total">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="cartitem in cart">
                                <td class="table-remove"><button @click="remove(cartitem.name)"><i class="fa fa-trash"></i></button></td>
                                <td class="">{{cartitem.selectedProduct}}</td>
                                <td class="">{{cartitem.name}}</td>
                                <td style="color: #78a206;font-weight: 700; font-family: oswald">N{{cartitem.price}}</td>
                                <td class="">{{cartitem.quantity}}</td>
                                <td style="color: #78a206;font-weight: 700; font-family: oswald">N{{cartitem.total}}</td>
                                
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                
            <div class="container">
                <div class="table-total-wrapper d-flex justify-content-end pt-60">
                    <div class="table-total-content">
                 
                        <h2>Cart totals</h2>
                        <div class="table-total-amount">
                            <div class="single-total-content d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span class="c-total-price">N{{totalprice}}</span>
                            </div>
                            <div class="single-total-content d-flex justify-content-between">
                                <span>VAT(3%)</span>
                                <span class="c-total-price">N{{VAT}}</span>
                            </div>
                            
                            <div class="single-total-content d-flex justify-content-between">
                                <span>Total</span>
                                <span class="c-total-price">N{{actualTotal}}</span>
                            </div>
                            <a @click="generateReceipt">Generate Receipt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
        <!-- Cart Area End -->
        <!-- Footer Area Start
    <!-- <script src="https://unpkg.com/vue"></script>
<div id="app">

<div class="product-image">
  <img src="" />
</div>

<div class="product-info">
  <h1>{{ product + 'semester'}}</h1>
  <p>{{ description }}</p>
</div>
  
</div>  -->
<!-- fetch products from database --> -->
    <?php require_once 'includes/footer.php'; ?>
    <script src="sales.js"></script>