 <html lang="en">
 <html Accept-Language: en;q=0.8>
 

<?php

function getWeather($cityId)
{
	$apiKey = "9c4f101ad137c1aa9824bbd66dbed19f";

	$googleApiUrl = "http://api.openweathermap.org/data/2.5/forecast?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

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
	//mb_convert_encoding($data, "UTF-8", "Shift-JIS");

	return $data;
}

function getDetails($cityName)
{
	$client_id = "5KWVLTA3ENJ3RKRRGWWRLHKDE2EXJMHRHGQ5XHD52BRUCNAP";
	$client_secret = "KWA4TB4TIZW1SXMURKU3GB0EBMCIAYMPKWYN2PKBXQDYJVZG";
	$category_id = "4deefb944765f83613cdba6e";
	$ver = '20191125';
    
	$url = "https://api.foursquare.com/v2/venues/search?near=" . $cityName . "&limit=8&offset=1&client_id=5KWVLTA3ENJ3RKRRGWWRLHKDE2EXJMHRHGQ5XHD52BRUCNAP&client_secret=KWA4TB4TIZW1SXMURKU3GB0EBMCIAYMPKWYN2PKBXQDYJVZG&v=20191125";

    $curlhandle = curl_init();
	curl_setopt($curlhandle, CURLOPT_URL, $url);
	curl_setopt($curlhandle, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($curlhandle);
	curl_close($curlhandle);

	$data = json_decode($response);
	return $data;
}
?>

  <!-- Boxes -->
  

  <div class="app_right container_wrapper">
    <div class="container">
      <div class="row row-eq-height">

        <!-- Box 1 -->
        <div class="col-xl-6 order-xl-1 order-2">
          <div class="app_slider_container">
            <div class="owl-carousel owl-theme app_slider">
              
			   <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/tokyo.jpg)"></div>
              </div>

              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/nagoya.jpg)"></div>
              </div>

              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/sapporo.jpg)"></div>
              </div>
			  
            </div>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="col-xl-6 order-xl-2 order-1">
          <div class="app_left_content">
            <div class="section_title">
			<div>Tourist Spots</div>
              <h1>Visit near landmarks</h1>
            </div>
            <div class="app_text">
              <p>Here are the places near the city you can visit.</p>  
            </div>
			<div class="app_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><?php echo getDetails($city)->response->venues[0]->name;?>
				  <br>
				  Address: <?php echo getDetails($city)->response->venues[0]->location->address;?></span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><?php echo getDetails($city)->response->venues[1]->name;?>
				  <br>
				  Address: <?php echo getDetails($city)->response->venues[1]->location->address;?></span>
                </li>
				<li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><?php echo getDetails($city)->response->venues[3]->name;?>
				  <br>
				  Address: <?php echo getDetails($city)->response->venues[3]->location->address;?></span>
                </li>
				<li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><?php echo getDetails($city)->response->venues[4]->name;?>
				  <br>
				  Address: <?php echo getDetails($city)->response->venues[4]->location->address;?></span>
                </li>
              </ul>
            </div>
            <div class="app_price">Today:
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[0]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[0]->main->temp_max; ?>°C 
        </span>
        </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Info -->

  <div class="app_right container_wrapper">
    <div class="container">
      <div class="row row-eq-height">
	  
	  <!-- App Image -->
        <div class="col-xl-6 order-xl-1 order-2">
          <div class="app_slider_container">
            <div class="owl-carousel owl-theme app_slider">
              
			   <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/osaka.png)"></div>
              </div>

              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/yokohama.jpg)"></div>
              </div>

              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/kyoto.jpg)"></div>
              </div>
			  
            </div>
          </div>
        </div>
        
        <!-- Info Content -->
        <div class="col-xl-6">
          <div class="app_left_content">
            <div class="section_title">
              <div>Weather</div>
              <h1>Check the weather forecast</h1>
            </div>
            <div class="app_text">
              <p>Check the weather forecast today and be able to prepare in advance.</p>
            </div>
            <div class="app_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><div><?php echo getWeather($cityId)->list[0]->dt_txt; ?></div>
            <div><?php echo ucwords(getWeather($cityId)->list[0]->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[0]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[0]->main->temp_min; ?>°C - <span
                class="min-temperature"><?php echo getWeather($cityId)->list[0]->main->temp_max; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($cityId)->list[0]->main->humidity; ?> %</div>
        </div></span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><div><?php echo getWeather($cityId)->list[1]->dt_txt; ?></div>
            <div><?php echo ucwords(getWeather($cityId)->list[1]->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[1]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[1]->main->temp_min; ?>°C - <span
                class="min-temperature"><?php echo getWeather($cityId)->list[1]->main->temp_max; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($cityId)->list[1]->main->humidity; ?> %</div>
        </div></span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><div><?php echo getWeather($cityId)->list[2]->dt_txt; ?></div>
            <div><?php echo ucwords(getWeather($cityId)->list[2]->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[2]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[2]->main->temp_min; ?>°C - <span
                class="min-temperature"><?php echo getWeather($cityId)->list[2]->main->temp_max; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($cityId)->list[2]->main->humidity; ?> %</div>
        </div></span>
                </li>
				<li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><div><?php echo getWeather($cityId)->list[3]->dt_txt; ?></div>
            <div><?php echo ucwords(getWeather($cityId)->list[3]->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[3]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[3]->main->temp_min; ?>°C - <span
                class="min-temperature"><?php echo getWeather($cityId)->list[3]->main->temp_max; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($cityId)->list[3]->main->humidity; ?> %</div>
        </div></span>
                </li>
				<li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span><div><?php echo getWeather($cityId)->list[4]->dt_txt; ?></div>
            <div><?php echo ucwords(getWeather($cityId)->list[4]->weather[0]->description); ?></div>
			<div>
            <img
                src="http://openweathermap.org/img/w/<?php echo getWeather($cityId)->list[4]->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo getWeather($cityId)->list[4]->main->temp_min; ?>°C - <span
                class="min-temperature"><?php echo getWeather($cityId)->list[4]->main->temp_max; ?>°C</span>
        </div>
        <div>
            <div>Humidity: <?php echo getWeather($cityId)->list[4]->main->humidity; ?> %</div>
        </div></span>
                </li>
              </ul>
            </div>
            <div class="app_price"><div class="app_price">Today:
            <?php echo ucwords(getWeather($cityId)->list[4]->weather[0]->description); ?></div>
           
          </div>
        </div>

      </div>
    </div>
  </div>
  
  </html>