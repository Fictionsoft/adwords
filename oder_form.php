<?php
include('header.php');
?>

<?php
    if(isset($_POST['submitted'])){

        $message = "
    <html>
        <head>
            <title>HTML email</title>
        </head>
        <body>
            <b>Billing Address:</b><br>
                    Street Address: {$_POST['address']}<br>
                    City: {$_POST['city']}<br>
                    State / Province: {$_POST['state']}<br>
                    Country: {$_POST['country']}<br>
                    Zip Code / Postal Code: {$_POST['code']}<br><br>

            <b>Billing Address:</b><br>
                    Street Address: {$_POST['address']}<br>
                    City: {$_POST['city']}<br>
                    State / Province: {$_POST['state']}<br>
                    Country: {$_POST['country']}<br>
                    Zip Code / Postal Code: {$_POST['code']}</body></html>
        </body>
    </html>";

        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= "From: {$_POST['email']}" . "\r\n";

        mail('readysetapp@gmail.com.com','order',$message,$headers);

        echo'<p class="alert-success" style="padding:28px;!important">Your Order is Successfully Completed</p>';

        include('footer.php');
        exit();
    }
?>
    <div class="full_width">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"  style="overflow: hidden">
                   <div class="form_section">
                       <form action="oder_form.php" method="post">
                           <p><b>Step #1:</b> Contact Information</p>
                           <div class="form_border"></div>
                           <div class="form-group">
                               <label for="first_name">Full Name:</label>
                               <input type="text" class="form-control" id="first_name" placeholder="Enter Full Name" name="fname" required="">
                           </div>
                           <div class="form-group">
                               <label for="email">Email Address:</label>
                               <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required="">
                           </div>
                           <div class="form-group">
                               <label for="number">Phone Number:</label>
                               <input type="text" class="form-control" id="number" placeholder="Enter Phone Number" name="number" required="">
                           </div>
                           <p style="margin-top: 10%"><b>Step #2:</b> Billing Address</p>
                           <div class="form_border"></div>
                           <div class="form-group">
                               <label for="address">Street Address:</label>
                               <input type="text" class="form-control" id="address" placeholder="Enter Street Address" name="address" required="">
                           </div>
                           <div class="form-group">
                               <label for="city">City:</label>
                               <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required="">
                           </div>
                           <div class="form-group">
                               <label for="state">State / Province:</label>
                               <input type="text" class="form-control" id="state" placeholder="Enter State / Province:" name="state" required="">
                           </div>
                           <div class="form-group">
                               <label for="country">Country:</label>
                               <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" required="">
                           </div>
                           <div class="form-group">
                               <label for="code">Zip Code / Postal Code:</label>
                               <input type=text class="form-control" id="code" placeholder="Enter Zip Code / Postal Code:" name="code" required="">
                           </div>
                            <div class="submit_button">
                                <button type="submit" class="btn btn-default hover_btn"><h1>Complete My Order</h1><p>Get Instant Access</p></button>
                            </div>
                           <input type="hidden" name="submitted">
                       </form>
                   </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3 fix">
                            <div class="form_right_top_img">
                                <img src="images/2.png" alt="image" />
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form_right_content">
                                <h3>Adwords Domination Masterclass</h3>
                                <p>You will receive instant access to my brand new 2017 Google Adwords Domination Masterclass course,
                                    which will teach you all of the tips, tricks, and strategies I've used over and over to build numerous 7
                                    figure online businesses using only Google Adwords traffic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form_img">
                                <img src="images/adwords-course.png" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('footer.php');
?>