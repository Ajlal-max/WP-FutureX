<?php
class dev_pub_sc{

    public static function executeFirstShortcode( $attr ){
        //Loading Scipts and styles
        wp_enqueue_script('my-js-id', plugin_dir_url(__FILE__) . 'js/my_js.js');
        wp_enqueue_style('my-css-id', plugin_dir_url(__FILE__) .'css/demo.css');

        //Short Code Content
        $output_text = 'Hi everybody';
        if( isset( $attr['attribute'] ) ) {
            $output_text = $attr['attribute'];
        }

        return '<p class="our_demo_css" id="our_demo"> You gave me: '. $output_text . '</p>';
    }

    public static function executeWeatherShortcode( $attr ){
        
     
        $city = esc_html( isset( $attr[ 'city' ] ) ? $attr['city'] : 'nyc,usa');

        if( ! isset($attr['appid'])) {
            return '<p> You need to feed me with a valid app id </p>';
        }

        $current_transient = get_transient($city);
        if( false === $current_transient){
            
            // appid = 439d4b804bc8187953eb36d2a8c26a02
            // url = https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=439d4b804bc8187953eb36d2a8c26a02

            $appid = $attr['appid'];
            $url = "https://samples.openweathermap.org/data/2.5/weather?q=$city&appid=$appid";

            $response = wp_remote_get($url);

            $response_code = wp_remote_retrieve_response_code($response);
            $body = wp_remote_retrieve_body($response); 
            $weather_data = json_decode($body);

            if(200 !== $response_code || 200 !== $weather_data->cod ) {
                return '<p> There was an error </p>';
            }
            //city name
            $header_text = '<h1> Weather Data for '. $weather_data->name . '</h1>';
            //icon
            $weather_img = $weather_data->weather[0]->icon;
            $body_text = "<img height=\"50\" width=\"50\" src=\"http://openweathermap.org/img/w/$weather_img.png\">";
            $weather_text = '<p>' . $weather_data->weather[0]->main . '</p>';
            
            set_transient($city, $header_text . $body_text . $weather_text, 10 * 60 );
            return $header_text . $body_text . $weather_text;
         }
         return $current_transient;
        //return '<p> The weather in ' . $city . ' is rainy</p>';
    }
}