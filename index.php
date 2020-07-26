<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<header>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">P F C
                        MINISTRIES</h1>
                    <h5 class="mb-4">
                        Accepting God's Love by acknowledging His Son Jesus Christ as the LORD and Savior, and then we will be
                        SAVED. At PFC we trust God for our safety, provision and protection through uniting our Faith and Hope in
                        seeking Him First and walking in the fear of His Name</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>

<!--Main layout-->
<main class="my-5 sidebar-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->

                <section class="text-center my-5">
                    <h4 class="mb-5"><strong>Latest Events</strong></h4>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Post title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#!" class="btn btn-primary">Read</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Post title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#!" class="btn btn-primary">Read</a>
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