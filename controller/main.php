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
            echo $view->first_name . " " . $view->last_name. " - Temix Empire";
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
            <p class="text-right"><i class="fas fa-mobile-alt"></i> <span class="call">Call us: +2348157985866</span> +2347041350926</p>
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
    <section id="bannerContents">
        <aside id="asideLeft" class="main_cat">
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
        </aside>
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
                            <a href="javascript:void(0);">
                                <i class="far fa-question-circle"></i>
                                <div class="note">
                                    <h3>Help center</h3>
                                    <p>Ask Temix</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
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
        <section id="banner">
            <div class="slide">
                <div class="slides">
                    <?php
                        $get_banner1 = $connectdb->prepare("SELECT * FROM banner_ads WHERE banner_id = 1");
                        $get_banner1->execute();
                        $banners = $get_banner1->fetchAll();
                        foreach($banners as $banner):
                    ?>
                    <div class="slide_img">
                        <img src="<?php echo "../media/".$banner->photo;?>" alt="Temix Empire Banner">
                    </div>
                    <div class="description">
                        <h2><?php echo $banner->title;?></h2>
                        <p><?php echo $banner->banner_description;?></p>
                        <div class="links">
                            <a href="javascript:void(0);"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                            <a href="gallery.php"><i class="fas fa-photo-video"></i> View Gallery</a>
                        </div>
                        
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="slides">
                    <?php
                        $get_banner2 = $connectdb->prepare("SELECT * FROM banner_ads WHERE banner_id = 2");
                        $get_banner2->execute();
                        $banners = $get_banner2->fetchAll();
                        foreach($banners as $banner):
                    ?>
                    <div class="slide_img">
                        <img src="<?php echo "../media/".$banner->photo;?>" alt="Temix Empire Banner">
                    </div>
                    <div class="description">
                        <h2><?php echo $banner->title;?></h2>
                        <p><?php echo $banner->banner_description;?></p>
                        <div class="links">
                            <a class="appointment" href="javascript:void(0);"><i class="fas fa-paper-plane"></i> Book an appointment</a>
                            <!-- <a href="javascript:void(0);"><i class="fas fa-photo-video"></i> View Media</a> -->
                        </div>
                        
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="slides">
                    <?php
                        $get_banner3 = $connectdb->prepare("SELECT * FROM banner_ads WHERE banner_id = 3");
                        $get_banner3->execute();
                        $banners = $get_banner3->fetchAll();
                        foreach($banners as $banner):
                    ?>
                    <div class="slide_img">
                        <img src="<?php echo "../media/".$banner->photo;?>" alt="Temix Empire Banner">
                    </div>
                    <div class="description">
                        <h2><?php echo $banner->title;?></h2>
                        <p><?php echo $banner->banner_description;?></p>
                        <div class="links">
                            <a href="javascript:void(0);"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                            <a href="gallery.php"><i class="fas fa-photo-video"></i> View Gallery</a>
                        </div>
                        
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="slides">
                    <?php
                        $get_banner4 = $connectdb->prepare("SELECT * FROM banner_ads WHERE banner_id = 4");
                        $get_banner4->execute();
                        $banners = $get_banner4->fetchAll();
                        foreach($banners as $banner):
                    ?>
                    <div class="slide_img">
                        <img src="<?php echo "../media/".$banner->photo;?>" alt="Temix Empire Banner">
                    </div>
                    <div class="description">
                        <h2><?php echo $banner->title;?></h2>
                        <p><?php echo $banner->banner_description;?></p>
                        <div class="links">
                            <a href="javascript:void(0);"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                            <a href="gallery.php"><i class="fas fa-photo-video"></i> View Gallery</a>
                        </div>
                        
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
        <aside id="asideRight">
            <nav id="help">
                <ul>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="far fa-question-circle"></i>
                            <div class="note">
                                <h3>Help center</h3>
                                <p>Ask Temix</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
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
            <div id="adds">
                <?php
                    $get_ad = $connectdb->prepare("SELECT * FROM banner_ads WHERE banner_id = 5");
                    $get_ad->execute();
                    $ads = $get_ad->fetchAll();
                    foreach($ads as $ad):
                ?>
                <img src="<?php echo "../media/".$ad->photo;?>" alt="Temix ads">
                <?php endforeach;?>
            </div>
        </aside>
    </section>
    <section id="links">
        <div class="link_tags">
            <a href="javscript:void(0);">
                <i class="fas fa-users"></i>
                <p>Partners</p>
            </a>
        </div>
        <div class="link_tags">
            <a href="#all_items">
                <i class="fas fa-coins"></i>
                <p>Top deals</p>
            </a>
        </div>
        <div class="link_tags">
            <a href="#recommendedItems">
                <i class="fas fa-star"></i>
                <p>favourite</p>
            </a>
        </div>
        <div class="link_tags">
            <a href="#popular">    
                <i class="fas fa-hamburger"></i>
                <p>Popular</p>
            </a>
        </div>
    </section>
    <main>
        <section id="featured">
            
            <h2>Featured Items</h2>
            <div class="featured">
                <?php
                    $select_featured = $connectdb->prepare("SELECT * FROM menu WHERE featured_item = 1 ORDER BY time_created DESC");
                    $select_featured->execute();
                    $rows = $select_featured->fetchAll();
                    foreach($rows as $row):
                ?>
                <figure>
                    <form method="POST" action="cart.php">
                        <a href="javascript:void(0);" onclick="showItems('<?php echo $row->item_id?>')">
                        <img src="<?php echo '../items/'.$row->item_foto;?>" alt="featured item" title="click to view details">
                        </a>
                        <input type="hidden" name="cart_item_name" id="cart_item_name" value="<?php echo $row->item_name?>">
                        <input type="hidden" name="cart_item_price" id="cart_item_price" value="<?php echo $row->item_prize?>">
                        
                        <input type="hidden" name="customer_email" id="customer_email" value="<?php echo $user?>">
                        <input type="hidden" id="quantity" name="quantity" value="1">
                        <figcaption>
                            <div class="todo">
                                <p><?php echo $row->item_name?></p>
                                <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                <span>₦ <?php echo number_format($row->item_prize)?></span>
                            </div>
                            <!-- <button type="submit" name="add_to_cart" id="add_to_cart" title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button> -->
                        </figcaption>
                    </form>
                </figure>
                
                <?php endforeach ?>
            </div>
            <button id="view_more">View more</button>
            <button id="show_less">Show less</button>
        </section>
        <section id="popular">
            <h2>Popular Items <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h2>
            <div class="all_items popular_items">
                <?php
                    $select_all = $connectdb->prepare("SELECT menu.item_id, menu.item_category, menu.item_name, menu.item_prize, menu.item_foto, menu.item_description, menu.time_created, orders.quantity, orders.item_name FROM orders, menu WHERE menu.item_name = orders.item_name AND orders.quantity >= 3 GROUP BY orders.item_name");
                    $select_all->execute();
                    $rows = $select_all->fetchAll();
                    foreach($rows as $row):
                ?>
                <figure>
                    <form action="cart.php" method="POST">
                        <a href="javascript:void(0);" onclick="showItems('<?php echo $row->item_id?>')">
                            <img src="<?php echo '../items/'.$row->item_foto;?>" alt="featured item" title="click to view details">
                        </a>
                        <input type="hidden" name="cart_item_name" id="cart_item_name" value="<?php echo $row->item_name?>">
                        <input type="hidden" name="cart_item_price" id="cart_item_price" value="<?php echo $row->item_prize?>">
                        
                        <input type="hidden" name="customer_email" id="customer_email" value="<?php echo $user?>">
                        <input type="hidden" id="quantity" name="quantity" value="1">
                        <figcaption>
                            <div class="todo">
                                <p><?php echo $row->item_name?></p>
                                <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                <span>₦ <?php echo number_format($row->item_prize)?></span>
                            </div>
                            <button type="submit" name="add_to_cart" id="add_to_cart" title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button>
                        </figcaption>
                    </form>
                </figure>
                
                <?php endforeach ?>
                
            </div>
            <button id="more_popular">View more</button>
            <button id="less_popular">Show less</button>
        </section>
        <section id="all_items">
        <h2>More items</h2>
            <div class="all_items">
                <?php
                    $select_all = $connectdb->prepare("SELECT * FROM menu ORDER BY time_created DESC");
                    $select_all->execute();
                    $rows = $select_all->fetchAll();
                    foreach($rows as $row):
                ?>
                <figure>
                    <form action="cart.php" method="POST">
                        <a href="javascript:void(0);" onclick="showItems('<?php echo $row->item_id?>')">
                            <img src="<?php echo '../items/'.$row->item_foto;?>" alt="featured item" title="click to view details">
                        </a>
                        <input type="hidden" name="cart_item_name" id="cart_item_name" value="<?php echo $row->item_name?>">
                        <input type="hidden" name="cart_item_price" id="cart_item_price" value="<?php echo $row->item_prize?>">
                        
                        <input type="hidden" name="customer_email" id="customer_email" value="<?php echo $user?>">
                        <input type="hidden" id="quantity" name="quantity" value="1">
                        <figcaption>
                            <div class="todo">
                                <p><?php echo $row->item_name?></p>
                                <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                <span>₦ <?php echo number_format($row->item_prize)?></span>
                            </div>
                            <button type="submit" name="add_to_cart" id="add_to_cart" title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button>
                        </figcaption>
                    </form>
                </figure>
                
                <?php endforeach ?>
                
            </div>
            <button id="more">View more</button>
            <button id="less">Show less</button>
        </section>
        <section id="recommendedItems">
        <h2>Recommended for you</h2>
            <div class="all_items">
                <?php
                    $select_all = $connectdb->prepare("SELECT orders.customer_email, orders.item_name, menu.item_id, menu.item_category, menu.item_name, menu.item_prize, menu.item_foto, menu.item_description FROM orders, menu WHERE orders.customer_email = :customer_email AND menu.item_name = orders.item_name GROUP BY orders.item_name");
                    $select_all->bindvalue('customer_email', $user);
                    $select_all->execute();
                    $rows = $select_all->fetchAll();
                    foreach($rows as $row):
                ?>
                <figure>
                    <form action="cart.php" method="POST">
                        <a href="javascript:void(0);" onclick="showItems('<?php echo $row->item_id?>')">
                            <img src="<?php echo '../items/'.$row->item_foto;?>" alt="featured item" title="click to view details">
                        </a>
                        <input type="hidden" name="cart_item_name" id="cart_item_name" value="<?php echo $row->item_name?>">
                        <input type="hidden" name="cart_item_price" id="cart_item_price" value="<?php echo $row->item_prize?>">
                        
                        <input type="hidden" name="customer_email" id="customer_email" value="<?php echo $user?>">
                        <input type="hidden" id="quantity" name="quantity" value="1">
                        <figcaption>
                            <div class="todo">
                            <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                <span>₦ <?php echo number_format($row->item_prize)?></span>
                            </div>
                            <button type="submit" name="add_to_cart" id="add_to_cart" title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button>
                        </figcaption>
                    </form>
                </figure>
                
                <?php endforeach ?>
                
            </div>
        </section>
        
    </main>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <?php
        /* if(isset($_SESSION['error_box'])){
            echo "<div class='error_box'><p>" . $_SESSION['error_box'] . "</p>
            <a id='close_error'>Ok</button></a>";
            unset($_SESSION['error_box']);
        } */
    ?>
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