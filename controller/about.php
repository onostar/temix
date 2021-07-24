<?php
    require "server.php";
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temix Empire is a Catering Company, we are Specialized in Cakes of all kinds Like Wedding cakes, Birthday cakes, Anniversary cakes, chcocolate cakes, Coconut Cakes, Banana cakes and many others. We also provide Make-up service for weddings, Party, Birthdays and Photo Shoot, we supply quality beddings for Hotels, Schools, Hospitals and Homes. We also specialize in Event Planning, Decorations for all Occations, Fashionable Beads, and Graphic Designs. Temix Empire always serve up Quality of Service you can trust">
    <meta name="keywords" content="cakes, beddings, wedding cakes, birthday cakes, decorations, weddings, makeup, make-up, make-up artiste, event planning, events, chcocolate cakes, icing">
    <title>
        <?php
            $user_info = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
            $user_info->bindvalue('email', $user);
            $user_info->execute();
            $view = $user_info->fetch();
            echo $view->first_name . " " . $view->last_name. " - About";
        ?>
    </title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="../images/temix_empire_logo1.jpg" size="32X32">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <a href="javascript:void(0);" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook"></i></a>   
            <!-- <a href="javascript:void(0);" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a> -->   
            <a href="javascript:void(0);" target="_blank" title="Follow us on instagram"><i class="fab fa-instagram"></i></a>   
            <a href="javascript:void(0);" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin"></i></a>   
            <a href="https://wa.me/2348157985866" target="_blank" title="Follow us on whatsapp"><i class="fab fa-whatsapp"></i></a>   
        </div>
        <div class="contact_phone">
            <button class="appointment" id="bookings">Book Appointment</button>
            <p class="text-right"><i class="fas fa-mobile-alt"></i> <span class="call">Call us: </span> +2347041350926</p>
        </div>
    </section>
    <header>
        <h1 class="logo">
            <a href="main.php" title="Temix Empire">
                <img src="../images/temix_empire_logo1.jpg" alt="Temix Empire" class="img-fluid">
            </a>
        </h1>
        <div class="search">
            <form class="form-inline" action="search_result.php" method="POST">
                <input type="search" name="search_items" placeholder="search food, restaurant, items">
                <button type="submit" name="search" class="main_searchbtn">Search</button>
                <button type="submit" name="search" class="mobilesearchbtn" ><i class="fas fa-search"></i></button>
            </form>
            
        </div>
        <div class="other_menu">
            <a href="gallery.php" title="Our Gallery">Gallery</a>
        </div>
        <div class="login">
            <button id="loginDiv"><i class="far fa-user"></i> 
                <?php 
                    $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                    $statement->bindvalue('email', $user);
                    $statement->execute();
                    $infos = $statement->fetchAll();
                    foreach($infos as $info){
                        echo "Hello $info->first_name";
                    }
                      
                ?> 
                <i class="fas fa-chevron-down"></i></button>
            <div class="login_option" id="account">
                <div>
                    <a href="account.php" class="signupBtn">My Account</a>
                    <a href="order_history.php" class="signupBtn">My orders</a>
                    <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                    
                </div>
            </div>
        </div>
        <div class="cart">
            <a href="shopping_cart.php" title="view cart"><i class="fas fa-shopping-cart"></i> Cart <span id="cart_value">
                <?php
                    $cart_num = $connectdb->prepare("SELECT * FROM cart WHERE customer_email = :customer_email");
                    $cart_num->bindvalue('customer_email', $user);
                    $cart_num->execute();

                    if($cart_num->rowCount() > 0){
                        echo $cart_num->rowCount();
                    }else{
                        echo "0";
                    }
                ?>
            </span></a>
        </div>
        <div class="menu_icon">
            <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
    </header>
    
    <div id="mobile_menu">
        <aside id="asideLeft">
            <div class="login">
                <button id="loginDiv" title="View profile"><i class="far fa-user"></i> 
                <?php 
                    $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                    $statement->bindvalue('email', $user);
                    $statement->execute();
                    $infos = $statement->fetchAll();
                    foreach($infos as $info){
                        echo "Hello $info->first_name";
                    }
                    
                ?> 
                <i class="fas fa-chevron-down"></i></button>
                <div class="login_option" id="account">
                    <div>
                        <a href="account.php" class="signupBtn">My Account</a>
                        <a href="order_history.php" class="signupBtn">My orders</a>
                        <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                    
                    </div>

                </div>
                    <a href="shopping_cart.php" title="view cart" class="mobile_cart"><i class="fas fa-shopping-cart"></i><span id="cart_value">
                        <?php
                            $cart_num = $connectdb->prepare("SELECT * FROM cart WHERE customer_email = :customer_email");
                            $cart_num->bindvalue('customer_email', $user);
                            $cart_num->execute();

                            if($cart_num->rowCount() > 0){
                                echo $cart_num->rowCount();
                            }else{
                                echo "0";
                            }
                        ?>
                    </span></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="ice cream">
                            <i class="fas fa-ice-cream"></i> <input type="submit" value="Ice cream" name="check_category">
                        </form> 
                    </li>
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="snacks">
                            <i class="fas fa-hamburger"></i> <input type="submit" value="Snacks" name="check_category">
                        </form> 
                    </li>
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="bed sheets">
                            <i class="fas fa-bed"></i> <input type="submit" value="Beddings" name="check_category">
                        </form>
                    </li>
                    
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="small chops">
                            <i class="fas fa-cheese"></i> <input type="submit" value="Small Chops" name="check_category">
                        </form>
                    </li>
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="Cakes">
                            <i class="fas fa-birthday-cake"></i> <input type="submit" value="Cakes" name="check_category">
                        </form>
                    </li>
                    <li>
                        <form action="categories.php" method="POST">
                            <input type="hidden" name="item_cat" value="others">
                            <i class="fas fa-pizza-slice"></i> <input type="submit" value="Other categories" name="check_category">
                        </form>
                    </li>
                    <li><a class="appointment" href="javascript:void(0);" title="Book for an event"><i class="fas fa-calendar-alt"></i>Book Event</a></li>
                    <li><a href="gallery.php"title="View Media"><i class="fas fa-photo-video"></i>Gallery & Videos</a></li>
                    <li><a href="contact.php"title="Get in touch with us"><i class="fas fa-address-book"></i>Contact us</a></li>
                    
                </ul>
            </nav>
            <hr>
            <nav id="help">
                <ul>
                    <li>
                        <a href="contact.php">
                            <i class="far fa-question-circle"></i>
                            <div class="note">
                                <h3>Help center</h3>
                                <p>Ask Temix</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="about.php">
                            <i class="fas fa-street-view"></i>
                            <div class="note">
                                <h3>About us</h3>
                                <p>Who we are</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fas fa-hand-holding-usd"></i>
                            <div class="note">
                                <h3>Refunds</h3>
                                <p>Money back guarantee</p>
                            </div>
                        </a>
                    </li>                          
                </ul>
            </nav>
        </aside>
    </div>
    <section id="existence">
        <h2>Get to know us</h2>
        <hr>
        <h3>Our Existence</h3>
        <div class="story">
            <p>Temix Empire is a Catering Company, located in Warri, Nigeria. Founded by Omotoye Temidayo Mabel in 2015.<br>We are  specialized in Cake making for all kinds of occassions which include; Weddings, Birthdays, Anniversaries, etc, as well as planning events and decoration for your weddings, birthdays, anniversaries and more.<br>We also supply quality beddings for Hotels, Schools, Hospitals and Homes.<br><br>What makes us stand out amongst others is our creativity and commitment to quality, and exceptional customer service is at the heart of what we do. We always put our clients needs first.<br>We advice our clients on the best options for any service/product we are rendering. Our products/service are very economical.<br>All our products are made from premium quality ingredients with special touches to suite your need.<br><br>Temix Empire always serve up trusted Quality of Service. Contact us today, lets make your occassion an elegant and memorable one.<br>
                <a href="contact.php" title="contact us">Visit us today</a> or <br><a class="appointment schedule" href="javascript:void(0);" title="Book an Appointment">Schedule an Appointment</a>
            </p>
            <img src="../images/baking_cakes.jpg" alt="Temix Empire">
        </div>
    </section>
    <section id="hero">
        <div class="hero_image">
            <img src="../images/events.jpg" alt="hero image">
        </div>
        <div class="hero_notes">
            <div class="note">
                <h3>100+</h3>
                <p>Customers</p>
            </div>
            <div class="note">
                <h3>20+</h3>
                <p>Events Covered</p>
            </div>
            <div class="note">
                <h3>10</h3>
                <p>Staffs</p>
            </div>
            <div class="note">
                <h3>5+</h3>
                <p>Years of Experience</p>
            </div>
        </div>
    </section>
    <section id="mission_vision" >
        <h2>Our purpose</h2>
        <hr>
        <div class="mission_vision">
            <div class="misvis" id="miss">
                <h3>Our mission statement</h3>
                <p>Our efforts are tailored towards making sure that our clients are satisfied, hence ending their search for satisfactio</p>
            </div>
            <hr>
            <div class="misvis" id="viss">
                <h3>Our vision</h3>
                <p>We aim To be the first choice of consumers in the southern Region of Nigeria and beyond, as well as create a benchmark in quality standards in cake making and events planning.<br>To be a leading cake maker, trainer, and event manager offering best Quality of Service/products.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>

    <script src="bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    
</body>
</html>

<?php
    }else{
        header("Location: ../index.php");
    }
?> 