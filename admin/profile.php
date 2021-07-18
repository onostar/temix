        <h3>My Profile</h3>
        <hr>
        <div class="info"></div>
        <div class="profile_details">
            <div class="userss" id="user_details">
            <h3>Account Details</h3>
                <?php 
                    $show_details = $connectdb->prepare("SELECT * FROM administrators WHERE restaurant_email = :restaurant_email");
                    $show_details->bindvalue('restaurant_email', $user);
                    $show_details->execute();

                    $views = $show_details->fetchAll();
                    foreach($views as $view):
                ?>
                <h4><?php echo $view->contact_person; ?></h4>
                <p><?php echo $view->restaurant_email;?></p>
                <?php endforeach;?>
            </div>
            <div class="userss" id="user_address">
                <h3>Address Book</h3>
                <div class="add">
                    <div class="address">
                        <h4>Your Restaurant Address:</h4>
                        <?php 
                            $show_details = $connectdb->prepare("SELECT administrators.restaurant_name, administrators.restaurant_email, administrators.contact_person, administrators.contact_phone, restaurants.restaurant_name, restaurants.restaurant_address, restaurants.restaurant_location FROM administrators, restaurants WHERE administrators.restaurant_email = :restaurant_email AND administrators.restaurant_name = restaurants.restaurant_name");
                            $show_details->bindvalue('restaurant_email', $user);
                            $show_details->execute();

                            $views = $show_details->fetchAll();
                            foreach($views as $view):
                        ?>
                        <p><?php echo $view->restaurant_name; ?></p>
                        <p><?php echo $view->contact_phone;?></p>
                        <p><?php echo $view->restaurant_address;?></p>
                        <p style="text-transform:uppercase;"><?php echo $view->restaurant_location;?></p>
                        <?php endforeach;?>
                    </div>
                    <div id="edit">
                        <a href="javascript:void(0);" title="Edit details" id="editDetails"><i class="fas fa-pen"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="userss" id="change_password">
                <a href="javascript:void(0);" title="Change your password" id="changePasword">Change password</a>
            </div>
        </div>
        <div class="update_details" id="update">
            <?php
                $user_details = $connectdb->prepare("SELECT administrators.restaurant_name, administrators.restaurant_email, administrators.contact_person, administrators.contact_phone, restaurants.restaurant_name, restaurants.restaurant_address, restaurants.restaurant_location FROM administrators, restaurants WHERE administrators.restaurant_email = :restaurant_email AND administrators.restaurant_name = restaurants.restaurant_name");
                $user_details->bindvalue('restaurant_email', $user);
                $user_details->execute();

                $details = $user_details->fetchAll();
                foreach($details as $detail):
            ?>
            <a href="javascript:void(0)" title="close section" id="close_update"><i class="fas fa-window-close"></i></a>
            <form method="POST">
                <div class="update">
                    <input type="hidden" name="restEmail" id="restEmail" value="<?php echo $detail->restaurant_email;?>">
                    <input type="hidden" name="restName" id="restName" value="<?php echo $detail->restaurant_name;?>">
                    <div class="update_data">
                        <label for="firstName">Contact Name</label><br>
                        <input type="text" name="contactName" id="contactName" value="<?php echo $detail->contact_person;?>">
                    </div>
                    <div class="update_data">
                        <label for="phone">Phone Number</label><br>
                        <input type="tel" name="contactPhone" id="contactPhone" value="<?php echo $detail->contact_phone;?>">
                    </div>
                </div>
                <div class="update">
                    
                    <div class="update_data">
                        <label for="address">Restaurant Address</label><br>
                        <input type="text" name="address" id="address" value="<?php echo $detail->restaurant_address;?>">
                    </div>
                    <div class="update_data">
                        <label for="city">City</label><br>
                        <select name="city" id="city">
                            <option selected value="<?php echo $detail->restaurant_location;?>"><?php echo $detail->restaurant_location;?></option>
                            <option value="Benin">Benin</option>
                            <option value="Asaba">Asaba</option>
                            <option value="Warri">Warri</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" id="update_profile" name="update_profile">Update Details</button>
            </form>
            <?php endforeach;?>
        </div>
        <!-- change password -->
        <div class="change_password">
            <div class="info"></div>
            <form method="POST">
                <h3>Change your password</h3>
                <input type="hidden" name="rest_email" id="rest_email" value="<?php $get_user = $connectdb->prepare("SELECT * FROM administrators WHERE restaurant_email = :restaurant_email");
                $get_user->bindvalue('restaurant_email', $user);
                $get_user->execute();
                $gets = $get_user->fetchAll();
                foreach($gets as $get){
                    echo $get->restaurant_email;
                }
                ?>">
                <label for="currPwd">Current password</label><br>
                <input type="password" name="current_password" id="current_password" required><br>
                <label for="newPwd">New Password</label><br>
                <input type="password" name="new_password" id="new_password" required><br>
                <label for="rePwd">Retype Password</label><br>
                <input type="password" name="retype_password" id="retype_password" required><br>
                <button type="submit" name="change_passwords" id="change_passwords">Save</button>
            </form>
        </div>
 