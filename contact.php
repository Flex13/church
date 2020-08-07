<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>



<!--Main layout-->
<main class="sidebar-layout mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->

                <div id="contact"></div>

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
        $.ajax({
            type: "POST",
            url: "ajax/contact/contact.php",
        }).done(function(data) {
            $("#contact").html(data);
        });
    });
</script>


<?php include('includes/footer.php'); ?>