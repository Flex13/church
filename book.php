<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<!--Main layout-->
<main class="sidebar-layout mt-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <!--Section: Content-->

                <div id="book"></div>


                <!--Section: Content-->
            </div>

        </div>

    </div>
</main>
<!--Main layout-->

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var userID = '<?php if (isset($_SESSION['id'])) echo $_SESSION['id']; ?>';

        $.ajax({
            type: "POST",
            url: "ajax/book/book.php",
            data: {
                userID: userID
            }
        }).done(function(data) {
            $("#book").html(data);
        });
    });
</script>


<?php include('includes/footer.php'); ?>