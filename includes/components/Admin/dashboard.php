<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
?>

<div class="row my-padding-2">
    <div class="col-md-12">
        <h4 class="text-primary">Welcome back, <?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''?></h4>
        <p class="text-muted">Let's make this day productive</p>
    </div>
</div>