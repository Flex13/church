<footer class="page-footer">
    <div class="container-fluid text-center ">
        <!--Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-7 mt-md-0 p-4">

                <!-- Content -->
                <h1 class="section-heading text-warning mb-0">HPS AFM</h1><small class="text-warning">Vaal</small>
                <h4><a href="https://www.facebook.com/heirsofpromisessanctuaryvaal/" class="text-warning"><i class="fab fa-facebook"></i></a> | <a href="https://twitter.com/hpsvaal/" class="text-warning"><i class="fab fa-twitter"></i></a> | <a href="https://www.instagram.com/hpsafmvaal/" class="text-warning"><i class="fab fa-instagram"></i></a> | <a href="https://www.youtube.com/channel/UCwFZ8CuDGZwiLDod_8CJ5CQ/" class="text-warning"><i class="fab fa-youtube"></i></a></h4>
                <p class="text-light">Contact : info@hpsafmvaal.org.za <br> Tel: 016-330-5007 <br> Fax: 086-587-9097</p>

            </div>

            <!-- Grid column -->
            <div class="col-md-5 mb-md-0 p-4">

                <!-- Links -->
                <h5 class="text-light text-uppercase">Quick Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a class="footer-links" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="footer-links" href="ministry.php">Ministry</a>
                    </li>
                    <li>
                        <a class="footer-links" href="contact.php">Contact</a>
                    </li>
                    <?php
                    if (!isset($_SESSION['id'])) : ?>
                        <li>
                            <a class="footer-links" href="registration.php?m=login">Login</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a class="footer-links" href="logout.php">Logout</a>
                        </li>
                    <?php endif ?>
                </ul>

            </div>
            <!-- Grid column -->


        </div>
        <!--Grid row-->

        <!-- Copyright -->
        <div class=" text-center py-1">
            <small>2020 © </small><a class="text-small text-light" href="https://digitalanalytica.co.za/">Digital&Analytica</a>
        </div>
        <!-- Copyright -->

    </div>

</footer>

<script type="text/javascript" src="assets/js/mdb.min.js"></script>


</body>

</html>

<?php
ob_get_contents();
ob_flush();

?>