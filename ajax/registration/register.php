<section>
    <div class=" mx-auto text-center mb-4" style="max-width: 700px;">
        <div class="card-body">

            <form id="userRegister_form">
                <h1 class="section-heading text-center mb-4">Become a member</h1>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="First Name" required />
                            <div class="name-error error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Surname" required />
                            <div class="surname-error error"></div>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-group mb-4">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                    <div class="email-error error"></div>
                </div>

                <!-- Number input -->
                <div class="form-group mb-4">
                    <input type="number" id="cell" name="cell" class="form-control" placeholder="Cell" required />
                    <div class="cell-error error"></div>
                </div>

                <div class="form-group mb-4">
                    <select id="gender" name="gender" class="form-control" required>
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="gender-error error"></div>
                </div>


                <div class="form-group mb-4">
                    <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control" required />
                    <div class="password-error error"></div>
                </div> <!-- form-group// -->

                <div class="form-group mb-4">
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="passwordc" class="form-control" required />
                    <div class="passwordc-error error"></div>
                </div>

                <!-- Submit button -->
                <button type="button" id="submit" class="btn btn-success btn-block mb-4">
                    Register
                </button>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var name = "";
        var surname = "";
        var email = "";
        var cell = "";
        var password = "";
        var passwordc = "";
        var cell_reg = /^[0-9]+$/i;
        var name_reg = /^/i;
        var email_reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var password_reg = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;



        $("#name").focusout(function() {
            var name_store = $.trim($("#name").val());
            if (name_store.length == "") {
                $(".name-error").html("Name is required!");
                $("#name").addClass("border-red");
                $("#name").removeClass("border-green");
                name = "";
            } else if (name_reg.test(name_store)) {
                $(".name-error").html("");
                $("#name").addClass("border-green");
                $("#name").removeClass("border-red");
                name = name_store;
            } else {
                $(".name-error").html("Integer is not allowed!");
                $("#name").addClass("border-red");
                $("#name").removeClass("border-green");
                name = "";
            }

        }) //Username Validations

        $("#surname").focusout(function() {
            var surname_store = $.trim($("#surname").val());
            if (surname_store.length == "") {
                $(".surname-error").html("Surname is required!");
                $("#surname").addClass("border-red");
                $("#surname").removeClass("border-green");
                surname = "";
            } else if (name_reg.test(surname_store)) {
                $(".surname-error").html("");
                $("#surname").addClass("border-green");
                $("#surname").removeClass("border-red");
                surname = surname_store;
            } else {
                $(".surname-error").html("Integer is not allowed!");
                $("#surname").addClass("border-red");
                $("#surname").removeClass("border-green");
                surname = "";
            }

        }) //Username Validations

        // * === Email Validation === *
        $("#email").focusout(function() {
            var email_store = $.trim($("#email").val());
            if (email_store.length == "") {
                $(".email-error").html("Email is required!");
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                email = "";
            } else if (email_reg.test(email_store)) {
                $.ajax({
                    type: 'POST',
                    url: 'ajax/registration/api/register.php',
                    dataType: 'JSON',
                    beforeSend: function() {
                        $(".email-error").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                    },
                    data: {
                        'check_email': email_store
                    },
                    success: function(feedback) {
                        setTimeout(function() {
                            if (feedback['error'] == 'email_success') {
                                $(".email-error").html("<div class='text-success'><i class='fa fa-check-circle'></i> available</div>");
                                $("#email").addClass("border-green");
                                $("#email").removeClass("border-red");
                                email = email_store;
                            } else if (feedback['error'] == 'email_fail') {
                                $(".email-error").html("Sorry this email already exist!");
                                $("#email").addClass("border-red");
                                $("#email").removeClass("border-green");
                                email = "";
                            }
                        }, 3000);

                    }
                });
            } else {
                $(".email-error").html("Invalid Email Formate!");
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                email = "";
            }
        }) //Close Email Validations

        // === Shop Cell Validations === 
        $("#cell").focusout(function() {
            var cell_store = $.trim($("#cell").val());
            if (cell_store.length == "") {
                $(".cell-error").html("Cell is required!");
                $("#cell").addClass("border-red");
                $("#cell").removeClass("border-green");
                cell = "";
            } else if (cell_reg.test(cell_store)) {
                $(".cell-error").html("");
                $("#cell").addClass("border-green");
                $("#cell").removeClass("border-red");
                cell = cell_store;
            } else {
                $(".cell-error").html("Wrong Cell format!");
                $("#cell").addClass("border-red");
                $("#cell").removeClass("border-green");
                cell = "";
            }

        }) //kasi Name Validations





        // === town Validations === 
        $("#gender").focusout(function() {
            var gender_store = $.trim($("#gender").val());
            if (gender_store.length == "") {
                $(".gender-error").html("Gender is required!");
                $("#gender").addClass("border-red");
                $("#gender").removeClass("border-green");
                gender = "";
            } else if (name_reg.test(gender_store)) {
                $(".gender-error").html("");
                $("#gender").addClass("border-green");
                $("#gender").removeClass("border-red");
                gender = gender_store;
            } else {
                $(".gender-error").html("Please Select Gender");
                $("#gender").addClass("border-red");
                $("#gender").removeClass("border-green");
                gender = "";
            }

        }) //townValidations







        // Validate Password 
        $("#password").focusout(function() {
            var password_store = $.trim($("#password").val());
            if (password_store.length == "") {
                $(".password-error").html("Password is required!");
                $("#password").addClass("border-red");
                $("#password").removeClass("border-green");
                password = "";
            } else if (password_reg.test(password_store)) {
                $(".password-error").html("<div class='text-success'><i class='fa fa-check-circle'></i> Your Password Is Strong!</div>");
                $("#password").addClass("border-green");
                $("#password").removeClass("border-red");
                password = password_store;
            } else {
                $(".password-error").html("8 characters or longer. Combine upper and lowercase letters and numbers");
                $("#password").addClass("border-red");
                $("#password").removeClass("border-green");
                password = "";
            }
        }) //Close Password Validations

        // Validate Confirm Password
        $("#passwordc").focusout(function() {
            var confirm_store = $.trim($("#passwordc").val());
            if (confirm_store.length == "") {
                $(".passwordc-error").html("Confirm Password is required!");
                $("#passwordc").addClass("border-red");
                $("#passwordc").removeClass("border-green");
                passwordc = "";
            } else if (confirm_store != password) {
                $(".passwordc-error").html("Password do not match!");
                $("#passwordc").addClass("border-red");
                $("#passwordc").removeClass("border-green");
                passwordc = "";
            } else {
                $(".passwordc-error").html("");
                $("#passwordc").addClass("border-green");
                $("#passwordc").removeClass("border-red");
                passwordc = confirm_store;
            }
        }) //Close Confirm Password







        $("#submit").click(function(event) {
            // Stop form from submitting normally
            event.preventDefault();

            if (name.length == "") {
                $(".name-error").html("Name is required!");
                $("#name").addClass("border-red");
                $("#name").removeClass("border-green");
                name = "";
            }

            if (surname.length == "") {
                $(".surname-error").html("Surname is required!");
                $("#surname").addClass("border-red");
                $("#surname").removeClass("border-green");
                surname = "";
            }

            if (email.length == "") {
                $(".email-error").html("Email is required!");
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                email = "";
            }

            if (cell.length == "") {
                $(".cell-error").html("Cell is required!");
                $("#cell").addClass("border-red");
                $("#cell").removeClass("border-green");
                cell = "";
            }

            if (gender.length == "") {
                $(".gender-error").html("Gender is required!");
                $("#gender").addClass("border-red");
                $("#gender").removeClass("border-green");
                gender = "";
            }



            if (password.length == "") {
                $(".password-error").html("Password is required!");
                $("#password").addClass("border-red");
                $("#password").removeClass("border-green");
                password = "";
            }

            if (passwordc.length == "") {
                $(".passwordc-error").html("Please confirm password!");
                $("#passwordc").addClass("border-red");
                $("#passwordc").removeClass("border-green");
                passwordc = "";
            }

            if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && gender.length != "" && password.length != "" && passwordc.length != "") {
                $.ajax({
                    type: 'POST',
                    url: 'ajax/registration/api/register.php?register=true',
                    data: $("#userRegister_form").serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        $(".button-error").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                    },
                    success: function(feedback) {
                        if (feedback['status'] == "1") {
                            location = feedback.message;
                        }
                    }
                })
            }
        });
    });
</script>