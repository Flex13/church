<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <h4 class="sidebar-section text-center mb-4">We would love to hear from you</h4>
        <form id="contact_form">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required />
                        <div class="name-error error"></div>
                    </div>
                </div>
                <div class="col">
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

            <!-- Message input -->
            <div class="form-group mb-4">
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                <div class="message-error error"></div>
            </div>

            <!-- Submit button -->
            <button type="button" id="submit" class="btn btn-primary btn-block mb-4">
                Send Message
            </button>
        </form>
    </div>
</div>


<script type="text/javascript" language="javascript">
    $(document).ready(function() {
                var name = "";
                var surname = "";
                var email = "";
                var cell = "";
                var cell_reg = /^[0-9]+$/i;
                var name_reg = /^[A-Za-z ]+$/i;


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
                        $(".name-error").html("Invalid Name Format!");
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
                        $(".surname-error").html("Invalid Surname Format!");
                        $("#surname").addClass("border-red");
                        $("#surname").removeClass("border-green");
                        surname = "";
                    }

                }) //Username Validations

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

                }) //kasi Name Validations// === Shop Cell Validations === 
                $("#message").focusout(function() {
                    var message_store = $.trim($("#message").val());
                    if (message_store.length == "") {
                        $(".message-error").html("Message is required!");
                        $("#message").addClass("border-red");
                        $("#message").removeClass("border-green");
                        message = "";
                    } else if (message_reg.test(message_store)) {
                        $(".message-error").html("");
                        $("#message").addClass("border-green");
                        $("#message").removeClass("border-red");
                        message = message_store;
                    } else {
                        $(".message-error").html("Wrong Messsage format!");
                        $("#message").addClass("border-red");
                        $("#message").removeClass("border-green");
                        message = "";
                    }

                }) //kasi Name Validations



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

                        if (message.length == "") {
                            $(".mesage-error").html("Message is required!");
                            $("#mesage").addClass("border-red");
                            $("#mesage").removeClass("border-green");
                            message = "";
                        }

                        if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && message.length != "") {
                            $.ajax({
                                type: 'POST',
                                url: 'ajax/contact/api/contact.php?contact=true',
                                data: $("#contact_form").serialize(),
                                dataType: 'JSON',
                                success: function(feedback) {
                                    if (feedback['status'] == '1') {
                                        Swal.fire({
                                            title: 'Message Sent',
                                            icon: 'success',
                                            showConfirmButton: false,
                                        });
                                        setTimeout(function() {
                                            location = 'message.php?m=contact';
                                        }, 1000);
                                    }
                                }
                            })
                        }
                    })
                });
</script>