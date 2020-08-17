<section>
    <div class=" mx-auto text-center mb-4" style="max-width: 700px;">
        <div class="card-body">

            <form id="donation_form">
                <h1 class="section-heading text-center mb-4">Donate</h1>
                <input type="hidden" id="userID" name="userID" value="<?php if(isset($_POST['userID'])) echo $_POST['userID']; ?>" />
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

                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                            <div class="email-error error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" id="cell" name="cell" class="form-control" placeholder="Cell" required />
                            <div class="cell-error error"></div>
                        </div>
                    </div>
                </div>



                <div class="form-group mb-4">
                    <label>Amount</label>
                    <input type="number" id="amount" name="amount" class="form-control" placeholder="R" required />
                    <div class="amount-error error"></div>
                </div> <!-- form-group// -->



                <div class="form-group mb-4">
                    <label>Message</label>
                    <textarea class="form-control" id="message" name="message" cols="5" rows="5" placeholder="Message"></textarea>
                </div>

                <!-- Submit button -->
                <button type="button" id="submit" class="btn btn-success btn-block mb-2">
                    Make Donation
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
        $("#amount").focusout(function() {
            var amount_store = $.trim($("#amount").val());
            if (amount_store.length == "") {
                $(".amount-error").html("Amount is required!");
                $("#amount").addClass("border-red");
                $("#amount").removeClass("border-green");
                amount = "";
            } else if (cell_reg.test(amount_store)) {
                $(".amount-error").html("");
                $("#amount").addClass("border-green");
                $("#amount").removeClass("border-red");
                amount = amount_store;
            } else {
                $(".amount-error").html("Wrong Amount format!");
                $("#amount").addClass("border-red");
                $("#amount").removeClass("border-green");
                amount = "";
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

            if (amount.length == "") {
                $(".amount-error").html("Amount is required!");
                $("#amount").addClass("border-red");
                $("#amount").removeClass("border-green");
                amount = "";
            }


            if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && amount.length != "") {

                $.ajax({
                    type: 'POST',
                    url: 'ajax/donate/api/donate.php',
                    data: $("#donation_form").serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        $(".button-error").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                    },
                    success: function(feedback) {

                        if (feedback['status'] == "1") {
                            Swal.fire({
                                title: 'Dontion Done',
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