<section>
    <div class=" mx-auto text-center mb-4" style="max-width: 700px;">
        <div class="card-body">

            <form id="booking_form">
                <h1 class="section-heading text-center mb-4">Book Appointment</h1>
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
                    <label>Booking Date</label>
                    <input type="date" id="date" name="date" class="form-control" required />
                    <div class="date-error error"></div>
                </div> <!-- form-group// -->

                <div class="form-group mb-4">
                    <label>Booking Time</label>
                    <input type="time" id="time" name="time" class="form-control" required />
                    <div class="time-error error"></div>
                </div> <!-- form-group// -->

                <div class="form-group mb-4">
                    <label>Select Pastor for Appointment</label>
                    <select id="pastor" name="pastor" class="form-control" required>
                        <option>Select</option>
                        <option value="Peter">Pastor Peter Chinyani</option>
                        <option value="Raymond">Pastor Raymond Musonge</option>
                        <option value="Remy">Pastor Remy Mutombo</option>
                    </select>
                    <div class="pastor-error error"></div>
                </div>


                <div class="form-group mb-4">
                    <label>Extra information about booking</label>
                    <textarea class="form-control" id="comment" name="comment" cols="5" rows="5" placeholder="Extra information about appointment?"></textarea>
                </div>

                <!-- Submit button -->
                <button type="button" id="submit" class="btn btn-success btn-block mb-2">
                    Book Appointment
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
        $("#date").focusout(function() {
            var date_store = $.trim($("#date").val());
            if (date_store.length == "") {
                $(".date-error").html("Date is required!");
                $("#date").addClass("border-red");
                $("#date").removeClass("border-green");
                date = "";
            } else if (name_reg.test(date_store)) {
                $(".date-error").html("");
                $("#date").addClass("border-green");
                $("#date").removeClass("border-red");
                date = date_store;
            } else {
                $(".date-error").html("Wrong Date format!");
                $("#date").addClass("border-red");
                $("#date").removeClass("border-green");
                date = "";
            }

        }) //kasi Name Validations

        // === Shop Cell Validations === 
        $("#time").focusout(function() {
            var time_store = $.trim($("#time").val());
            if (time_store.length == "") {
                $(".time-error").html("Time is required!");
                $("#time").addClass("border-red");
                $("#time").removeClass("border-green");
                time = "";
            } else if (name_reg.test(time_store)) {
                $(".time-error").html("");
                $("#time").addClass("border-green");
                $("#time").removeClass("border-red");
                time = time_store;
            } else {
                $(".time-error").html("Wrong time format!");
                $("#time").addClass("border-red");
                $("#time").removeClass("border-green");
                time = "";
            }

        }) //kasi Name Validations

        $("#pastor").focusout(function() {
            var pastor_store = $.trim($("#pastor").val());
            if (pastor_store.length == "") {
                $(".pastor-error").html("Pastor is required!");
                $("#pastor").addClass("border-red");
                $("#pastor").removeClass("border-green");
                pastor = "";
            } else if (name_reg.test(pastor_store)) {
                $(".pastor-error").html("");
                $("#pastor").addClass("border-green");
                $("#pastor").removeClass("border-red");
                pastor = pastor_store;
            } else {
                $(".pastor-error").html("Please Select Pastor");
                $("#pastor").addClass("border-red");
                $("#pastor").removeClass("border-green");
                pastor = "";
            }

        }) //townValidations


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

            if (date.length == "") {
                $(".date-error").html("Date is required!");
                $("#date").addClass("border-red");
                $("#date").removeClass("border-green");
                date = "";
            }

            if (time.length == "") {
                $(".time-error").html("Time is required!");
                $("#time").addClass("border-red");
                $("#time").removeClass("border-green");
                time = "";
            }

            if (pastor.length == "") {
                $(".pastor-error").html("Pastor is required!");
                $("#pastor").addClass("border-red");
                $("#pastor").removeClass("border-green");
                pastor = "";
            }





            if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && time.length != "" && date.length != "" && pastor.length != "") {

                $.ajax({
                    type: 'POST',
                    url: 'ajax/book/api/booking.php',
                    data: $("#booking_form").serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        $(".button-error").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                    },
                    success: function(feedback) {

                        if (feedback['status'] == "1") {
                            Swal.fire({
                                title: 'Appointment Booked',
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