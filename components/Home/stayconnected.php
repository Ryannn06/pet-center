<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
?>

<div class="my-padding row">
    <div class="col-md-6">
        <h2 class="pb-3">Get our Latest News</h2>
        <p class="pb-3 text-muted">Stay up-to-date with our latest news and updates, as we continue to make
        strides in our mission.</p>
        <form class="d-flex col-md-12">
            <input class="form-control me-2" type="email" placeholder="email address" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Submit</button>
        </form>
    </div>
    <div class="col-md-6 row">
    </div>
</div>