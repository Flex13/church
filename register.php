<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<!--Main layout-->
<div id="register" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
<!--Main layout-->
<main class="sidebar-layout mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">

        
            
                <div class="text-center   mb-4" style="width: 650px">
                    <div class="card-body">
                    <h3 class="section-heading text-center mb-4">Become a member</h3>
                        <!--Section: Content-->
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                            <form class="bg-white rounded shadow-5-strong p-5">
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
                    </div>
                </div>
                <!--Section: Content-->
            </div>
    </div>
</main>
<!--Main layout-->
</div>
</div>


<?php include('includes/footer.php'); ?>