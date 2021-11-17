<div id="mobile_menu">
                
    <aside id="asideLeft">
        <div class="login">
            <button id="loginDiv"><i class="far fa-user"></i> <a href="registration.php">Login</a> <i class="fas fa-sign-in-alt"></i></button>
            <!-- <div class="login_option">
                <div>
                    <button id="loginBtn"><a href="registration.php">Login</a></button>
                    <h3>OR</h3>
                    <a href="registration.php" id="signupBtn">Create an account</a>
                </div>
            </div> -->
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
                <li><a class="appointment" href="javascript:void(0);" title="Book for an event"><i class="far fa-calendar-alt"></i>Book Event</a></li>
                <li><a href="gallery.php"title="View Media"><i class="fas fa-photo-video"></i>Gallery & Videos</a></li>
                <li><a href="contact.php"title="Get in touch with us"><i class="far fa-address-book"></i>Contact us</a></li>
                
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