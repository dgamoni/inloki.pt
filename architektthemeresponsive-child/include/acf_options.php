<?php

function acf_load_years_field_choices( $field ) {

    $field['choices'] = array();
    $years = range(2020, 1900);
    if( is_array($years) ) {
        foreach( $years as $choice ) {
            $field['choices'][ $choice ] = $choice;
        }
    }
    return $field;
}
add_filter('acf/load_field/name=inloki_data', 'acf_load_years_field_choices'); 

require_once get_stylesheet_directory(). '/include/country.php';

function acf_load_country_field_choices( $field ) {

    $field['choices'] = array();
    $country = inloki_get_countries();
    if( is_array($country) ) {
        foreach( $country as $choice ) {
            $field['choices'][ $choice ] = $choice;
        }
    }
    return $field;
}
add_filter('acf/load_field/name=inloki_localizacao_pais', 'acf_load_country_field_choices');

add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyCKKuAw6gdLDepGFUTJmdWuM6XMkWAAm_o';
});