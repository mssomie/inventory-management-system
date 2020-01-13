<?php require_once 'includes/header.php'?>
   
        
        <!-- Food Categry Area Start -->
        <div class="food-category-area pt-105 pb-70">
        <div style="position:absolute; top: 120px; margin: 0px;" class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="the_nav" href="index.php">
                <div style="height: 120px; background-color: #bbcae7 !important; text-align: center; align-items: center; vertical-align: middle; height: 90px; line-height: 90px;" class="dash-nav">
                    <h2 style="font-size: 24px; font-family: oswald, sans-serif; color: white;" >Dashboard</h3>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a class="the_nav" href="view_sales.php">
                <div style="height: 120px; background-color: #c0ae8a !important; text-align: center; align-items: center; vertical-align: middle; height: 90px; line-height: 90px;" class="dash-nav">
                    <h2 style="font-size: 24px; font-family: oswald, sans-serif; color: white;" > View Sales</h3>
            </div>
            </a>
            </div>
            <div class="col-md-3">
                <a class="the_nav" href="view_received.php">
                <div style="height: 120px; background-color: #f1bf69 !important; text-align: center; align-items: center; vertical-align: middle; height: 90px; line-height: 90px;" class="dash-nav">
                    <h2 style="font-size: 24px; font-family: oswald, sans-serif; color: white;" > View Received</h3>
                </div>
                </a>
            </div>
            
            <div class="col-md-3">
            <a class="the_nav" href="view_products.php">
                <div style="height: 120px; background-color: #eca8d7 !important; text-align: center; align-items: center; vertical-align: middle; height: 90px; line-height: 90px;" class="dash-nav">
                    <h2 style="font-size: 24px; font-family: oswald, sans-serif; color: white;" > View Products</h3>
            </div>
            </a>
        </div>

    </div>
            <div class="container text-center">
                <div class="report-card" style=" text-align: left;">
                <h2 style="font-size: 24px; font-family: oswald, sans-serif; color:#212121;" >Yearly Sales Report</h3>
                <script src="node_modules/chart.js/dist/Chart.js"></script>
                    <script>
                        var myChart = new Chart(ctx, {...});
                    </script>
                   <canvas id="myChart" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Millions of Naira',
            data: [12, 19, 3, 5, 2, 3, 11,3,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


                </div>
            </div>
            <!-- <div class="container">
                <div class="ht-food-slider row">
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/tea.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">tea</a></h4>
                            <span>(13 items)</span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/burger.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">bread</a></h4>
                            <span>(14 items)</span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/fruit.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">fruits</a></h4>
                            <span>(8 items)</span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/drinks.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">juices</a></h4>
                            <span>(11 items)</span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/vegetable.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">vegetables</a></h4>
                            <span>(11 items)</span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/tea.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.html">tea</a></h4>
                            <span>(13 items)</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container">
    <div class="row" style="padding-bottom: 50px; padding-l eft:px;">
        <div class="col-md-3">
            <a href="make_sales.php" style="color: black !important; background-color: white; border-color: #bbcae7 !important;" class="default-btn">Add Sales</a>
        </div>
        <div class="col-md-3">
            <a href="add_received.php" style="border-color: #c0ae8a !important;" class="default-btn">Add Receieved</a>
        </div>
        <div class="col-md-3">
            <a href="add_products.php" style="border-color: #f1bf69 !important;" class="default-btn">Add Product</a>
        </div>
        <div class="col-md-3">
            <a href="view_predictions.php" style="border-color: #eca8d7 !important;" class="default-btn">View Predictions</a>
        </div>
    </div>
</div>
        </div>
        
        </div>
        <!-- Food Categry Area End -->
       
        <!-- Protuct Area End -->
      
       
    <?php require_once 'includes/footer.php' ?>