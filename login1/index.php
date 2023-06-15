<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	 <a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?> 
</body>
</html> -->


<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N MART</title>
    <!-- code for font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- code for css linking -->
    <link rel="stylesheet" type="text/css" href="style.css">

   
    
</head>
<body>
    
    <!-- header section -->
        <header class="header" style="font-family: 'Bungee Spice' , cursive , red;">
            <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
           
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#products">Products</a>
                <a href="#categories">Category</a>
                <a href="#review">Review</a>
                <a href="#contact">Contact Us</a>
            </nav>

            <div class="icons">
                <div class="fa fa-bars" id="menu-btn"></div>
                <div class="fa fa-search" id="search-btn"></div>
                <div class="fa fa-shopping-cart" id="cart-btn"></div>
                <a href="login.php"> <div class="fa fa-user" id="login-btn"></div></a>
            </div>

            <form class="search-form">
                <input type="search" id="search-box" placeholder="search here.....">
                <label for="search-box" class="fa fa-search"></label>
            </form>

            <div class="shopping-cart">
                <div class="box">
                    <i class="fa fa-trash"></i>
                    <img src="product-3.jpg">
                    <div class="content">
                        <h3>Chicken</h3>
                        <span class="price">₹ 250/-</span>
                        <span class="quantity">Qty : 1 kg</span>
                    </div>
                </div>

                <div class="box">
                    <i class="fa fa-trash"></i>
                    <img src="cart-img-2.jpg">
                    <div class="content">
                        <h3>Onion</h3>
                        <span class="price">₹ 100/-</span>
                        <span class="quantity">Qty : 1 kg</span>
                    </div>
                </div>

                <div class="box">
                    <i class="fa fa-trash"></i>
                    <img src="a.jpg">
                    <div class="content">
                        <h3>Watermelon</h3>
                        <span class="price">₹ 100/-</span>
                        <span class="quantity">Qty : 1 kg</span>
                    </div>
                </div>
                
                <div class="total"> Total :₹ 450/-</div>
                <a href="https://buy.stripe.com/test_dR614Z1uNcP11Gw6op" class="btn">Checkout</a>

            </div>

            <!-- <form action="" class="login-form" id="login" method="post">
                <h3>Login now</h3>
                <input type="email" placeholder="Your Email" class="box" name="email">
                <input type="password" placeholder="Password" class="box" name="password">
                
                <p>Forget Your Password <a href="#">Click Here</a></p>
                <p>Don't Have An Account <a href="login1/signup.php">Create Now</a></p>

                <input type="submit" value="Login" class="btn1">
            </form> -->


			
        </header>
    <!-- header section -->
    <!--banner section-->
        <section class="home" id="home">
            <div class="content">
               
             <!--   <h3>                  Feed your family the best.
                     Visit us for better products. Shopping according to your imagination. </h3> -->
                     <a href="#" class="btn">Shop Now</a>
            </div>
        </section>
    <!--banner section-->

    <!--for features-->
        <section class="features" id="features">
            <h1 class="heading"> Our <span>Features</span></h1>

            <div class="box-container">
                <div class="box"> <img src="ab.jpg"></div>
                <h3>Fresh And Organic</h3>
                <p> Feed your family the best.
                    Visit us for better products. Shopping according to your imagination.</p>
                    <a href="#" class="btn2">Read More</a>
            </div>

            <div class="box"> <img src="delivery.jpg"></div>
               <h3>Free Delivery</h3>
                <p> Enjoy The Free And Fastest Delivery. 5 *  Rated By Our Millions of  Customers</p>
                    <a href="#" class="btn2">Read More</a>
            </div>

            <div class="box"> <img src="feature-img-3.png"></div>
               <h3>
                Easy Payment.
               </h3>
                <p> Make your Payment Prepaid And Get A Discount Of 10% Off. </p>
                    <a href="#" class="btn2">Read More</a>
            </div>
        </section>
    <!--for features-->

         <!--for products-->
            <section class="products" id="products">
                <h1 class="heading">Our <span>Products</span></h1>
                <div class="product">
                        <div class="box">
                            <img src="product-1.png">
                            <h1>Fresh Orange</h1>
                            <div class="price">200/- - 300/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class=" box">
                            <img src="product-2.png">
                            <h1>Fresh Onion</h1>
                            <div class="price">70/- - 140/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class="box">
                            <img src="product-5.png">
                            <h1>Fresh Potato</h1>
                            <div class="price">100/- - 130/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class="box">
                            <img src="product-4.png">
                            <h1>Fresh Cabbage</h1>
                            <div class="price">60/- - 100/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>
                </div>


                <div class="product">
                    
                        <div class="box">
                            <img src="cat-4.png" style="height: 10rem;">
                            <h1>Fresh Chicken Meat</h1>
                            <div class="price">200/- - 300/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class=" box">
                            <img src="product-6.png">
                            <h1>Fresh Avocado</h1>
                            <div class="price">170/- - 250/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class=" box">
                            <img src="product-7.png">
                            <h1>Fresh Carrot</h1>
                            <div class="price">100/- - 130/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                        <div class=" box">
                            <img src="product-8.png">
                            <h1>Fresh Lemon</h1>
                            <div class="price">30/- - 50/-</div>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            <a href="" class="btn2">Add To Cart</a>
                        </div>

                </div>

            </section>
          <!--for product-->

          <!--category section-->
            
          <section class="categories" id="categories">
            <h1 class="heading">Product <span>Category</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="cat-1.png">
                    <h3>Vegetables</h3>
                    <p>Upto 45% OFF</p>
                    <a href="#" class="btn1">Shop Now</a>
                </div>

                <div class="box">
                    <img src="cat-2.png">
                    <h3>Fresh Fruits</h3>
                    <p>Upto 40% OFF</p>
                    <a href="#" class="btn1">Shop Now</a>
                </div>

                <div class="box">
                    <img src="cat-3.png">
                    <h3>Dairy Prodcts</h3>
                    <p>Upto 30% OFF</p>
                    <a href="#" class="btn1">Shop Now</a>
                </div>

                <div class="box">
                    <img src="cat-4.png">
                    <h3>Fresh Meat</h3>
                    <p>Upto 55% OFF</p>
                    <a href="#" class="btn1">Shop Now</a>
                </div>

            </div>
          </section>
          <!--category section-->

           <!--category section-->
            <section class="review" id="review">
                <h1 class="heading">Customer's <span>Review</span></h1>
                <div class="review">
                    <div class="box">
                        <img src="pic-1.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut unde dolores et?
                        </p>
                        <h3>Alex</h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>

                    </div>

                    <div class="box">
                        <img src="pic-2.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut unde dolores et?
                        </p>
                        <h3>Lucci</h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        
                    </div>

                    <div class="box">
                        <img src="pic-3.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut unde dolores et?
                        </p>
                        <h3>Albert</h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        
                    </div>

                    <div class="box">
                        <img src="pic-4.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut unde dolores et?
                        </p>
                        <h3>Maria</h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        
                    </div>

                </div>
            </section>

            <!--category section-->


            <section id="contact">
                <h1 class="h-primary center">Contact Us</h1>
                    <div id="contact-box">
                        <form action="">
                            <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" name="name" id="name" required placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">EMAIL</label>
                                    <input type="email" name="name" id="name" required placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">PHONE NO</label>
                                        <input type="tel" name="name" id="name" required maxlength="10" placeholder="Enter Your Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">MESSAGE</label>
                                            <textarea name="message" id="message" cols="30" rows="2" required placeholder="message"></textarea>
                                            </div>
                                            
                                            <fieldset>
                                                <input type="submit" value="submit" class="submit">
                                            </fieldset>
                                            
                        </form>
                    </div>
            </section>
            <footer>
                <div class="center">
                    copyright &copy; www.rapidmealdelivery.com. All rights reserved|
                </div>
            </footer>



    <!-- code for js linking -->
    <script src="script.js"></script>

   
</body>
</html>