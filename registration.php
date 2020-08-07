<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); 

if (test_input(isset($_GET['m']))) {
    $message = test_input($_GET['m']);
}

?>





<!--Main layout-->
<main class="sidebar-layout mt-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->

            <div id="registration"></div>
       

                <!--Section: Content-->
            </div>

            <div class="col-md-4">

                <?php include('includes/sidebar.php'); ?>

            </div>
        </div>

    </div>
</main>
<!--Main layout-->

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var message = '<?php if (isset($message)) echo $message; ?>';


            if (message == "login") {

        $.ajax({
            type: "POST",
            url: "ajax/registration/login.php",
        }).done(function(data) {
            $("#registration").html(data);
        });

            } else if (message == "register"){

                $.ajax({
            type: "POST",
            url: "ajax/registration/register.php",
        }).done(function(data) {
            $("#registration").html(data);
        });
            }
    });
</script>


<?php include('includes/footer.php'); ?>

