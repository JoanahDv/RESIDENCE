<?php $title = "favorite"; ?>
<?php ob_start(); ?>
<section id="ProfileHome">
    <h1 class="favorite_title">YOUR FAVS</h1>
    <div class="favoriteList">
        <table class="desktop_table">
            <thead>
                <tr>
                    <th> Station Name</th>
                    <th>City Name</th>
                    <th>Travel time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($favorites as $favorite) { ?>

                    <tr class="desktop_body">
                        <td>
                            <?php echo $favorite['station_name'] ?>
                        </td>
                        <td>
                            <?php echo $favorite['city_name'] ?>
                        </td>
                        <td>
                            <?php echo floor($favorite['travel_time']) . " hr " . (int)(60 / (1 / ($favorite['travel_time'] - floor($favorite['travel_time'])))) . " min"; ?>
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
        <hr>
        <div class="pagination">
            <?php for ($pageNumber = 1; $pageNumber <= $numberOfPages; $pageNumber = $pageNumber + 1) { ?>
                <ul>
                    <li class="page-item">
                        <a class="page-link" href="index.php?action=favorite&page=<?php echo $pageNumber ?>">
                            <?php echo $pageNumber ?>
                        </a>
                    </li>
                </ul>
            <?php } ?>

        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>