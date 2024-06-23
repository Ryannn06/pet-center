<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
?>

<div class="row my-padding-2">
    <div class="col-md-12">
        <h4 class="text-primary">Pet Profile</h4>
        <p class="text-muted">Here shows the profile for the pets rescued and found.</p>
    </div>
    <div class="col-md-12 pt-3">
        <div class="card p-4 table-responsive">
            <table id="appointment_table" class="table" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Date Rescued</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once ('./includes/database.inc.php');

                        $query = "SELECT"

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready( function () {
        $('#appointment_table').DataTable( {
            
        } );
    });
</script>