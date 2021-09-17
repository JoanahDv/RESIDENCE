<?php $title = "favorite"; ?>
<?php ob_start(); ?>
<section id="ProfileHome" action="index.php?action=favorite" method="POST">
    <section id="favoriteTable">

        <section id="favoriteList">
            <h1>YOUR FAVS</h1>

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
                    <?php foreach ($favorites as $favorite) { ?>
                        <tr class="mobile_row">
                            <td>Station Name</td>
                            <td>

                                <h4><?php echo $favorite['station_name'] ?></h4>
                            </td>
                        </tr>
                        <tr class="mobile_row">
                            <td>City Name</td>
                            <td>
                                <p><?php echo $favorite['city_name'] ?></p>
                            </td>
                        </tr>
                        <tr class="mobile_row">
                            <td>Distance</td>
                            <td>
                                <p><?php echo $favorite['travel_time'] ?></p>
                            </td>
                        </tr>



                        <tr class="mobile_row last_row">
                            <!-- FORM TO DELETE COMMENT -->
                            <div class="favoriteAction">
                                <td>Action</td>
                                <td>

                                    <form action="index.php?action=deleteFavorite" method="post">
                                        <input type="hidden" value="<?php echo $favorite['id'] ?>" name="id" />
                                        <input type="submit" value="Delete" />
                                    </form>
                                </td>
                            </div>
                        </tr>

                        <tr class="desktop_row">
                            <div class="favorite_content">
                                <td>
                                    <p><?php echo $favorite['station_name'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $favorite['city_name'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $favorite['travel_time'] ?></p>
                                </td>
                            </div>

                            <td>
                                <!-- FORM TO DELETE and REPLY MESSAGES -->
                                <div class="favoriteAction">
                                    <form action="index.php?action=deleteFavorite" method="post">
                                        <input type="hidden" value="<?php echo $favorite['id'] ?>" name="id" />
                                        <input type="submit" value="Delete" />
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </section>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>