<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<header>
    <!-- Background image -->
    <div id="events" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-white">
                    <h1 class="text-center text-warning my-0">Ministries</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>


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