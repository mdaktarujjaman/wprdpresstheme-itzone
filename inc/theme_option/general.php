<?php

  
//   HTML Part
 ?>
    <div id="theme_option_body">
        <div class="main_area_option">
            <?php
                echo "<h1>Theme Option</h1>";
                echo "<p> This is the theme option page. You can customize your theme settings here.</p>";
                echo "<p>Add Your <strong>Header Area</strong> Information</p>";
            ?>
            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options');?>
                <label for="address-info" name="address-info">Address Info</label>
                <input type="text" name="address-info" value = "<?php echo get_option('address-info'); ?>" id="address-info" placeholder="Enter your address">

                 <label for="email-info" name="email-info">Email Info</label>
                <input type="text" name="email-info" value = "<?php echo get_option('email-info'); ?>" id="email-info" placeholder="Enter your Email">

                 <label for="phone-number" name="phone-number">Phone Number</label>
                <input type="text" name="phone-number" value = "<?php echo get_option('phone-number'); ?>" id="phone-number" placeholder="Enter your Phone Number">

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="address-info, email-info, phone-number">

                <input type="submit" name="submit" value="<?php _e('Save Info', 'itzone360'); ?>" class="button button-primary">
            </form>
        </div>
    </div>
 <?php
?>
    