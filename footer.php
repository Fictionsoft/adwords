<div class="footer_section">
    <div class="container">
        <div class="col-sm-12">
            <div class="footer_top">
                <div class="footer_left">
                    <a href="index.php"><img src="images/logos.png" alt="logo"></a>
                </div>

                <!--<div class="contact_right">
                    <a href="#"><b>CONTACT US</b></a>
                </div>-->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div class="contact_nab">
                <ul>
                    <li> <a href="legal.php">Legal</a> </li>
                    <li> <a href="privacy_policy.php">Privacy Policy</a> </li>
                    <li> <a href="terms.php">Terms Of Use</a> </li>
                    <li> <a href="disclaimer.php">Earnings Disclaimer</a> </li>
                </ul>
            </div>
            <div class="footer_bottom">
                <p>BRYXEN, INC. - COPYRIGHT @ 2017 - ALL RIGHTS RESERVED</p>
                <p>This site is not a part of the FaceBook website or FaceBook INC. Additionally, this site is
                    NOT endorsed by FaceBook in ANY WAY. FACEBOOK is a trademark of FaceBook INC.
                </p>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-sm-6 col-sm-offset-6">
                <div class="develop">
                    <p>Develop by: <a target="_blank" href="http://fictionsoft.com/"><em>fictionsoft</em></a></p>
                </div>
            </div>
        </div>
    </div>

</div><!--end footer_section-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

</body>
</html>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    $('#myBtn').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    /*function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }*/
</script>