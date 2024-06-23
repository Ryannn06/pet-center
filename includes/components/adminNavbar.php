<?php

    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
?>

<nav class="navbar navbar-expand-lg navbar-light navbar-admin card">
    <div class="container-fluid">
        <a class="navbar-brand text-muted" href="#">The Paws Center </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-muted" href="/paws/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="/paws/pet_profile.php">Pet Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="/paws/appointment.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Accounts</a>
                </li>
                <?php
                    if(isset($_SESSION['user_account'])){
                        echo '<li class="nav-item">
                                <a class="nav-link text-muted" href="/paws/includes/logout.inc.php">Logout</a>
                                </li>';
                    } else {
                        echo '<li class="nav-item">
                                    <a class="nav-link text-muted" href="/paws/login.php">Login
                                    </a>
                                </li>';
                    }
                ?>
                
            </ul>
        </div>
    </div>
</nav>