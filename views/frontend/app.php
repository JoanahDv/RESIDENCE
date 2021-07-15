<?php $title = "app"; ?>
<?php ob_start(); ?>

<section >
<!-- <figure id="logohead"> <img src="public/images/logohouse.png" alt="Website Logo" />
</figure> -->
<div id="app">
    <form class="map_side">

        <p><i class="fas fa-map-marker-alt"></i> Location</p>
        <select name="city" id="city">
            <option value="Paris">Paris</option>
        </select>
        <p><i class="far fa-clock"></i> Travelling time</p>
        <p><i class="fas fa-users"> Population</i></p>

        <div class="models">
            <div class="checkbox">
                <label><input type="checkbox" rel="seaside" onchange="change();" /> Seaside</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="mountain" onchange="change();" /> Mountain</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="countryside" onchange="change();" /> Countryside</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="city" onchange="change();" /> City</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="park" onchange="change();" /> Park</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="lake" onchange="change();" /> Lake</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="fibre" onchange="change();" /> Fibre</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" rel="no fibre" onchange="change();" /> Without fibre</label>
            </div>
    </form>


    </div>


    <div id="map"></div>
</div>

</section>
<!-- <figure>
            <img src="public/images/logohouse.png" alt="The website logo">
        </figure> -->
<?php $content = ob_get_clean(); ?>
<?php require 'views/frontend/template.php'; ?>