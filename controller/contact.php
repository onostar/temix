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
            echo $view->first_name . " " . $view->last_name. " - Contact Us";
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
    <main>
        <section id="contactUs">
            <h2>Get in touch</h2>
            <hr>
            <div class="contact">
                <div class="contact_us">
                    <p>We are here to serve you</p>
                    <p><i class="fas fa-home"></i> For more information, pick ups of your items or to get a physical feel of our work, Kindly visit us at at our head office:<br>
                    Temix Empire, 124 Jakpa Road by Oru Standard Junction<br>Warri, Delta State</p><br>
                    <p><i class="fas fa-envelope-open-text"></i> You can also send a mail to: <br>info@temixempire.com<br>sales@temixempire.com</p><br>
                    <p><i class="fas fa-tty"></i> 07041350926<br>08157985866</p><br><br>
                    <p>You can also <a class="appointment" href="javascript:void(0);" title="Schedule an appointment">Book an Appointment</a> With us.
                    
                </div>
                <div class="contact_img">
                    <img src="../images/temix-empire-contact.jpg" alt="Temix Empire contact">
                </div>
            </div>
            
            
        </section>
    </main>

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