<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>



<!--Main layout-->
<main class="sidebar-layout mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <h4 class="sidebar-section text-center mb-4">We would love to hear from you</h4>
                        <form class="bg-white ">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="name" name="name" class="form-control" />
                                        <label class="form-label" for="name">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="surname" name="surname" class="form-control" />
                                        <label class="form-label" for="surname">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="cell" name="cell" class="form-control" />
                                <label class="form-label" for="cell">Phone</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                <label class="form-label" for="message">Message</label>
                            </div>

                            <!-- Submit button -->
                            <button type="button" id="submit" class="btn btn-red btn-block mb-4">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

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