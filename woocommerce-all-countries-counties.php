<?php
/*
Plugin Name: WooCommerce All Countries Counties
Plugin URI: https://github.com/hoshomoh/WooCommerce-All-Country-States
Description: A plugin that adds postal counties to WooCommerce's list of states.
Version: 1.0.0
Author: Oforomeh Oshomo
Author URI: http://hoshomoh.github.io/
*/
/**
 * Copyright (c) 2016 Oforomeh Oshomo. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Check if WooCommerce is active
 **/
if ( ! class_exists( 'WC_All_Country_Counties' ) ) :
    class WC_All_Country_Counties {
        /**
         * Construct the plugin.
         */
        public function __construct() {
            add_action( 'plugins_loaded', array( $this, 'init' ) );
        }

        /**
         * Initialize the plugin.
         */
        public function init() {
            // Checks if WooCommerce is installed.
            if ( class_exists( 'WC_Integration' ) ) {

              add_filter( 'woocommerce_states', array( $this, 'wc_counties_add_counties' ) );

            } else {
                // throw an admin error if you like
            }
        }

        public function  wc_counties_add_counties( $states ) {
          $states ['NG' ] =
            [
              'AB' => 'Abia' ,
              'FC' => 'Abuja' ,
              'AD' => 'Adamawa' ,
              'AK' => 'Akwa Ibom' ,
              'AN' => 'Anambra' ,
              'BA' => 'Bauchi' ,
              'BY' => 'Bayelsa' ,
              'BE' => 'Benue' ,
              'BO' => 'Borno' ,
              'CR' => 'Cross River' ,
              'DE' => 'Delta' ,
              'EB' => 'Ebonyi' ,
              'ED' => 'Edo' ,
              'EK' => 'Ekiti' ,
              'EN' => 'Enugu' ,
              'GO' => 'Gombe' ,
              'IM' => 'Imo' ,
              'JI' => 'Jigawa' ,
              'KD' => 'Kaduna' ,
              'KN' => 'Kano' ,
              'KT' => 'Katsina' ,
              'KE' => 'Kebbi' ,
              'KO' => 'Kogi' ,
              'KW' => 'Kwara' ,
              'LA' => 'Lagos' ,
              'NA' => 'Nasarawa' ,
              'NI' => 'Niger' ,
              'OG' => 'Ogun' ,
              'ON' => 'Ondo' ,
              'OS' => 'Osun' ,
              'OY' => 'Oyo' ,
              'PL' => 'Plateau' ,
              'RI' => 'Rivers' ,
              'SO' => 'Sokoto' ,
              'TA' => 'Taraba' ,
              'YO' => 'Yobe' ,
              'ZA' => 'Zamfara'
            ];

          $states['GB'] =
            [
              'AV' => 'Avon',
              'BE' => 'Bedfordshire',
              'BK' => 'Berkshire',
              'BU' => 'Buckinghamshire',
              'CA' => 'Cambridgeshire',
              'CH' => 'Cheshire',
              'CL' => 'Cleveland',
              'CO' => 'Cornwall',
              'CD' => 'County Durham',
              'CU' => 'Cumbria',
              'DE' => 'Derbyshire',
              'DV' => 'Devon',
              'DO' => 'Dorset',
              'ES' => 'East Sussex',
              'EX' => 'Essex',
              'GL' => 'Gloucestershire',
              'HA' => 'Hampshire',
              'HE' => 'Herefordshire',
              'HT' => 'Hertfordshire',
              'IW' => 'Isle of Wight',
              'KE' => 'Kent',
              'LA' => 'Lancashire',
              'LE' => 'Leicestershire',
              'LI' => 'Lincolnshire',
              'LO' => 'London',
              'ME' => 'Merseyside',
              'MI' => 'Middlesex',
              'NO' => 'Norfolk',
              'NH' => 'North Humberside',
              'NY' => 'North Yorkshire',
              'NS' => 'Northamptonshire',
              'NL' => 'Northumberland',
              'NT' => 'Nottinghamshire',
              'OX' => 'Oxfordshire',
              'SH' => 'Shropshire',
              'SO' => 'Somerset',
              'SM' => 'South Humberside',
              'SY' => 'South Yorkshire',
              'SF' => 'Staffordshire',
              'SU' => 'Suffolk',
              'SR' => 'Surrey',
              'TW' => 'Tyne and Wear',
              'WA' => 'Warwickshire',
              'WM' => 'West Midlands',
              'WS' => 'West Sussex',
              'WY' => 'West Yorkshire',
              'WI' => 'Wiltshire',
              'WO' => 'Worcestershire',
              'ABD' => 'Scotland / Aberdeenshire',
              'ANS' => 'Scotland / Angus',
              'ARL' => 'Scotland / Argyle & Bute',
              'AYR' => 'Scotland / Ayrshire',
              'CLK' => 'Scotland / Clackmannanshire',
              'DGY' => 'Scotland / Dumfries & Galloway',
              'DNB' => 'Scotland / Dunbartonshire',
              'DDE' => 'Scotland / Dundee',
              'ELN' => 'Scotland / East Lothian',
              'EDB' => 'Scotland / Edinburgh',
              'FIF' => 'Scotland / Fife',
              'GGW' => 'Scotland / Glasgow',
              'HLD' => 'Scotland / Highland',
              'LKS' => 'Scotland / Lanarkshire',
              'MLN' => 'Scotland / Midlothian',
              'MOR' => 'Scotland / Moray',
              'OKI' => 'Scotland / Orkney',
              'PER' => 'Scotland / Perth and Kinross',
              'RFW' => 'Scotland / Renfrewshire',
              'SB' => 'Scotland / Scottish Borders',
              'SHI' => 'Scotland / Shetland Isles',
              'STI' => 'Scotland / Stirling',
              'WLN' => 'Scotland / West Lothian',
              'WIS' => 'Scotland / Western Isles',
              'AGY' => 'Wales / Anglesey',
              'GNT' => 'Wales / Blaenau Gwent',
              'CP' => 'Wales / Caerphilly',
              'CF' => 'Wales / Cardiff',
              'CAE' => 'Wales / Carmarthenshire',
              'CR' => 'Wales / Ceredigion',
              'CW' => 'Wales / Conwy',
              'DEN' => 'Wales / Denbighshire',
              'FLN' => 'Wales / Flintshire',
              'GLA' => 'Wales / Glamorgan',
              'GWN' => 'Wales / Gwynedd',
              'HAM' => 'Wales / Hampshire',
              'MT' => 'Wales / Merthyr Tydfil',
              'MON' => 'Wales / Monmouthshire',
              'PT' => 'Wales / Neath Port Talbot',
              'NP' => 'Wales / Newport',
              'PEM' => 'Wales / Pembrokeshire',
              'POW' => 'Wales / Powys',
              'RT' => 'Wales / Rhondda Cynon Taff',
              'SS' => 'Wales / Swansea',
              'TF' => 'Wales / Torfaen',
              'WX' => 'Wales / Wrexham',
              'ANT' => 'Northern Ireland / County Antrim',
              'ARM' => 'Northern Ireland / County Armagh',
              'DOW' => 'Northern Ireland / County Down',
              'FER' => 'Northern Ireland / County Fermanagh',
              'LDY' => 'Northern Ireland / County Londonderry',
              'TYR' => 'Northern Ireland / County Tyrone'
            ];

          return $states;
        }

        public function get_store_allowed_countries() {

        }

    }
    $WC_All_Country_Counties = new WC_All_Country_Counties( __FILE__ );
endif;
