<?php 
/**
 * Get Us States (WordPress)
 * 
 * Get translated Countries in WordPress. Runs output through a 
 * filter before returning to allow for customization through third
 * party plugins and themes, or for select removal/modification/addition 
 * of countries for whatever reason.
 * 
 * Function Usage: 
 * search and replace all instances of `inloki` and replace it with your 
 * theme or plugin's textdomain (inloki:twentyseventeen). Then call as:
 * $countries = inloki_get_countries();
 * 
 * Filter Usage:
 * function inloki_countries_filter( $countries ) {
 * 		// add a translatable country:
 * 		$countries['XX'] = __( 'Country Name', 'inloki' );
 * 		// remove a country:
 * 		unset( $countries['YY'] );
 *		// modify a country:
 *		$countries['US'] = __( 'America, F*ck Yeah.', 'inloki' );
 * 		// always return countries!
 * 		return $countries;
 * }
 * add_filter( 'inloki_countries_filters', 'inloki_countries_filter', 10 );
 * 
 * @link https://developer.wordpress.org/themes/functionality/internationalization/
 * @link https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/
 * @link https://developer.wordpress.org/reference/functions/__/
 * @link https://developer.wordpress.org/plugins/hooks/filters/
 * @link https://developer.wordpress.org/reference/functions/apply_filters/
 * @link https://developer.wordpress.org/reference/functions/add_filter/
 * 
 * @return array Countries as Country code => Country name
 */
function inloki_get_countries() {

	$countries = array(
		'AF' => __( 'Afghanistan', 'inloki' ), 
		'AL' => __( 'Albania', 'inloki' ), 
		'DZ' => __( 'Algeria', 'inloki' ), 
		'AS' => __( 'American Samoa', 'inloki' ), 
		'AD' => __( 'Andorra', 'inloki' ), 
		'AO' => __( 'Angola', 'inloki' ), 
		'AI' => __( 'Anguilla', 'inloki' ), 
		'AQ' => __( 'Antarctica', 'inloki' ), 
		'AG' => __( 'Antigua and Barbuda', 'inloki' ), 
		'AR' => __( 'Argentina', 'inloki' ), 
		'AM' => __( 'Armenia', 'inloki' ), 
		'AW' => __( 'Aruba', 'inloki' ), 
		'AU' => __( 'Australia', 'inloki' ), 
		'AT' => __( 'Austria', 'inloki' ), 
		'AZ' => __( 'Azerbaijan', 'inloki' ), 
		'BS' => __( 'Bahamas', 'inloki' ), 
		'BH' => __( 'Bahrain', 'inloki' ), 
		'BD' => __( 'Bangladesh', 'inloki' ), 
		'BB' => __( 'Barbados', 'inloki' ), 
		'BY' => __( 'Belarus', 'inloki' ), 
		'BE' => __( 'Belgium', 'inloki' ), 
		'BZ' => __( 'Belize', 'inloki' ), 
		'BJ' => __( 'Benin', 'inloki' ), 
		'BM' => __( 'Bermuda', 'inloki' ), 
		'BT' => __( 'Bhutan', 'inloki' ), 
		'BO' => __( 'Bolivia', 'inloki' ), 
		'BA' => __( 'Bosnia and Herzegovina', 'inloki' ), 
		'BW' => __( 'Botswana', 'inloki' ), 
		'BV' => __( 'Bouvet Island', 'inloki' ), 
		'BR' => __( 'Brazil', 'inloki' ), 
		'BQ' => __( 'British Antarctic Territory', 'inloki' ), 
		'IO' => __( 'British Indian Ocean Territory', 'inloki' ), 
		'VG' => __( 'British Virgin Islands', 'inloki' ), 
		'BN' => __( 'Brunei', 'inloki' ), 
		'BG' => __( 'Bulgaria', 'inloki' ), 
		'BF' => __( 'Burkina Faso', 'inloki' ), 
		'BI' => __( 'Burundi', 'inloki' ), 
		'KH' => __( 'Cambodia', 'inloki' ), 
		'CM' => __( 'Cameroon', 'inloki' ), 
		'CA' => __( 'Canada', 'inloki' ), 
		'CT' => __( 'Canton and Enderbury Islands', 'inloki' ), 
		'CV' => __( 'Cape Verde', 'inloki' ), 
		'KY' => __( 'Cayman Islands', 'inloki' ), 
		'CF' => __( 'Central African Republic', 'inloki' ), 
		'TD' => __( 'Chad', 'inloki' ), 
		'CL' => __( 'Chile', 'inloki' ), 
		'CN' => __( 'China', 'inloki' ), 
		'CX' => __( 'Christmas Island', 'inloki' ), 
		'CC' => __( 'Cocos [Keeling] Islands', 'inloki' ), 
		'CO' => __( 'Colombia', 'inloki' ), 
		'KM' => __( 'Comoros', 'inloki' ), 
		'CG' => __( 'Congo - Brazzaville', 'inloki' ), 
		'CD' => __( 'Congo - Kinshasa', 'inloki' ), 
		'CK' => __( 'Cook Islands', 'inloki' ), 
		'CR' => __( 'Costa Rica', 'inloki' ), 
		'HR' => __( 'Croatia', 'inloki' ), 
		'CU' => __( 'Cuba', 'inloki' ), 
		'CY' => __( 'Cyprus', 'inloki' ), 
		'CZ' => __( 'Czech Republic', 'inloki' ), 
		'CI' => __( 'Côte d’Ivoire', 'inloki' ), 
		'DK' => __( 'Denmark', 'inloki' ), 
		'DJ' => __( 'Djibouti', 'inloki' ), 
		'DM' => __( 'Dominica', 'inloki' ), 
		'DO' => __( 'Dominican Republic', 'inloki' ), 
		'NQ' => __( 'Dronning Maud Land', 'inloki' ), 
		'DD' => __( 'East Germany', 'inloki' ), 
		'EC' => __( 'Ecuador', 'inloki' ), 
		'EG' => __( 'Egypt', 'inloki' ), 
		'SV' => __( 'El Salvador', 'inloki' ), 
		'GQ' => __( 'Equatorial Guinea', 'inloki' ), 
		'ER' => __( 'Eritrea', 'inloki' ), 
		'EE' => __( 'Estonia', 'inloki' ), 
		'ET' => __( 'Ethiopia', 'inloki' ), 
		'FK' => __( 'Falkland Islands', 'inloki' ), 
		'FO' => __( 'Faroe Islands', 'inloki' ), 
		'FJ' => __( 'Fiji', 'inloki' ), 
		'FI' => __( 'Finland', 'inloki' ), 
		'FR' => __( 'France', 'inloki' ), 
		'GF' => __( 'French Guiana', 'inloki' ), 
		'PF' => __( 'French Polynesia', 'inloki' ), 
		'TF' => __( 'French Southern Territories', 'inloki' ), 
		'FQ' => __( 'French Southern and Antarctic Territories', 'inloki' ), 
		'GA' => __( 'Gabon', 'inloki' ), 
		'GM' => __( 'Gambia', 'inloki' ), 
		'GE' => __( 'Georgia', 'inloki' ), 
		'DE' => __( 'Germany', 'inloki' ), 
		'GH' => __( 'Ghana', 'inloki' ), 
		'GI' => __( 'Gibraltar', 'inloki' ), 
		'GR' => __( 'Greece', 'inloki' ), 
		'GL' => __( 'Greenland', 'inloki' ), 
		'GD' => __( 'Grenada', 'inloki' ), 
		'GP' => __( 'Guadeloupe', 'inloki' ), 
		'GU' => __( 'Guam', 'inloki' ), 
		'GT' => __( 'Guatemala', 'inloki' ), 
		'GG' => __( 'Guernsey', 'inloki' ), 
		'GN' => __( 'Guinea', 'inloki' ), 
		'GW' => __( 'Guinea-Bissau', 'inloki' ), 
		'GY' => __( 'Guyana', 'inloki' ), 
		'HT' => __( 'Haiti', 'inloki' ), 
		'HM' => __( 'Heard Island and McDonald Islands', 'inloki' ), 
		'HN' => __( 'Honduras', 'inloki' ), 
		'HK' => __( 'Hong Kong SAR China', 'inloki' ), 
		'HU' => __( 'Hungary', 'inloki' ), 
		'IS' => __( 'Iceland', 'inloki' ), 
		'IN' => __( 'India', 'inloki' ), 
		'ID' => __( 'Indonesia', 'inloki' ), 
		'IR' => __( 'Iran', 'inloki' ), 
		'IQ' => __( 'Iraq', 'inloki' ), 
		'IE' => __( 'Ireland', 'inloki' ), 
		'IM' => __( 'Isle of Man', 'inloki' ), 
		'IL' => __( 'Israel', 'inloki' ), 
		'IT' => __( 'Italy', 'inloki' ), 
		'JM' => __( 'Jamaica', 'inloki' ), 
		'JP' => __( 'Japan', 'inloki' ), 
		'JE' => __( 'Jersey', 'inloki' ), 
		'JT' => __( 'Johnston Island', 'inloki' ), 
		'JO' => __( 'Jordan', 'inloki' ), 
		'KZ' => __( 'Kazakhstan', 'inloki' ), 
		'KE' => __( 'Kenya', 'inloki' ), 
		'KI' => __( 'Kiribati', 'inloki' ), 
		'KW' => __( 'Kuwait', 'inloki' ), 
		'KG' => __( 'Kyrgyzstan', 'inloki' ), 
		'LA' => __( 'Laos', 'inloki' ), 
		'LV' => __( 'Latvia', 'inloki' ), 
		'LB' => __( 'Lebanon', 'inloki' ), 
		'LS' => __( 'Lesotho', 'inloki' ), 
		'LR' => __( 'Liberia', 'inloki' ), 
		'LY' => __( 'Libya', 'inloki' ), 
		'LI' => __( 'Liechtenstein', 'inloki' ), 
		'LT' => __( 'Lithuania', 'inloki' ), 
		'LU' => __( 'Luxembourg', 'inloki' ), 
		'MO' => __( 'Macau SAR China', 'inloki' ), 
		'MK' => __( 'Macedonia', 'inloki' ), 
		'MG' => __( 'Madagascar', 'inloki' ), 
		'MW' => __( 'Malawi', 'inloki' ), 
		'MY' => __( 'Malaysia', 'inloki' ), 
		'MV' => __( 'Maldives', 'inloki' ), 
		'ML' => __( 'Mali', 'inloki' ), 
		'MT' => __( 'Malta', 'inloki' ), 
		'MH' => __( 'Marshall Islands', 'inloki' ), 
		'MQ' => __( 'Martinique', 'inloki' ), 
		'MR' => __( 'Mauritania', 'inloki' ), 
		'MU' => __( 'Mauritius', 'inloki' ), 
		'YT' => __( 'Mayotte', 'inloki' ), 
		'FX' => __( 'Metropolitan France', 'inloki' ), 
		'MX' => __( 'Mexico', 'inloki' ), 
		'FM' => __( 'Micronesia', 'inloki' ), 
		'MI' => __( 'Midway Islands', 'inloki' ), 
		'MD' => __( 'Moldova', 'inloki' ), 
		'MC' => __( 'Monaco', 'inloki' ), 
		'MN' => __( 'Mongolia', 'inloki' ), 
		'ME' => __( 'Montenegro', 'inloki' ), 
		'MS' => __( 'Montserrat', 'inloki' ), 
		'MA' => __( 'Morocco', 'inloki' ), 
		'MZ' => __( 'Mozambique', 'inloki' ), 
		'MM' => __( 'Myanmar [Burma]', 'inloki' ), 
		'NA' => __( 'Namibia', 'inloki' ), 
		'NR' => __( 'Nauru', 'inloki' ), 
		'NP' => __( 'Nepal', 'inloki' ), 
		'NL' => __( 'Netherlands', 'inloki' ), 
		'AN' => __( 'Netherlands Antilles', 'inloki' ), 
		'NT' => __( 'Neutral Zone', 'inloki' ), 
		'NC' => __( 'New Caledonia', 'inloki' ), 
		'NZ' => __( 'New Zealand', 'inloki' ), 
		'NI' => __( 'Nicaragua', 'inloki' ), 
		'NE' => __( 'Niger', 'inloki' ), 
		'NG' => __( 'Nigeria', 'inloki' ), 
		'NU' => __( 'Niue', 'inloki' ), 
		'NF' => __( 'Norfolk Island', 'inloki' ), 
		'KP' => __( 'North Korea', 'inloki' ), 
		'VD' => __( 'North Vietnam', 'inloki' ), 
		'MP' => __( 'Northern Mariana Islands', 'inloki' ), 
		'NO' => __( 'Norway', 'inloki' ), 
		'OM' => __( 'Oman', 'inloki' ), 
		'PC' => __( 'Pacific Islands Trust Territory', 'inloki' ), 
		'PK' => __( 'Pakistan', 'inloki' ), 
		'PW' => __( 'Palau', 'inloki' ), 
		'PS' => __( 'Palestinian Territories', 'inloki' ), 
		'PA' => __( 'Panama', 'inloki' ), 
		'PZ' => __( 'Panama Canal Zone', 'inloki' ), 
		'PG' => __( 'Papua New Guinea', 'inloki' ), 
		'PY' => __( 'Paraguay', 'inloki' ), 
		'YD' => __( 'People\'s Democratic Republic of Yemen', 'inloki' ), 
		'PE' => __( 'Peru', 'inloki' ), 
		'PH' => __( 'Philippines', 'inloki' ), 
		'PN' => __( 'Pitcairn Islands', 'inloki' ), 
		'PL' => __( 'Poland', 'inloki' ), 
		'PT' => __( 'Portugal', 'inloki' ), 
		'PR' => __( 'Puerto Rico', 'inloki' ), 
		'QA' => __( 'Qatar', 'inloki' ), 
		'RO' => __( 'Romania', 'inloki' ), 
		'RU' => __( 'Russia', 'inloki' ), 
		'RW' => __( 'Rwanda', 'inloki' ), 
		'RE' => __( 'Réunion', 'inloki' ), 
		'BL' => __( 'Saint Barthélemy', 'inloki' ), 
		'SH' => __( 'Saint Helena', 'inloki' ), 
		'KN' => __( 'Saint Kitts and Nevis', 'inloki' ), 
		'LC' => __( 'Saint Lucia', 'inloki' ), 
		'MF' => __( 'Saint Martin', 'inloki' ), 
		'PM' => __( 'Saint Pierre and Miquelon', 'inloki' ), 
		'VC' => __( 'Saint Vincent and the Grenadines', 'inloki' ), 
		'WS' => __( 'Samoa', 'inloki' ), 
		'SM' => __( 'San Marino', 'inloki' ), 
		'SA' => __( 'Saudi Arabia', 'inloki' ), 
		'SN' => __( 'Senegal', 'inloki' ), 
		'RS' => __( 'Serbia', 'inloki' ), 
		'CS' => __( 'Serbia and Montenegro', 'inloki' ), 
		'SC' => __( 'Seychelles', 'inloki' ), 
		'SL' => __( 'Sierra Leone', 'inloki' ), 
		'SG' => __( 'Singapore', 'inloki' ), 
		'SK' => __( 'Slovakia', 'inloki' ), 
		'SI' => __( 'Slovenia', 'inloki' ), 
		'SB' => __( 'Solomon Islands', 'inloki' ), 
		'SO' => __( 'Somalia', 'inloki' ), 
		'ZA' => __( 'South Africa', 'inloki' ), 
		'GS' => __( 'South Georgia and the South Sandwich Islands', 'inloki' ), 
		'KR' => __( 'South Korea', 'inloki' ), 
		'ES' => __( 'Spain', 'inloki' ), 
		'LK' => __( 'Sri Lanka', 'inloki' ), 
		'SD' => __( 'Sudan', 'inloki' ), 
		'SR' => __( 'Suriname', 'inloki' ), 
		'SJ' => __( 'Svalbard and Jan Mayen', 'inloki' ), 
		'SZ' => __( 'Swaziland', 'inloki' ), 
		'SE' => __( 'Sweden', 'inloki' ), 
		'CH' => __( 'Switzerland', 'inloki' ), 
		'SY' => __( 'Syria', 'inloki' ), 
		'ST' => __( 'São Tomé and Príncipe', 'inloki' ), 
		'TW' => __( 'Taiwan', 'inloki' ), 
		'TJ' => __( 'Tajikistan', 'inloki' ), 
		'TZ' => __( 'Tanzania', 'inloki' ), 
		'TH' => __( 'Thailand', 'inloki' ), 
		'TL' => __( 'Timor-Leste', 'inloki' ), 
		'TG' => __( 'Togo', 'inloki' ), 
		'TK' => __( 'Tokelau', 'inloki' ), 
		'TO' => __( 'Tonga', 'inloki' ), 
		'TT' => __( 'Trinidad and Tobago', 'inloki' ), 
		'TN' => __( 'Tunisia', 'inloki' ), 
		'TR' => __( 'Turkey', 'inloki' ), 
		'TM' => __( 'Turkmenistan', 'inloki' ), 
		'TC' => __( 'Turks and Caicos Islands', 'inloki' ), 
		'TV' => __( 'Tuvalu', 'inloki' ), 
		'UM' => __( 'U.S. Minor Ouinlokiying Islands', 'inloki' ), 
		'PU' => __( 'U.S. Miscellaneous Pacific Islands', 'inloki' ), 
		'VI' => __( 'U.S. Virgin Islands', 'inloki' ), 
		'UG' => __( 'Uganda', 'inloki' ), 
		'UA' => __( 'Ukraine', 'inloki' ), 
		'SU' => __( 'Union of Soviet Socialist Republics', 'inloki' ), 
		'AE' => __( 'United Arab Emirates', 'inloki' ), 
		'GB' => __( 'United Kingdom', 'inloki' ), 
		'US' => __( 'United States', 'inloki' ), 
		'ZZ' => __( 'Unknown or Invalid Region', 'inloki' ), 
		'UY' => __( 'Uruguay', 'inloki' ), 
		'UZ' => __( 'Uzbekistan', 'inloki' ), 
		'VU' => __( 'Vanuatu', 'inloki' ), 
		'VA' => __( 'Vatican City', 'inloki' ), 
		'VE' => __( 'Venezuela', 'inloki' ), 
		'VN' => __( 'Vietnam', 'inloki' ), 
		'WK' => __( 'Wake Island', 'inloki' ), 
		'WF' => __( 'Wallis and Futuna', 'inloki' ), 
		'EH' => __( 'Western Sahara', 'inloki' ), 
		'YE' => __( 'Yemen', 'inloki' ), 
		'ZM' => __( 'Zambia', 'inloki' ), 
		'ZW' => __( 'Zimbabwe', 'inloki' ), 
		'AX' => __( 'Åland Islands', 'inloki' ), 
	);
	
	/**
	 * Filter the countries before returning
	 * 
	 * @param array $countries countries array for filtering
	 */
	$countries = apply_filters( 'inloki_countries_filters', $countries );

	/**
	 * Return the translated and filtered countries
	 */
	return $countries;
} 