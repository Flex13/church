<?php include('class/userProfile.php') ?>

<section>
    <div class=" mx-auto text-center mb-4" style="max-width: 700px;">
        <div class="card-body">

            <form id="user_form">
                <h1 class="section-heading text-center mb-4">Update Profile</h1>
                <input type="hidden" id="userID" name="userID" value="<?php if (isset($_POST['userID'])) echo $_POST['userID']; ?>" />
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" name="name" value="<?php if (isset($name)) echo $name; ?>" class="form-control" placeholder="First Name" required />
                            <div class="name-error error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" id="surname" name="surname" value="<?php if (isset($surname)) echo $surname; ?>" class="form-control" placeholder="Surname" required />
                            <div class="surname-error error"></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>" class="form-control" placeholder="Email" required />
                            <div class="email-error error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Cell</label>
                        <div class="form-group">
                            <input type="number" id="cell" name="cell" value="<?php if (isset($cell)) echo $cell; ?>" class="form-control" placeholder="Cell" required />
                            <div class="cell-error error"></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group">
                        <label>Street Adddress</label>
                        <input type="text" placeholder="Street Address" value="<?php if (isset($street)) echo $street; ?>" name="address" id="address" class="form-control" required />
                        <div class="street-error error"></div>
                    </div> <!-- form-group// -->
                </div>


                <!-- Submit button -->
                <button type="button" id="submit" class="btn btn-success btn-block mb-2">
                    Update
                </button>

                <!-- Submit button -->
                <a href="profile.php" class="btn btn-danger btn-block ">
                    Back
                </a>
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
        var address = "";
        var cell_reg = /^[0-9]+$/i;
        var name_reg = /^/i;
        var email_reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;



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
                $(".email-error").html("");
                $("#email").addClass("border-green");
                $("#email").removeClass("border-red");
                email = email_store;
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



        // === Shop Cell Validations === 
        $("#address").focusout(function() {
            var address_store = $.trim($("#address").val());
            if (address_store.length == "") {
                $(".address-error").html("Address is required!");
                $("#address").addClass("border-red");
                $("#address").removeClass("border-green");
                address = "";
            } else if (name_reg.test(address_store)) {
                $(".address-error").html("");
                $("#address").addClass("border-green");
                $("#address").removeClass("border-red");
                address = address_store;
            } else {
                $(".address-error").html("Wrong Address format!");
                $("#address").addClass("border-red");
                $("#address").removeClass("border-green");
                address = "";
            }

        }) //kasi Name Validations



        $("#submit").click(function(event) {
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

            if (cell.length == "") {
                $(".cell-error").html("Cell is required!");
                $("#cell").addClass("border-red");
                $("#cell").removeClass("border-green");
                cell = "";
            }

            if (email.length == "") {
                $(".email-error").html("Email is required!");
                $("#email").addClass("border-red");
                $("#email").removeClass("border-green");
                email = "";
            }

            if (address.length == "") {
                $(".address-error").html("Address is required!");
                $("#address").addClass("border-red");
                $("#address").removeClass("border-green");
                address = "";
            }


            if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && address.length != "") {

                $.ajax({
                    type: 'POST',
                    url: 'ajax/user/api/userUpdate.php',
                    data: $("#user_form").serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        $(".button-error").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                    },
                    success: function(feedback) {

                        if (feedback['status'] == "1") {
                            Swal.fire({
                                title: 'Profile Updated',
                                icon: 'success',
                                showConfirmButton: false,
                            });
                            location = feedback.message;
                        } else if (feedback['error'] == "login") {
                            Swal.fire({
                                title: 'Login to Order',
                                icon: 'warning',
                                showConfirmButton: false,
                            });
                            setTimeout(function() {
                                location = 'login.php';
                            }, 1000);
                        }
                    }
                })
            }


        })

    });
</script>