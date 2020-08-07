<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>



<!--Main layout-->
<main class="mt-3 sidebar-layout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->

                <header>
                    <!-- Background image -->
                    <div id="events" class="bg-image shadow-2-strong">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
                            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                                <div class="text-white">

                                    <h1 class=" section-heading mb-0">HPS AFM</h1>
                                    <h6 class="section-heading py-2">Vaal</h6>



                                    <p class=" sub-section mb-4">
                                        Accepting God's Love by acknowledging His Son Jesus Christ as the LORD and Savior, and then we will be
                                        SAVED. At HPS AFM we trust God for our safety, provision and protection through uniting our Faith and Hope in
                                        seeking Him First and walking in the fear of His Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Background image -->
                </header>

                <section class="my-5">
                    <h4 class="section-title text-center mb-5"><strong>Latest News</strong></h4>

                    <!-- Post -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-image hover-overlay shadow-1-strong rounded ripple m-0 p-0" data-ripple-color="light">
                                    <img src="assets/img/youth.jpg" class="img-fluid m-0 p-0">
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="px-3">
                                <h5 class="text-warning my-3">FIRST YEAR LIFE COACHING SESSION</h5>
                                <p>
                                    First year life coaching programmes. Internal and External Residence. All Coaching session start at 17h30 after classes.
                                </p>

                                <a href="events-page.php" class="btn btn-primary">View</a>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </section>
                <!--Section: Content-->
            </div>

            <div class="col-md-4">

                <?php include('includes/sidebar.php'); ?>

            </div>
        </div>

    </div>
</main>
<!--Main layout-->



<?php include('includes/footer.php'); ?>