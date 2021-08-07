<?php $title = "app"; ?>
<?php ob_start(); ?>

<section>

    <H1>
        WELCOME TO YOUR PAGE
    </H1>

    <!-- <figure id="logohead"> <img src="public/images/logohouse.png" alt="Website Logo" />
</figure> -->
    <div id="app" class="appPage" action="/index.php?action=app">

        <form id="filters_form" class="map_side" action="/index.php?action=filter_stations">
            <div>
                <p><i class="fas fa-map-marker-alt"></i> Location</p>
                <select name="city" id="city">
                    <option value="Paris">Paris</option>
                </select>
            </div>
            <br>
            <div>
                <p><i class="far fa-clock"></i> Travelling time</p>

                <label for="maxTravelTime"> maximum</label>
                <input type="text" name="maxTravelTime" />

                <label for="minTravelTime">minimum</label>
                <input type="text" name="minTravelTime" />
            </div>
            <br>
            </br>
            <div class="models">
                <h3>Filters</h3>
                <div class="checkbox">
                    <label><input type="checkbox" rel="seaside" name="seaside" /> Seaside</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="mountain" /> Mountain</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="countryside" /> Countryside</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="city" /> City</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="park" /> Park</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="lake" /> Lake</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="fibre" /> Fibre</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" rel="no fibre" /> Without fibre</label>
                </div>
                <br>
                <input type="submit" class="filter_button" value="Filter" />
        </form>

    </div>

    <div id="map"></div>

    <div class="destination-info">
        <h3 class="table_Title"> DESTINATION INFORMATION</h3>
        <div class="info_text"> <i>Please select on the map to display the information for that chosen place.</i> </div>
        <p class="informations-stations">Name of place : <span id="name" class="status"></span></p>
        <p class="informations-stations">Population: <span id="population" class="status"></span></p>
        <p class="informations-stations">Traveling time: <span id="travelling_time" class="tatus"></span></p>

    </div>

    </div>

</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>