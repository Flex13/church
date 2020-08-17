<section>
    <div class=" mx-auto text-center mb-4" style="max-width: 500px;">
        <div class="card-body">

            <form id="login_form">

                <h1 class="section-heading text-center mb-4">Login</h1>
                <!-- Email input -->
                <div class="form-group mb-4">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                    <div class="email-error error"></div>
                </div>

                <!-- Password input -->
                <div class="form-group mb-4">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                    <div class="password-error error"></div>
                </div>


                <div class="form-group mb-4">
                    <div class="col text-center">
                        <!-- Simple link -->
                        <a href="forgot.php">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" id="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</section>


<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var email = "";
        var password = "";


        $("#email").focusout(function() {
            var email_store = $.trim($("#email").val());
            if (email_store.length == "") {
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                $(".email-error").html("Email is required!");
                email = "";
            } else {
                $("#email").addClass("border-green");
                $("#email").removeClass("border-red");
                $(".email-error").html("");
                email = email_store;
            }
        }) //close email validations

        // === Password Validations ===
        $("#password").focusout(function() {
            var password_store = $.trim($("#password").val());
            if (password_store.length == "") {
                $("#password").addClass("border-red");
                $("#password").removeClass("border-green");
                $(".password-error").html("Password is required!");
                password = "";
            } else {
                $("#password").addClass("border-green");
                $("#password").removeClass("border-red");
                $(".password-error").html("");
                password = password_store;
            }
        }); //Password validation close


        $("#submit").click(function(event) {
            // Stop form from submitting normally
            event.preventDefault();

            if (email.length == "") {
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                $(".email-error").html("Email is required!");
                email = "";
            }
            if (password.length == "") {
                $("#password").addClass("border-red");
                $("#password").removeClass("border-green");
                $(".password-error").html("Password is required!");
                loginPassword = "";
            }

            if (email.length != "" && email.length != "") {
                $.ajax({
                    type: 'POST',
                    url: 'ajax/registration/api/login.php?login=true',
                    data: $("#login_form").serialize(),
                    dataType: 'JSON',
                    success: function(feedback) {
                        if (feedback['error'] == 'success') {
                            $(".email-error").html("");
                            $("#password").addClass("border-green");
                            $("#email").addClass("border-green");
                            $("#password").removeClass("border-red");
                            $("#email").removeClass("border-red");
                            Swal.fire({
                                title: 'Login Successfull',
                                icon: 'success',
                                showConfirmButton: false,
                            });
                            setTimeout(function() {
                                location = 'profile.php';
                            }, 1000);

                        } else if (feedback['error'] == 'no_password') {
                            $("#password").addClass("border-red");
                            $("#password").removeClass("border-green");
                            $(".password-error").html(feedback['msg']);
                        } else if (feedback['error'] == 'no_email') {
                            $("#email").removeClass("border-green");
                            $("#email").addClass("border-red");
                            $(".email-error").html(feedback['msg']);
                        }
                    }
                })
            }
        });
    });
</script>