<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
    include_once ('includes/database.inc.php')
?>

<div class="row my-padding">
    <div class="col-md-12 row pb-5">
        <div class="col-md-6">
            <h2 class="pb-3">Pets Available for Adoption</h2>
            <form class="d-flex col-md-12">
                <input class="form-control me-2" type="search" placeholder="Search for available adoption..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="col-md-12 row">
        <?php
            $sql = "SELECT * FROM pet_profile WHERE status = 'waiting';";

            $result = mysqli_query($connect, $sql);
            $result_check = mysqli_num_rows($result);

            if ($result_check > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    //mysqli_fetch_assoc get rows and insert into $row array
                    $name = $row['name'] ;
                    $desc = $row['description'];

                    echo 
                        '<div class="col-md-3 pb-4">
                            <div class="card p-3">
                                <h5>'
                                  . $name .  
                               '</h5> 
                                <p class="text-muted">'
                                    . $desc .
                                '</p>
                                <a href="" title="">read more</a>  
                            </div>
                        </div>';

                }
            } else {
                echo 
                    '<div>
                        <div class="col-md-12 text center">
                            <h5>No available data to show</h5>
                        </div>
                    </div>';
            }

        ?>
    </div>
</div>