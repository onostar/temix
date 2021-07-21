<aside class="main_menu" id="desktop_menu">
    <div class="login">
        <button id="loginDiv"><i class="far fa-user"></i> 
            <?php 
                /* $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                $statement->bindvalue('email', $user);
                $statement->execute();
                $infos = $statement->fetchAll();
                foreach($infos as $info){
                    echo "Hello $info->first_name";
                }
                */
            ?> Hello Admin
            <i class="fas fa-chevron-down"></i></button>
        <div class="login_option" id="account">
            <div>
                <a href="javascript:void(0);" class="signupBtn">Change Password</a>
                <!-- <a href="javascript:void(0);" class="signupBtn">My orders</a> -->
                <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                
            </div>
        </div>
    </div>
    <nav>
        <h3><a href="admin.php" title="Home"><i class="fas fa-home"></i> Dashboard</a></h3>
        <ul>
            <li><a href="javascript:void(0);" id="nav1">Admin <i class="fas fa-plus"></i></a>
                <ul id="nav1Menu" class="navs">
                    
                    <li><a href="javascript:void(0);" id="addCat" title="Add item categories">Add Category</a></li>
                    <li><a href="javascript:void(0);" id="addMenu" title="Add restaurant menu">Add Item</a></li>
                    <li><a href="javascript:void(0);" id="deleteItem" title="Delete restaurant Items">Delete Item</a></li>
                    <li><a href="javascript:void(0);" id="addStore">Upload Photo</a></li>
                    <li><a href="javascript:void(0);" id="addUser">Upload Video</a></li>
                    <li><a id="customerList"  href="javascript:void(0);">Customer List</a></li>
                    <li><a href="javascript:void(0);" id="uploadBanner">Upload Banners & Ads</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav2">Manage Items <i class="fas fa-plus"></i></a>
                <ul id="nav2Menu" class="navs">
                    <!-- <li><a id="showRestaurants"  href="javascript:void(0);">Restaurant List</a></li> -->
                    <li><a id="showMenus" href="javascript:void(0);">Item List</a></li>
                    <li><a id="modifyPrice" href="javascript:void(0);">Modify Item Price</a></li>
                    <li><a id="featured" href="javascript:void(0);">Featured items</a></li>
                    <li><a id="orders"  href="javascript:void(0);">Pending Orders</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav3">Events & Appointments <i class="fas fa-plus"></i></a>
                <ul id="nav3Menu" class="navs">
                    <li><a id="showUsers" href="javascript:void(0);">Manage Events/Appointments</a></li>
                    
                    <!-- <li><a id="orders"  href="javascript:void(0);">Pending Orders</a></li> -->
                    
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav4">Reports <i class="fas fa-plus"></i></a>
                <ul id="nav4Menu">
                    <li><a id="deliveries"  href="javascript:void(0);">Successful Deliveries</a></li>
                    <li><a id="cancelled"  href="javascript:void(0);">Cancelled orders</a></li>
                    <li><a id="subscriberList"  href="javascript:void(0);">Subscribers</a></li>
                    <li><a id="highestItems"  href="javascript:void(0);">Highest/Lowest Selling Items</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<!-- mobile menu -->
<!--<aside class="main_menu" id="responsive_menu">
    <div class="login">
        <button id="loginDiv"><i class="far fa-user"></i> 
            <?php 
                /* $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                $statement->bindvalue('email', $user);
                $statement->execute();
                $infos = $statement->fetchAll();
                foreach($infos as $info){
                    echo "Hello $info->first_name";
                }
                */
            ?> Hello Admin
            <i class="fas fa-chevron-down"></i></button>
        <div class="login_option" id="account">
            <div>
                <a href="javascript:void(0);" class="signupBtn">Profile</a>
                <a href="javascript:void(0);" class="signupBtn">My orders</a>
                <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                
            </div>
        </div>
    </div>
    <nav>
        <h3><a href="admin.php" title="Home"><i class="fas fa-home"></i> Dashboard</a></h3>
        <ul>
            <li><a href="javascript:void(0);" id="nav1">Admin <i class="fas fa-plus"></i></a>
                <ul id="nav1Menu" class="navs">
                    
                    <li><a href="javascript:void(0);" id="addCat" title="Add item categories">Add Category</a></li>
                    <li><a href="javascript:void(0);" id="addMenu" title="Add restaurant menu">Add Item</a></li>
                    <li><a href="javascript:void(0);" id="deleteItem" title="Delete restaurant Items">Delete Item</a></li>
                    <li><a href="javascript:void(0);" id="addStore">Upload Photo</a></li>
                    <li><a href="javascript:void(0);" id="addUser">Upload Video</a></li>
                    <li><a id="customerList"  href="javascript:void(0);">Customer List</a></li>
                    <li><a href="javascript:void(0);" id="uploadBanner">Upload Banners & Ads</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav2">Manage Items <i class="fas fa-plus"></i></a>
                <ul id="nav2Menu" class="navs">
                    <li><a id="showRestaurants"  href="javascript:void(0);">Restaurant List</a></li>
                    <li><a id="showMenus" href="javascript:void(0);">Item List</a></li>
                    <li><a id="modifyPrice" href="javascript:void(0);">Modify Item Price</a></li>
                    <li><a id="featured" href="javascript:void(0);">Featured items</a></li>
                    <li><a id="orders"  href="javascript:void(0);">Pending Orders</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav3">Events & Appointments <i class="fas fa-plus"></i></a>
                <ul id="nav3Menu" class="navs">
                    <li><a id="showUsers" href="javascript:void(0);">Manage Events/Appointments</a></li>
                    
                    <<li><a id="orders"  href="javascript:void(0);">Pending Orders</a></li> 
                    
                </ul>
            </li>
            <li><a href="javascript:void(0);" id="nav4">Reports <i class="fas fa-plus"></i></a>
                <ul id="nav4Menu">
                    <li><a id="deliveries"  href="javascript:void(0);">Successful Deliveries</a></li>
                    <li><a id="cancelled"  href="javascript:void(0);">Cancelled orders</a></li>
                    <li><a id="subscriberList"  href="javascript:void(0);">Subscribers</a></li>
                    <li><a id="highestItems"  href="javascript:void(0);">Highest/Lowest Selling Items</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside> -->