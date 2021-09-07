<?php $title = "favorite"; ?>
<?php ob_start(); ?>

<section id="ProfileHome" action="index.php?action=favorites" method="POST">

    <div class="dashboardtitles">
        <h1> Your Saved destinations!</h1>
    </div>
    <table class="table">
        <thead>
            <tr class="desktop_row">
                <th> Station Name</th>
                <th>City Name</th>
                <th>Distance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="mobile_row">
                <td>Station Name</td>
                <td>
                </td>
            </tr>
            <tr class="mobile_row">
                <td>City Name</td>
                <td>
        
                </td>
            </tr>
            <tr class="mobile_row">
                <td>Distance</td>
                <td>     
                </td>
            </tr>
    </table>

</section>


<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>