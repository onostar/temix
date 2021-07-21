<?php include "controller/server.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temix Empire is a Catering Company, we are Specialized in Cakes of all kinds Like Wedding cakes, Birthday cakes, Anniversary cakes, chcocolate cakes, Coconut Cakes, Banana cakes and many others. We also provide Make-up service for weddings, Party, Birthdays and Photo Shoot, we supply quality beddings for Hotels, Schools, Hospitals and Homes. We also specialize in Event Planning, Decorations for all Occations, Fashionable Beads, and Graphic Designs. Temix Empire always serve up Quality of Service you can trust">
    <meta name="keywords" content="cakes, beddings, wedding cakes, birthday cakes, decorations, weddings, makeup, make-up, make-up artiste, event planning, events, chcocolate cakes, icing">
    <title>Temix Empire | Cakes | Events | Small Chops</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="images/temix_empire_logo1.jpg" size="32X32">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <div class="loader">
        <!-- <h1>This is</h1> -->
        <img src="images/temix_empire_logo2.png" alt="Temix EMpire">
    </div>
    <div class="main">
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
                <p class="text-right"><i class="fas fa-mobile-alt"></i> <span class="call">Call us:</span> +2347041350926</p>
            </div>
        </section>
        <header>
            <h1 class="logo">
                <a href="index.php" title="Temix Empire">
                    <img src="images/temix_empire_logo1.jpg" alt="Temix Empire" class="img-fluid">
                </a>
            </h1>
            <div class="search">
                <form class="form-inline" action="search_result.php" method="POST">
                    <input type="search" name="search_items" placeholder="search items">
                    <button type="submit" name="search" class="main_searchbtn">Search</button>
                    <button type="submit" name="search" class="mobilesearchbtn" ><i class="fas fa-search"></i></button>
                </form>
                
            </div>
            <div class="other_menu">
                <a href="gallery.php" title="Our Gallery">Gallery</a>
            </div>
            <div class="login">
                <button id="loginDiv"><i class="far fa-user"></i> Login <i class="fas fa-chevron-down"></i></button>
                <div class="login_option">
                    <div>
                        <button id="loginBtn"><a href="registration.php">Login</a></button>
                        <h3>OR</h3>
                        <a href="registration.php" id="signupBtn">Create an account</a>
                    </div>
                </div>
            </div>
            <div class="cart">
                <a href="javascript:void(0);" onclick="loginFirst();" title="view cart"><i class="fas fa-shopping-cart"></i> Cart <span id="cart_value">0</span></a>
            </div>
            <div class="menu_icon">
                <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
            </div>
        </header>
        <p class="successful">
            <?php
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
            ?>
            <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
            ?>
        </p>
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
                        <button id="loginDiv"><i class="far fa-user"></i> Login <i class="fas fa-chevron-down"></i></button>
                        <div class="login_option">
                            <div>
                                <button id="loginBtn"><a href="registration.php">Login</a></button>
                                <h3>OR</h3>
                                <a href="registration.php" id="signupBtn">Create an account</a>
                            </div>
                        </div>
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
                            <img src="<?php echo "media/".$banner->photo;?>" alt="Temix Empire Banner">
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
                            <img src="<?php echo "media/".$banner->photo;?>" alt="Temix Empire Banner">
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
                            <img src="<?php echo "media/".$banner->photo;?>" alt="Temix Empire Banner">
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
                            <img src="<?php echo "media/".$banner->photo;?>" alt="Temix Empire Banner">
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
                    <img src="<?php echo "media/".$ad->photo;?>" alt="Temix ads">
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
                <a href="#popular">
                    <i class="fas fa-star"></i>
                    <p>Popular</p>
                </a>
            </div>
            <div class="link_tags">
                <a href="#featured">    
                    <i class="fas fa-home"></i>
                    <p>Featured</p>
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
                        <a href="javascript:void(0);" onclick="loginFirst();">
                            <img src="<?php echo 'items/'.$row->item_foto;?>" alt="featured item">
                            <figcaption>
                                <div class="todo">
                                    <p><?php echo $row->item_name?></p>
                                    <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                    <span>₦ <?php echo number_format($row->item_prize)?></span>
                                </div>
                                <!-- <button title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button> -->
                            </figcaption>
                        </a>
                    </figure>
                    
                    <?php endforeach ?>
                    
                </div>
                <button id="view_more">View more</button>
                <button id="show_less">Show less</button>
            </section>
            <section id="popular">
                <h2>Popular Items <i class="fas fa-star"></i><i class="fas fa-star"></i></h2>
                <div class="all_items popular_items">
                    <?php
                        /* $select_all = $connectdb->prepare("SELECT menu.item_name, menu.item_category, menu.item_prize, menu.item_foto, menu.item_id, orders.item_name FROM orders, menu WHERE menu.item_name = orders.item_name AND orders.quantity >= 2 GROUP BY orders.item_name"); */
                        $select_all = $connectdb->prepare("SELECT * FROM menu INNER JOIN orders USING (item_name) WHERE quantity >= 4 GROUP BY item_name");
                        $select_all->execute();
                        $rows = $select_all->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <figure>
                        <a href="javascript:void(0);" onclick="loginFirst();">
                            <img src="<?php echo 'items/'.$row->item_foto;?>" alt="More item">
                            <figcaption>
                                <div class="todo">
                                    <p><?php echo $row->item_name?></p>
                                    <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                    <span>₦ <?php echo number_format($row->item_prize)?></span>
                                </div>
                                <button title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button>
                            </figcaption>
                        </a>
                    </figure>
                    
                    <?php endforeach ?>
                    
                </div>
                <button id="more_popular">View more</button>
                <button id="less_popular">Show less</button>
            </section>
            <section id="all_items">
                <h2>Find more items</h2>
                <div class="all_items">
                    <?php
                        $select_all = $connectdb->prepare("SELECT * FROM menu ORDER BY time_created DESC");
                        $select_all->execute();
                        $rows = $select_all->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <figure>
                        <a href="javascript:void(0);" onclick="loginFirst();">
                            <img src="<?php echo 'items/'.$row->item_foto;?>" alt="More item">
                            <figcaption>
                                <div class="todo">
                                    <p><?php echo $row->item_name?></p>
                                    <p><i class="fas fa-layer-group"></i> <?php echo $row->item_category?></p>
                                    <span>₦ <?php echo number_format($row->item_prize)?></span>
                                </div>
                                <button title="add to cart" class="add_cart"><i class="fas fa-shopping-cart"></i></button>
                            </figcaption>
                        </a>
                    </figure>
                    
                    <?php endforeach ?>
                    
                </div>
                <button id="more">View more</button>
                <button id="less">Show less</button>
            </section>
            
        </main>
        
        <?php include "footer.php"; ?>
    </div>
    
    
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
</body>
</html>