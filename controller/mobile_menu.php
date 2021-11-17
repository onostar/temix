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
            <!-- <i class="fas fa-chevron-down"></i> -->
            </button>
            <!-- <div class="login_option" id="account">
                <div>
                    <a href="account.php" class="signupBtn">My Account</a>
                    <a href="order_history.php" class="signupBtn">My orders</a>
                    <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                
                </div>

            </div> -->
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
                <a class="logout" title="Logout" href="logout.php"><i class="fas fa-sign-in-alt"></i></a>
        </div>
        <nav>
            <ul>
                <li><a href="account.php"title="View profile"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="order_history.php"title="Order history"><i class="fas fa-shopping-cart"></i>My Orders</a></li>
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
                <!-- <li><a href="contact.php"title="Get in touch with us"><i class="fas fa-address-book"></i>Contact us</a></li> -->
                
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