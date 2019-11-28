<?php
	
$tokyoCityId = "1850147";
$nagoyaCityId = "1856057";
$yokohamaCityId = "1848354";
$kyotoCityId = "1857910";
$osakaCityId = "1853909";
$sapporoCityId = "2130404";

$city = "Osaka,JP";

function getWeather($cityId)
{
	$apiKey = "9c4f101ad137c1aa9824bbd66dbed19f";

	$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($ch);

	curl_close($ch);
	$data = json_decode($response);
	return $data;
}
?>
  
  
  <!-- Cities Slider -->
    <div class="cities_slider_container">
      <div class="owl-carousel owl-theme cities_slider">
        
        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/tokyo.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Tokyo,JP&city_id=1850147">Tokyo</a></h1>
			<br>	
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($tokyoCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($tokyoCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($tokyoCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($tokyoCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($tokyoCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($tokyoCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>

        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/yokohama.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Yokohama,JP&city_id=1848354">Yokohama</a></h1>
			<br>
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($yokohamaCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($yokohamaCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($yokohamaCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($yokohamaCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($yokohamaCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($yokohamaCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>

        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/kyoto.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Kyoto,JP&city_id=1857910">Kyoto</a></h1>
			<br>
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($kyotoCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($kyotoCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($kyotoCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($kyotoCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($kyotoCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($kyotoCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>
		
		<!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/osaka.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Osaka,JP&city_id=1853909">Osaka</a></h1>
			<br>
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($osakaCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($osakaCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($osakaCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($osakaCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($osakaCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($osakaCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>
		
		<!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/sapporo.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Sapporo,JP&city_id=2130404">Sapporo</a></h1>
			<br>
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($sapporoCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($sapporoCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($sapporoCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($sapporoCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($sapporoCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($sapporoCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>
		
		<!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/nagoya.jpg)"></div>
          <div class="cities_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="city_info.php?city=Nagoya,JP&city_id=1856057">Nagoya</a></h1>
			<br>
            <div><?php echo date("jS F, Y", time()); ?></div>
            <div><?php echo ucwords(getWeather($nagoyaCityId)->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($nagoyaCityId)->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($nagoyaCityId)->main->temp_max; ?>°C - <span
                class="min-temperature"><?php echo getWeather($nagoyaCityId)->main->temp_min; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($nagoyaCityId)->main->humidity; ?> %</div>
            <div>Wind: <?php echo getWeather($nagoyaCityId)->wind->speed; ?> km/h</div>
        </div>
          </div>
        </div>

      </div>
    </div>

  </div>    

      </div>
    </div>
  </div>