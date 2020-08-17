<?php include('includes/header.php');
include('includes/nav.php');
if (test_input(isset($_GET['m']))) {
    $message = test_input($_GET['m']);
}

?>


<div id="register" class="bg-image shadow-2-strong pb-5">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div id="message">
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript">
    var message = '<?php if (isset($message)) echo $message; ?>';


    if (message == "register") {
        $.ajax({
            type: "GET",
            url: "ajax/messages/registerSuccess.php",
        }).done(function(data) {
            $("#message").html(data);
        });
    } else if (message == "contact") {
        $.ajax({
            type: "GET",
            url: "ajax/messages/contactSuccess.php",
        }).done(function(data) {
            $("#message").html(data);
        });
    } else if (message == "book") {
        $.ajax({
            type: "GET",
            url: "ajax/messages/bookingSuccess.php",
        }).done(function(data) {
            $("#message").html(data);
        });
    } else if (message == "donation") {
        $.ajax({
            type: "GET",
            url: "ajax/messages/donationSuccess.php",
        }).done(function(data) {
            $("#message").html(data);
        });
    } else {
        location = 'index.php';
    }
</script>


<?php include('includes/footer.php'); ?>