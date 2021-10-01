<?php $title = "favorite"; ?>
<?php ob_start(); ?>
<section id="ProfileHome">
    <!-- action="index.php?action=favorite" method="POST" -->

    <h1>YOUR FAVS</h1>
    <div class="favoriteList">
        <table class="table">
            <thead>
                <tr class="desktop_row">
                    <th> Station Name</th>
                    <th>City Name</th>
                    <th>Travel time</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($favorites as $favorite) { ?>
                    <tr class="mobile_row">
                        <td>Station Name</td>
                        <td>
                            <?php echo $favorite['station_name'] ?>
                        </td>
                    </tr>
                    <tr class="mobile_row">
                        <td>City Name</td>
                        <td>
                            <?php echo $favorite['city_name'] ?>
                        </td>
                    </tr>
                    <tr class="mobile_row">
                        <td>Travel time</td>
                        <td>
                        <?php echo floor($favorite['travel_time'])." hr ".(int)(60/(1/($favorite['travel_time']-floor($favorite['travel_time']))))." min"; ?>
                        </td>
                    </tr>

                    <tr class="mobile_row last_row">
                        <!-- FORM TO DELETE  -->
                        <td>Action</td>
                        <td>
                            <form action="index.php?action=deleteFavorite" method="post">
                                <input type="hidden" value="<?php echo $favorite['id'] ?>" name="id" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>

                    </tr>

                    <tr class="desktop_row">
                        <td>
                            <?php echo $favorite['station_name'] ?>
                        </td>
                        <td>
                            <?php echo $favorite['city_name'] ?>
                        </td>
                        <td>
                            <?php echo floor($favorite['travel_time'])." hr ".(int)(60/(1/($favorite['travel_time']-floor($favorite['travel_time']))))." min"; ?>
                        </td>
                        <td>
                            <!-- FORM TO DELETE  -->
                            <form action="index.php?action=deleteFavorite" method="post">
                                <input type="hidden" value="<?php echo $favorite['id'] ?>" name="id" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>