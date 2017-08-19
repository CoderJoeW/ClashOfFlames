<?php
$sql = "SELECT * FROM clan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {		
		$ClanId = $row['ClanId'];
		$LastUpdateTime = $row['LastUpdateTime'];
		
		$data = $row["Data"];
		$dataObj = json_decode($row["Data"], true);
				
		$clans[] = array(
			"ClanId" => $row['ClanId'],
			"LastUpdateTime" => $row['LastUpdateTime'],
			"data" => $data,
			"dataObj" => $dataObj,
			"playerclan" => $playerclan,
			"playerID" => $clanData['alliance_id']
		);
	}
}
foreach (@(array) $clans as $clan) {
    $clanname = $clan['dataObj']['alliance_name'];
	$sc = $clan['dataObj']['score'];
	$reqsc = $clan['dataObj']['required_score'];
	$desc = $clan['dataObj']['description'];
	$war_frec = $clan['dataObj']['war_frequency'];
	$wowars = $clan['dataObj']['won_wars'];
	$lowars = $clan['dataObj']['lost_wars'];
	$drwars = $clan['dataObj']['draw_wars'];
	$alliance_typ = $clan['dataObj']['alliance_type'];
	$alliorigin = $clan['dataObj']['alliance_origin'];
	$allioriginbadge = $clan['dataObj']['alliance_origin'];
	$alliexp = $clan['dataObj']['alliance_experience'];
	$allilvl = $clan['dataObj']['alliance_level'];

//WAR FRECUENCY
if($war_frec == 0){ $war_frec ='Unspecified';}
if($war_frec == 1){ $war_frec ='Always';}
if($war_frec == 2){ $war_frec ='2 times per week';}
if($war_frec == 3){ $war_frec ='1 to week';}
if($war_frec == 4){ $war_frec ='Hardly ever';}
if($war_frec == 5){ $war_frec ='Never';}

//WAR TYPE
if($alliance_typ == 1){ $alliance_typ ='Public';}
if($alliance_typ == 2){ $alliance_typ ='Invitation only';}
if($alliance_typ == 3){ $alliance_typ ='Private';}

//WAR ORIGIN
if($alliorigin == 0){ $alliorigin ='Unknow';}
if($alliorigin == 32000000){ $alliorigin ='Europe';}
if($alliorigin == 32000001){ $alliorigin ='North America';}
if($alliorigin == 32000002){ $alliorigin ='South America';}
if($alliorigin == 32000003){ $alliorigin ='Asia';}
if($alliorigin == 32000004){ $alliorigin ='Australia';}
if($alliorigin == 32000005){ $alliorigin ='Africa';}
if($alliorigin == 32000006){ $alliorigin ='International';}
if($alliorigin == 32000007){ $alliorigin ='Afghanistan';}
if($alliorigin == 32000008){ $alliorigin ='Åland Islands';}
if($alliorigin == 32000009){ $alliorigin ='Albania';}
if($alliorigin == 32000010){ $alliorigin ='Algeria';}
if($alliorigin == 32000011){ $alliorigin ='American Samoa';}
if($alliorigin == 32000012){ $alliorigin ='Andorra';}
if($alliorigin == 32000013){ $alliorigin ='Angola';}
if($alliorigin == 32000014){ $alliorigin ='Anguilla';}
if($alliorigin == 32000015){ $alliorigin ='Antartica';}
if($alliorigin == 32000016){ $alliorigin ='Antigua and Barbuda';}
if($alliorigin == 32000017){ $alliorigin ='Argentina';}
if($alliorigin == 32000018){ $alliorigin ='Armenia';}
if($alliorigin == 32000019){ $alliorigin ='Aruba';}
if($alliorigin == 32000020){ $alliorigin ='Ascension Island';}
if($alliorigin == 32000021){ $alliorigin ='Australia';}
if($alliorigin == 32000022){ $alliorigin ='Austria';}
if($alliorigin == 32000023){ $alliorigin ='Azerbaijan';}
if($alliorigin == 32000024){ $alliorigin ='Bahamas';}
if($alliorigin == 32000025){ $alliorigin ='Bahrain';}
if($alliorigin == 32000026){ $alliorigin ='Bangladesh';}
if($alliorigin == 32000027){ $alliorigin ='Barbados';}
if($alliorigin == 32000028){ $alliorigin ='Belarus';}
if($alliorigin == 32000029){ $alliorigin ='Belgium';}
if($alliorigin == 32000030){ $alliorigin ='Belize';}
if($alliorigin == 32000031){ $alliorigin ='Benin';}
if($alliorigin == 32000032){ $alliorigin ='Bermuda';}
if($alliorigin == 32000033){ $alliorigin ='Bhutan';}
if($alliorigin == 32000034){ $alliorigin ='Bolivia';}
if($alliorigin == 32000035){ $alliorigin ='Bosnia and Herzegovina';}
if($alliorigin == 32000036){ $alliorigin ='Botswana';}
if($alliorigin == 32000037){ $alliorigin ='Bouvet Island';}
if($alliorigin == 32000038){ $alliorigin ='Brazil';}
if($alliorigin == 32000039){ $alliorigin ='British Indian Ocean Territory';}
if($alliorigin == 32000040){ $alliorigin ='British Virgin Islands';}
if($alliorigin == 32000041){ $alliorigin ='Brunei';}
if($alliorigin == 32000042){ $alliorigin ='Bulgaria';}
if($alliorigin == 32000043){ $alliorigin ='Burkina Faso';}
if($alliorigin == 32000044){ $alliorigin ='Burundi';}
if($alliorigin == 32000045){ $alliorigin ='Cambodia';}
if($alliorigin == 32000046){ $alliorigin ='Cameroon';}
if($alliorigin == 32000047){ $alliorigin ='Canada';}
if($alliorigin == 32000048){ $alliorigin ='Canary Islands';}
if($alliorigin == 32000049){ $alliorigin ='Cape Verde';}
if($alliorigin == 32000050){ $alliorigin ='Caribbean Netherlands';}
if($alliorigin == 32000051){ $alliorigin ='Cayman Islands';}
if($alliorigin == 32000052){ $alliorigin ='Central African Republic';}
if($alliorigin == 32000053){ $alliorigin ='Ceuta and Melilla';}
if($alliorigin == 32000054){ $alliorigin ='Chad';}
if($alliorigin == 32000055){ $alliorigin ='Chile';}
if($alliorigin == 32000056){ $alliorigin ='China';}
if($alliorigin == 32000057){ $alliorigin ='Christmas Island';}
if($alliorigin == 32000058){ $alliorigin ='Cocos (Keeling) Islands';}
if($alliorigin == 32000059){ $alliorigin ='Colombia';}
if($alliorigin == 32000060){ $alliorigin ='Comoros';}
if($alliorigin == 32000061){ $alliorigin ='Congo (DRC)';}
if($alliorigin == 32000062){ $alliorigin ='Congo (Republic)';}
if($alliorigin == 32000063){ $alliorigin ='Cook Islands';}
if($alliorigin == 32000064){ $alliorigin ='Costa Rica';}
if($alliorigin == 32000065){ $alliorigin ='Croatia';}
if($alliorigin == 32000066){ $alliorigin ='Cuba';}
if($alliorigin == 32000067){ $alliorigin ='Curaçao';}
if($alliorigin == 32000068){ $alliorigin ='Cyprus';}
if($alliorigin == 32000069){ $alliorigin ='Czech Republic';}
if($alliorigin == 32000070){ $alliorigin ='Côte d’Ivoire';}
if($alliorigin == 32000071){ $alliorigin ='Denmark';}
if($alliorigin == 32000072){ $alliorigin ='Diego Garcia';}
if($alliorigin == 32000073){ $alliorigin ='Djibouti';}
if($alliorigin == 32000074){ $alliorigin ='Dominica';}
if($alliorigin == 32000075){ $alliorigin ='Dominican Republic';}
if($alliorigin == 32000076){ $alliorigin ='Ecuador';}
if($alliorigin == 32000077){ $alliorigin ='Egypt';}
if($alliorigin == 32000078){ $alliorigin ='El Salvador';}
if($alliorigin == 32000079){ $alliorigin ='Equatorial Guinea';}
if($alliorigin == 32000080){ $alliorigin ='Eritrea';}
if($alliorigin == 32000081){ $alliorigin ='Estonia';}
if($alliorigin == 32000082){ $alliorigin ='Ethiopia';}
if($alliorigin == 32000083){ $alliorigin ='Falkland Islands';}
if($alliorigin == 32000084){ $alliorigin ='Faroe Islands';}
if($alliorigin == 32000085){ $alliorigin ='Fiji';}
if($alliorigin == 32000086){ $alliorigin ='Finland';}
if($alliorigin == 32000087){ $alliorigin ='France';}
if($alliorigin == 32000088){ $alliorigin ='French Guiana';}
if($alliorigin == 32000089){ $alliorigin ='French Polynesia';}
if($alliorigin == 32000090){ $alliorigin ='French Southern Territories';}
if($alliorigin == 32000091){ $alliorigin ='Gabon';}
if($alliorigin == 32000092){ $alliorigin ='Gambia';}
if($alliorigin == 32000093){ $alliorigin ='Georgia';}
if($alliorigin == 32000094){ $alliorigin ='Germany';}
if($alliorigin == 32000095){ $alliorigin ='Ghana';}
if($alliorigin == 32000096){ $alliorigin ='Gibraltar';}
if($alliorigin == 32000097){ $alliorigin ='Greece';}
if($alliorigin == 32000098){ $alliorigin ='Greenland';}
if($alliorigin == 32000099){ $alliorigin ='Grenada';}
if($alliorigin == 32000100){ $alliorigin ='Guadeluope';}
if($alliorigin == 32000101){ $alliorigin ='Guam';}
if($alliorigin == 32000102){ $alliorigin ='Guatemala';}
if($alliorigin == 32000103){ $alliorigin ='Guernsey';}
if($alliorigin == 32000104){ $alliorigin ='Guinea';}
if($alliorigin == 32000105){ $alliorigin ='Guinea-Bissau';}
if($alliorigin == 32000106){ $alliorigin ='Guyana';}
if($alliorigin == 32000107){ $alliorigin ='Haiti';}
if($alliorigin == 32000108){ $alliorigin ='Heard & McDonald Islands';}
if($alliorigin == 32000109){ $alliorigin ='Honduras';}
if($alliorigin == 32000110){ $alliorigin ='Hong Kong';}
if($alliorigin == 32000111){ $alliorigin ='Hungary';}
if($alliorigin == 32000112){ $alliorigin ='Iceland';}
if($alliorigin == 32000113){ $alliorigin ='India';}
if($alliorigin == 32000114){ $alliorigin ='Indonesia';}
if($alliorigin == 32000115){ $alliorigin ='Iran';}
if($alliorigin == 32000116){ $alliorigin ='Iraq';}
if($alliorigin == 32000117){ $alliorigin ='Ireland';}
if($alliorigin == 32000118){ $alliorigin ='Isle of Man';}
if($alliorigin == 32000119){ $alliorigin ='Israel';}
if($alliorigin == 32000120){ $alliorigin ='Italy';}
if($alliorigin == 32000121){ $alliorigin ='Jamaica';}
if($alliorigin == 32000122){ $alliorigin ='Japan';}
if($alliorigin == 32000123){ $alliorigin ='Jersey';}
if($alliorigin == 32000124){ $alliorigin ='Jordan';}
if($alliorigin == 32000125){ $alliorigin ='Kazakhstan';}
if($alliorigin == 32000126){ $alliorigin ='Kenya';}
if($alliorigin == 32000127){ $alliorigin ='Kiribati';}
if($alliorigin == 32000128){ $alliorigin ='Kosovo';}
if($alliorigin == 32000129){ $alliorigin ='Kuwait';}
if($alliorigin == 32000130){ $alliorigin ='Kyrgyzstan';}
if($alliorigin == 32000131){ $alliorigin ='Laos';}
if($alliorigin == 32000132){ $alliorigin ='Latvia';}
if($alliorigin == 32000133){ $alliorigin ='Lebanon';}
if($alliorigin == 32000134){ $alliorigin ='Lesotho';}
if($alliorigin == 32000135){ $alliorigin ='Liberia';}
if($alliorigin == 32000136){ $alliorigin ='Libya';}
if($alliorigin == 32000137){ $alliorigin ='Liechtenstein';}
if($alliorigin == 32000138){ $alliorigin ='Lithuania';}
if($alliorigin == 32000139){ $alliorigin ='Luxembourg';}
if($alliorigin == 32000140){ $alliorigin ='Macau';}
if($alliorigin == 32000141){ $alliorigin ='Macedonia (FYROM)';}
if($alliorigin == 32000142){ $alliorigin ='Madagascar';}
if($alliorigin == 32000143){ $alliorigin ='Malawi';}
if($alliorigin == 32000144){ $alliorigin ='Malaysia';}
if($alliorigin == 32000145){ $alliorigin ='Maldives';}
if($alliorigin == 32000146){ $alliorigin ='Mali';}
if($alliorigin == 32000147){ $alliorigin ='Malta';}
if($alliorigin == 32000148){ $alliorigin ='Marshall Islands';}
if($alliorigin == 32000149){ $alliorigin ='Martinique';}
if($alliorigin == 32000150){ $alliorigin ='Mauritania';}
if($alliorigin == 32000151){ $alliorigin ='Mauritius';}
if($alliorigin == 32000152){ $alliorigin ='Mayotte';}
if($alliorigin == 32000153){ $alliorigin ='México';}
if($alliorigin == 32000154){ $alliorigin ='Micronesia';}
if($alliorigin == 32000155){ $alliorigin ='Moldova';}
if($alliorigin == 32000156){ $alliorigin ='Monaco';}
if($alliorigin == 32000157){ $alliorigin ='Mongolia';}
if($alliorigin == 32000158){ $alliorigin ='Montenegro';}
if($alliorigin == 32000159){ $alliorigin ='Montserrat';}
if($alliorigin == 32000160){ $alliorigin ='Morocco';}
if($alliorigin == 32000161){ $alliorigin ='Mozambique';}
if($alliorigin == 32000162){ $alliorigin ='Myanmar (Burma)';}
if($alliorigin == 32000163){ $alliorigin ='Namibia';}
if($alliorigin == 32000164){ $alliorigin ='Nauru';}
if($alliorigin == 32000165){ $alliorigin ='Nepal';}
if($alliorigin == 32000166){ $alliorigin ='Netherlands';}
if($alliorigin == 32000167){ $alliorigin ='New Caledonia';}
if($alliorigin == 32000168){ $alliorigin ='New Zealand';}
if($alliorigin == 32000169){ $alliorigin ='Nicaragua';}
if($alliorigin == 32000170){ $alliorigin ='Niger';}
if($alliorigin == 32000171){ $alliorigin ='Nigeria';}
if($alliorigin == 32000172){ $alliorigin ='Niue';}
if($alliorigin == 32000173){ $alliorigin ='Nortfolk Island';}
if($alliorigin == 32000174){ $alliorigin ='North Korea';}
if($alliorigin == 32000175){ $alliorigin ='Northern Mariana Islands';}
if($alliorigin == 32000176){ $alliorigin ='Norway';}
if($alliorigin == 32000177){ $alliorigin ='Oman';}
if($alliorigin == 32000178){ $alliorigin ='Pakistan';}
if($alliorigin == 32000179){ $alliorigin ='Palau';}
if($alliorigin == 32000180){ $alliorigin ='Palestine';}
if($alliorigin == 32000181){ $alliorigin ='Panama';}
if($alliorigin == 32000182){ $alliorigin ='Papua New Guinea';}
if($alliorigin == 32000183){ $alliorigin ='Paraguay';}
if($alliorigin == 32000184){ $alliorigin ='Peru';}
if($alliorigin == 32000185){ $alliorigin ='Philippines';}
if($alliorigin == 32000186){ $alliorigin ='Pitcairn Islands';}
if($alliorigin == 32000187){ $alliorigin ='Poland';}
if($alliorigin == 32000188){ $alliorigin ='Portugal';}
if($alliorigin == 32000189){ $alliorigin ='Puerto Rico';}
if($alliorigin == 32000190){ $alliorigin ='Qatar';}
if($alliorigin == 32000191){ $alliorigin ='Réunion';} // !>
if($alliorigin == 32000192){ $alliorigin ='Romania';}
if($alliorigin == 32000193){ $alliorigin ='Russia';}
if($alliorigin == 32000194){ $alliorigin ='Rwanda';}
if($alliorigin == 32000195){ $alliorigin ='Saint Barthélemy';}
if($alliorigin == 32000196){ $alliorigin ='Saint Helena';}
if($alliorigin == 32000197){ $alliorigin ='Saint Kitts and Nevis';}
if($alliorigin == 32000198){ $alliorigin ='Saint Lucia';}
if($alliorigin == 32000199){ $alliorigin ='Saint Martin';}// !>
if($alliorigin == 32000200){ $alliorigin ='Saint Pierre and Miquelon';}
if($alliorigin == 32000201){ $alliorigin ='Samoa';}
if($alliorigin == 32000202){ $alliorigin ='San Marino';}
if($alliorigin == 32000203){ $alliorigin ='São Tomé and Pr�\xadncipe';}
if($alliorigin == 32000204){ $alliorigin ='Saudi Arabia';}
if($alliorigin == 32000205){ $alliorigin ='Senegal';}
if($alliorigin == 32000206){ $alliorigin ='Serbia';}
if($alliorigin == 32000207){ $alliorigin ='Seychelles';}
if($alliorigin == 32000208){ $alliorigin ='Sierra Leone';}
if($alliorigin == 32000209){ $alliorigin ='Singapore';}
if($alliorigin == 32000210){ $alliorigin ='Sint Maarten';}
if($alliorigin == 32000211){ $alliorigin ='Slovakia';}
if($alliorigin == 32000212){ $alliorigin ='Slovenia';}
if($alliorigin == 32000213){ $alliorigin ='Solomon Islands';}
if($alliorigin == 32000214){ $alliorigin ='Somalia';}
if($alliorigin == 32000215){ $alliorigin ='South Africa';}
if($alliorigin == 32000216){ $alliorigin ='South Korea';}
if($alliorigin == 32000217){ $alliorigin ='South Sudan';}
if($alliorigin == 32000218){ $alliorigin ='Spain';}
if($alliorigin == 32000219){ $alliorigin ='Sri Lanka';}
if($alliorigin == 32000220){ $alliorigin ='St. Vincent & Grenadines';}
if($alliorigin == 32000221){ $alliorigin ='Sudan';}
if($alliorigin == 32000222){ $alliorigin ='Suriname';}
if($alliorigin == 32000223){ $alliorigin ='Svalbard and Jan Mayen';}
if($alliorigin == 32000224){ $alliorigin ='Swaziland';}
if($alliorigin == 32000225){ $alliorigin ='Sweden';}
if($alliorigin == 32000226){ $alliorigin ='Switzerland';}
if($alliorigin == 32000227){ $alliorigin ='Syria';}
if($alliorigin == 32000228){ $alliorigin ='Taiwan';}
if($alliorigin == 32000229){ $alliorigin ='Tajikistan';}
if($alliorigin == 32000230){ $alliorigin ='Tanzania';}
if($alliorigin == 32000231){ $alliorigin ='Thailand';}
if($alliorigin == 32000232){ $alliorigin ='Timor-Leste';}
if($alliorigin == 32000233){ $alliorigin ='Togo';}
if($alliorigin == 32000234){ $alliorigin ='Tokelau';}
if($alliorigin == 32000235){ $alliorigin ='Tonga';}
if($alliorigin == 32000236){ $alliorigin ='Trinidad and Tobago';}
if($alliorigin == 32000237){ $alliorigin ='Tristan da Cunha';}
if($alliorigin == 32000238){ $alliorigin ='Tunisia';}
if($alliorigin == 32000239){ $alliorigin ='Turkey';}
if($alliorigin == 32000240){ $alliorigin ='Turkmenistan';}
if($alliorigin == 32000241){ $alliorigin ='Turks and Caicos Islands';}
if($alliorigin == 32000242){ $alliorigin ='Tuvalu';}
if($alliorigin == 32000243){ $alliorigin ='U.S. Outlying Islands';}
if($alliorigin == 32000244){ $alliorigin ='U.S. Virgin Islands';}
if($alliorigin == 32000245){ $alliorigin ='Uganda';}
if($alliorigin == 32000246){ $alliorigin ='Ukraine';}
if($alliorigin == 32000247){ $alliorigin ='United Arab Emirates';}
if($alliorigin == 32000248){ $alliorigin ='United Kingdom';}
if($alliorigin == 32000249){ $alliorigin ='United States';}
if($alliorigin == 32000250){ $alliorigin ='Uruguay';}
if($alliorigin == 32000251){ $alliorigin ='Uzbekistan';}
if($alliorigin == 32000252){ $alliorigin ='Vanuatu';}
if($alliorigin == 32000253){ $alliorigin ='Vatican City';}
if($alliorigin == 32000254){ $alliorigin ='Venezuela';}
if($alliorigin == 32000255){ $alliorigin ='Vietnam';}
if($alliorigin == 32000256){ $alliorigin ='Wallis and Futuna';}
if($alliorigin == 32000257){ $alliorigin ='Western Sahara';}
if($alliorigin == 32000258){ $alliorigin ='Yemen';}
if($alliorigin == 32000259){ $alliorigin ='Zambia';}
if($alliorigin == 32000260){ $alliorigin ='Zimbabwe';}
//WAR ORIGIN
if($allioriginbadge == 0){ $allioriginbadge ='Unknow';}
if($allioriginbadge == 32000000){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Europe.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($allioriginbadge == 32000001){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/North-America.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($allioriginbadge == 32000002){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/South-America.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($allioriginbadge == 32000003){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Asia.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($allioriginbadge == 32000004){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Australia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000005){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Africa.png" alt="10" width="22" height="22">';}////////////no hay imagen
if($allioriginbadge == 32000006){ $allioriginbadge ='<img src="http://www.rva.cd/admin/app/images/dossier/International.png" alt="10" width="22" height="22">';}/////////CREAR IMAGEN INTERNACIONAL
if($allioriginbadge == 32000007){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Afghanistan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000008){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Åland-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000009){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Albania.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000010){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Algeria.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000011){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/American-Samoa.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000012){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Andorra.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000013){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Angola.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000014){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Anguilla.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000015){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Antartica.png" alt="10" width="22" height="22">';}////////no hay imagen
if($allioriginbadge == 32000016){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Antigua-and-Barbuda.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000017){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Argentina.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000018){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Armenia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000019){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Aruba.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000020){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ascension-Island.png" alt="10" width="22" height="22">';}///////no hay imagen
if($allioriginbadge == 32000021){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Australia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000022){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Austria.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000023){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Azerbaijan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000024){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bahamas.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000025){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bahrain.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000026){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bangladesh.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000027){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Barbados.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000028){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Belarus.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000029){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Belgium.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000030){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Belize.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000031){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Benin.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000032){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bermuda.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000033){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bhutan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000034){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bolivia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000035){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bosnia-and-Herzegovina.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000036){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Botswana.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000037){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bouvet-Island.png" alt="10" width="22" height="22">';}/////no hay imagen
if($allioriginbadge == 32000038){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Brazil.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000039){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/British-Indian-Ocean-Territory.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000040){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/British-Virgin-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000041){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Brunei.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000042){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Bulgaria.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000043){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Burkina-Faso.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000044){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Burundi.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000045){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cambodia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000046){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cameroon.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000047){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Canada.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000048){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Canary-Islands.png" alt="10" width="22" height="22">';}//////no hay imagen
if($allioriginbadge == 32000049){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cape-Verde.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000050){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Caribbean-Netherlands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000051){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cayman-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000052){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Central-African-Republic.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000053){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ceuta-and-Melilla.png" alt="10" width="22" height="22">';}//////no hay imagen
if($allioriginbadge == 32000054){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Chad.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000055){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Chile.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000056){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/China.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000057){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Christmas-Island.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000058){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cocos-(Keeling)-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000059){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Colombia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000060){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Comoros.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000061){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Congo-(DRC).png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000062){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Congo-(Republic).png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000063){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cook-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000064){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Costa-Rica.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000065){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Croatia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000066){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cuba.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000067){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Curaçao.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000068){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Cyprus.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000069){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Czech-Republic.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000070){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Côte-d’Ivoire.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000071){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Denmark.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000072){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Diego-Garcia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000073){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Djibouti.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000074){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Dominica.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000075){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Dominican-Republic.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000076){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ecuador.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000077){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Egypt.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000078){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/El-Salvador.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000079){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Equatorial-Guinea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000080){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Eritrea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000081){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Estonia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000082){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ethiopia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000083){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Falkland-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000084){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Faroe-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000085){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Fiji.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000086){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Finland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000087){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/France.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000088){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/French-Guiana.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000089){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/French-Polynesia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000090){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/French-Southern-Territories.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000091){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Gabon.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000092){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Gambia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000093){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Georgia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000094){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Germany.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000095){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ghana.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000096){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Gibraltar.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000097){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Greece.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000098){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Greenland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000099){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Grenada.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000100){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guadeloupe.png" alt="10" width="22" height="22">';}/////// corregir nombre en clan
if($allioriginbadge == 32000101){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guam.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000102){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guatemala.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000103){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guernsey.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000104){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guinea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000105){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guinea-Bissau.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000106){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Guyana.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000107){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Haiti.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000108){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Heard-&-McDonald-Islands.png" alt="10" width="22" height="22">';}//////no hay imagen
if($allioriginbadge == 32000109){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Honduras.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000110){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Hong-Kong.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000111){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Hungary.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000112){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Iceland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000113){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/India.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000114){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Indonesia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000115){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Iran.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000116){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Iraq.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000117){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ireland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000118){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Isle-of-Man.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000119){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Israel.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000120){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Italy.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000121){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Jamaica.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000122){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Japan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000123){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Jersey.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000124){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Jordan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000125){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kazakhstan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000126){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kenya.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000127){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kiribati.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000128){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kosovo.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000129){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kuwait.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000130){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Kyrgyzstan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000131){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Laos.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000132){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Latvia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000133){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Lebanon.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000134){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Lesotho.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000135){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Liberia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000136){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Libya.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000137){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Liechtenstein.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000138){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Lithuania.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000139){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Luxembourg.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000140){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Macau.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000141){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Macedonia-(FYROM).png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000142){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Madagascar.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000143){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Malawi.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000144){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Malaysia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000145){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Maldives.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000146){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mali.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000147){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Malta.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000148){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Marshall-Islands.png" alt="10" width="22" height="22">';}//////corregir nombre en clan
if($allioriginbadge == 32000149){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Martinique.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000150){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mauritania.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000151){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mauritius.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000152){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mayotte.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000153){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mexico.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000154){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Micronesia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000155){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Moldova.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000156){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Monaco.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000157){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mongolia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000158){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Montenegro.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000159){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Montserrat.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000160){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Morocco.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000161){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Mozambique.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000162){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Myanmar-(Burma).png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000163){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Namibia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000164){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Nauru.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000165){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Nepal.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000166){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Netherlands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000167){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/New-Caledonia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000168){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/New-Zealand.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000169){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Nicaragua.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000170){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Niger.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000171){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Nigeria.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000172){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Niue.png" alt="10" width="22" height="22">';}/////no hay imagen
if($allioriginbadge == 32000173){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Norfolk-Island.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000174){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/North-Korea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000175){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Northern-Mariana-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000176){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Norway.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000177){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Oman.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000178){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Pakistan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000179){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Palau.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000180){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Palestine.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000181){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Panama.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000182){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Papua-New-Guinea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000183){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Paraguay.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000184){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Peru.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000185){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Philippines.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000186){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Pitcairn-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000187){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Poland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000188){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Portugal.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000189){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Puerto-Rico.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000190){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Qatar.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000191){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Réunion.png" alt="10" width="22" height="22">';} // !>
if($allioriginbadge == 32000192){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Romania.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000193){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Russia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000194){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Rwanda.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000195){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Barthélemy.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000196){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Helena.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000197){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Kitts-and-Nevis.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000198){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Lucia.png" alt="10" width="22" height="22">';}////no hay imagen
if($allioriginbadge == 32000199){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Martin.png" alt="10" width="22" height="22">';}//no hay imagen - // !>
if($allioriginbadge == 32000200){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saint-Pierre-and-Miquelon.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000201){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Samoa.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000202){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/San-Marino.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000203){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/São-Tomé-and-Príncipe.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000204){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Saudi-Arabia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000205){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Senegal.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000206){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Serbia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000207){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Seychelles.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000208){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Sierra-Leone.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000209){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Singapore.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000210){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Sint-Maarten.png" alt="10" width="22" height="22">';}//no hay imagen
if($allioriginbadge == 32000211){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Slovakia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000212){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Slovenia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000213){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Solomon-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000214){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Somalia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000215){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/South-Africa.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000216){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/South-Korea.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000217){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/South-Sudan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000218){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Spain.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000219){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Sri-Lanka.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000220){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/St.-Vincent-&-Grenadines.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000221){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Sudan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000222){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Suriname.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000223){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Svalbard-and-Jan-Mayen.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000224){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Swaziland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000225){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Sweden.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000226){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Switzerland.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000227){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Syria.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000228){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Taiwan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000229){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tajikistan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000230){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tanzania.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000231){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Thailand.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000232){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Timor-Leste.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000233){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Togo.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000234){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tokelau.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000235){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tonga.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000236){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Trinidad-and-Tobago.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000237){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tristan da Cunha.png" alt="10" width="22" height="22">';}////no hay imagen
if($allioriginbadge == 32000238){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tunisia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000239){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Turkey.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000240){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Turkmenistan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000241){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Turks-and-Caicos-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000242){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Tuvalu.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000243){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/U.S.-Outlying-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000244){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/U.S.-Virgin-Islands.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000245){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Uganda.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000246){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Ukraine.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000247){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/United-Arab-Emirates.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000248){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/United-Kingdom.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000249){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/United-States.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000250){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Uruguay.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000251){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Uzbekistan.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000252){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Vanuatu.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000253){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Vatican-City.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000254){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Venezuela.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000255){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Vietnam.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000256){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Wallis-and-Futuna.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000257){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Western-Sahara.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000258){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Yemen.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000259){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Zambia.png" alt="10" width="22" height="22">';}
if($allioriginbadge == 32000260){ $allioriginbadge ='<img src="https://clashofclans.com/img/flags/Zimbabwe.png" alt="10" width="22" height="22">';}

$someJSON = $clan["data"];
  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  $membersinclan =  count($someArray["members"]);  
echo '
<div class="headerprofileclans">
<table class="themain" align="center" cellpadding="2" cellspacing="0" width="44%"><tbody><tr>
	  <td>
	<table width="519" class="themain" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr class="trhover">
<td align="center" height="102" colspan="4"><div class="separator"></div><img src="../images/clan.jpg" alt="" width="100" height="100" border="0">'.$allilvl.'</td>
    </tr>
	  <tr class="trhover">
    <td colspan="4" align="center"><div class="separator"></div><div class="headernameprofileclan">'.$clanname.'</div></td>
    </tr>
  <tr class="trhover">
    <td colspan="4" align="center"><div class="headerdescriptionclanprofile"><em>- '.$desc.'</em> -</div></td>
    </tr>
	  <tr class="trhover">
    <td colspan="4" align="center"><div class="headernameclanprofilecountry">'.$allioriginbadge.' '.$alliorigin.'</div></td>
    </tr>
      <tr class="trhover">
        <td colspan="2"><div class="warsprofileclantr"><table width="200" border="0" align="right">
          <tbody>
            <tr>
              <td width="61"><span class="badgewarstrophy"></span></td>
              <td width="129"><div class="scoreclan">'.$sc.' </div><div class="warspoints"> Total Points</div></td>
              </tr>
            </tbody>
</table></div></td>
        <td colspan="2"><div class="warsprofileclan"><table width="200" border="0" align="left">
          <tbody>
            <tr>
              <td><span class="badgewars"></span></td>
              <td><div>'.$wowars.' <div class="warswon">Wars Won</div></div><div>'.$lowars.' <div class="warswon">Wars Lost</div></div><div>'.$drwars.' <div class="warswon">Wars Draw</div></div></td>
              </tr>
            </tbody>
</table></div></td>
        </tr>
  <tr class="trhover">
    <td width="96" align="left"><div class="profiletitle">Members:</div></td>
    <td width="256" align="left"><div class="profileresult">'.$membersinclan.'</div></td>
    <td width="128" align="center"><div class="profiletitle">Type:</div></td>
    <td width="97" align="center"><div class="profileresult">'.$alliance_typ.'</div></td>
  </tr>
  <tr class="trhover">
    <td align="left"><div class="profiletitle">Frecuency:</div></td>
    <td align="left"><div class="profileresult">'.$war_frec.'</div></td>
    <td align="center"><div class="profiletitle">Required Score:</div></td>
    <td align="center"><div class="profileresult">'.$reqsc.'</div></td>
    </tr>
  </table></table>
</div>
';} ?>
    <div align="center" class="footerprofileclan">
</br>
<table class="table table-striped table-hover" align="center" cellpadding="2" cellspacing="0" width="43%">
<thead>
    <tr>
    <td colspan="7" align="center"><?php echo text_guild_members; ?></td>
      </tr>
    <tr>
    <td width="26" align="center"><strong>#</strong></td>
	<td width="130" align="center"><strong>League</strong></td>
    <td width="90" align="center"><strong><?php echo text_guild_level; ?></strong></td>
    <td width="150" align="left"><strong><?php echo text_guild_name; ?></strong></td>
    <td width="136" align="left"><strong>Troops Donated:</strong></td>
    <td width="69" align="left"><strong>Troops Received:</strong></td>
    <td width="63" align="center"><strong>Score</strong></td>
   </tr>
   </thead>
  <tbody>
<?php
$someJSON = $clan["data"];
$array = json_decode($someJSON, true);

foreach (@(array)$array['members'] as $obj){
        $avatar_id = $obj['avatar_id'];
        $role = $obj['role'];
		
if($role == 0){ $role ='Member';}
if($role == 1){ $role ='Member';}
if($role == 2){ $role ='Leader';}
if($role == 3){ $role ='Veteran';}
if($role == 4){ $role ='Co Leader';}

        $PlayerId = $avatar_id;
		$playerClan = "SELECT * FROM player WHERE player.PlayerId=" . $PlayerId;
		$playerClanResult = $conn->query($playerClan);
		
		if ($playerClanResult->num_rows > 0) {
			while($playerClanRow = $playerClanResult->fetch_assoc()) {
				$clanData = json_decode($playerClanRow['Avatar'], true);
				$playerclan = $playerClanRow['Avatar'];
			}
			$players[] = array(
			"avatar" => $avatar,
			"avatarObj" => $avatarObj,
			"playerclan" => $playerclan,
			"playerID" => $clanData['alliance_id'],
			"avatar_name" => $clanData['avatar_name'],
			"score" => $clanData['score'],
			"avatar_level" => $clanData['avatar_level'],
			"troops_received" => $clanData['troops_received'],
			"troops_donated" => $clanData['troops_donated'],
			"avatar_name" => $clanData['avatar_name']
		);
	}
}
foreach($players as $player){
	$i = $i+1;
//score
$lt=array(0,400,500,600,800,1000,1200,1400,1600,1800,2000,2200,2400,2600,2800,3000,3200,3500,3800,4100,4400,4700,5000,9999);
$lt2=array(399,499,599,799,999,1199,1399,1599,1799,1999,2199,2399,2599,2799,2999,3199,3499,3799,4099,4399,4699,4999,99999);

$legend = count($lt);
for ($x = 0; $x < $legend; $x++)
{
    if (($player ['score'] >= $lt[$x]) && ($player ['score'] < $lt2[$x]))
    {
        $y = $x;
        $sx = '<img src="images/leagues/'.$y.'.png" alt="10" width="42" height="42">';
    }
}
    echo '<tr>
    <td align="center"><div id="caja">'.$i.'</div></td>
    <td align="center" valign="bottom">'.$sx.'</td>
	<td align="center"><div id="cajalvl">'.$player["avatar_level"].'</div></td>
    <td align="left"><a href="index.php?page_id=profile&id='.$avatar_id.'">'.$player["avatar_name"].'</a></br><div id="alliancetextrank">'.$role.'</div></td>
    <td align="left"><div class="alliancerankingbadge">'.$player["troops_donated"].'</div></td>
    <td align="left"><div class="alliancerankingbadge">'.$player["troops_received"].'</div></td>
    <td align="center"><div id="trophy">'.$player["score"].'<span class="badgetrophy"></span></div></td>
  </tr>';
}
$conn->close();
?>
</table>
<br>
</div>