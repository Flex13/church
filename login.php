<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<!--Main layout-->
<div id="register" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
<main class="sidebar-layout mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">

            

            <div class="text-center   mb-4" style="width: 500px">
                <div class="card-body">
                <h3 class="section-heading text-center mb-4">Login</h3>
                    <!--Section: Content-->
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <form class="bg-white rounded shadow-5-strong p-5">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example2" class="form-control" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section: Content-->
        </div>
    </div>
</main>

</div>
</div>
<!--Main layout-->

<?php include('includes/footer.php'); ?>