<?php include('includes/header.php'); ?>


    <div id="register" class="bg-image shadow-2-strong pb-5">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div id="profile">
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "ajax/user/profile.php",
        }).done(function(data) {
            $("#profile").html(data);
        });
    });
</script>


<?php include('includes/footer.php'); ?>