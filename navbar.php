<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">The Paws Center</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/paws">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/paws/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/paws/adopt.php">Adopt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>