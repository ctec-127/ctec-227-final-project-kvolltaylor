<?php // Filename: footer.inc.php ?>
<!-- PHP variables that were initiated in the config include file are echoed out here -->
<div class="col-12">
    <div class="bg-white col-4 mx-auto px-2">
        <p class="text-center mt-4">
            <?php echo '<span class="font-weight-bold">' . $app_name . ' - Version ' . $app_version . "</span><br>" . $app_copyright;?>
        </p>
    </div>
</div>