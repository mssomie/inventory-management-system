<?php require_once 'config/init.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Avery Super Stores -Inventory Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ie7.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <style>
        #productdrop{
            style="background: #f6f5f1;
    border: 1px solid #e1e1e1;
    color: #7b7b7b;
    font-size: 14px;
    height: 50px;
    line-height: 49px;
    padding: 0 20px;
    width: 300px;
    box-shadow: 0 1px 0 0 #ffffff;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;"
        }
            .report-card{
                border-radius: 3%;
                padding: 16px !important;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                padding-top: 20px !important;
                padding-bottom: 20px !important;
                padding-left: 10px !important;
                padding-right: 5px !important;
                margin-left: 10px;
                width: 100%;
                background-color: white;
                font-family: lora, serif;
                font-size: 24px;
                margin-bottom: 20px;
            }
            h1,h2, h3, h4, h5, h6, p{
                font-family: "Oswald", sans-serif;
            }
            .the_nav{
                width: 100%;
                padding: 0px;
                margin: 0px;
                padding-left: 15px;
            }
            .dash-nav{
                border-radius: 3%;
                padding: 16px !important;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                padding-top: 20px !important;
                padding-bottom: 20px !important;
                padding-left: 10px !important;
                padding-right: 5px !important;
                margin-left: 10px;
            
                background-color: white;
                font-family: lora, serif;
                font-size: 24px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        
        <!-- Header Area Start -->
        <header class="header-area header-sticky">
            <div class="header-container">
                <div class="row">
                    <div class="col-lg-5 display-none-md display-none-xs">
                        <div class="ht-main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">Dashboard </a>
                                      
                                    </li>
                                    <li><a href="make_sales.php">Make Sales</a>
                                        
                                    </li>
                                    <li><a href="add_received.php">Add Received</a>
                                       
                                    </li>
                                    <li><a href="add_products.php">Add Product </a>
                                       
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="logo text-center">
                            <a href="index.php"><img src="assets/img/logo/avery.png" alt="Avery Superstores"></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 display-none-md display-none-xs">
                        <div class="ht-main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="products.php">View Products </a>
                                      
                                    </li>
                                    <li><a href="view_sales.php">Sales History</a>
                                        
                                    </li>
                                    <li><a href="view_received.php">Received History</a>
                                       
                                    </li>
                                    <li><a href="#">View Predictions </a>
                                       
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                           
                </div>
            </div>
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="mobile-menu container">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">Dashboard</a>
                               
                            </li>
                            <li><a href="make_sales.php">Make Sales</a>
                              
                            </li>
                            <li><a href="add_received.php">Add Received</a>
                                
                            </li>
                            <li><a href="add_products.php">Add Product</a>
                                
                            </li>
                            <li><a href="view_products.php">View Products</a>
                                
                            </li>
                            <li><a href="view_sales.php">Sales History</a>
                                
                            </li>
                            <li><a href="view_received.php">Received History</a>
                                
                            </li>
                        </ul>
                    </nav>							
                </div>
            </div>
            <!-- Mobile Menu Area End -->
            <!--Start of Login Form-->
            <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Login to your account</h2>
								<form action="#" method="post">
									<div class="form-box">
										<input type="text" placeholder="User Name" name="username">
										<input type="password" placeholder="Password" name="pass">
									</div>
									<div class="checkobx-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
									    </div>
									    <div class="right-col"><a href="#">Forget Password?</a></div>
									</div>
								    <button type="submit">Sign In</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Login Form-->
            <!--Start of Register Form-->
            <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Sign Up</h2>
								<form action="#" method="post">
									<div class="form-box">
										<input type="text" placeholder="Full Name" name="fullname">
										<input type="text" placeholder="User Name" name="username">
										<input type="email" placeholder="Email" name="email">
										<input type="password" placeholder="Password" name="pass">
										<input type="password" placeholder="Confirm Password" name="re_pass">
									</div>
									<div class="checkobx-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_reg"><label for="remember_reg">Remember Me</label>
									    </div>
									</div>
								    <button class="text-uppercase" type="submit">Register</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Register Form-->
        </header>
        <!-- Header Area End -->
