<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>



<!--Main layout-->
<main class="sidebar-layout mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!--Section: Content-->

                <div id="ministry"></div>

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
            url: "ajax/ministry/ministry.php",
        }).done(function(data) {
            $("#ministry").html(data);
        });
    });
</script>


<?php include('includes/footer.php'); ?>