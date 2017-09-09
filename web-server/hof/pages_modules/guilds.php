  <div align="center"><img src="images/push-icon.png" alt="" width="63" height="78" border="0"></div>
<br>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo text_guilds_ranking_name; ?></h3>
  </div>
  <div class="panel-body">
<table class='table table-striped table-hover' align="center" cellpadding='2' cellspacing='0' width='10%'>
<thead>
    <tr>
      <th width='85' align='center' valign='top' class='topp2'><strong>#</strong></th>
      <th width='107' align='center' valign='top' class='topp2'><strong><?php echo text_guilds_badge; ?></strong></th>
      <th width='264' align='center' valign='top' class='topp2'><strong><?php echo text_guilds_name; ?></strong></th>
      <th width='215' align='center' valign='top' class='topp2'><strong><?php echo text_guilds_experience; ?></strong></th>
	  <th width='266' align='center' valign='top' class='topp2'><strong><?php echo text_guilds_membersinclan; ?></strong></th>
      <th width='215' align='center' valign='top' class='topp2'><strong><?php echo text_guilds_trophies; ?></strong></th>
   </tr>
   </thead>
  <tbody>
<?PHP
$sql = "SELECT * FROM clan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
		$i = 0;
		
		$ClanId = $row['ClanId'];
		$LastUpdateTime = $row['LastUpdateTime'];
		
		$data = $row["Data"];
		$dataObj = json_decode($row["Data"], true);
		
		$PlayerId = $dataObj['alliance_id'];		
		$playerClan = "SELECT * FROM player WHERE player.PlayerId=" . $PlayerId;
		$playerClanResult = $conn->query($playerClan);
		
        if ($playerClanResult->num_rows > 0) {
			while($playerClanRow = $playerClanResult->fetch_assoc()) {
				$clanData = json_decode($playerClanRow['Avatar'], true);
				$playerclan = $playerClanRow['Avatar'];
			}
		}
		
		$clans[] = array(
			"ClanId" => $row['ClanId'],
			"LastUpdateTime" => $row['LastUpdateTime'],
			"data" => $data,
			"dataObj" => $dataObj,
			"playerclan" => $playerclan,
			"playerID" => $clanData['alliance_id'],
			"alliance_castle_total_capacity" => $clanData['alliance_castle_total_capacity']
		);
	}
}
    foreach (@(array) $clans as $clan) {
	$clanname = $clan['dataObj']['alliance_name'];
	$desc = $clan['dataObj']['description'];
	$memb = $clan['dataObj']['members'];
	$sc = $clan['dataObj']['score'];
	$alliorigin = $clan['dataObj']['alliance_origin'];
	$alliexp = $clan['dataObj']['alliance_experience'];
	$allilvl = $clan['dataObj']['alliance_level'];
	$allibadge = $clan['dataObj']['alliance_badge'];
	$i = $i+1;
	
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

  $someJSON = $clan["data"];
  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  $membersinclan =  count($someArray["members"]);
echo "<tr>
      <td align='center'><div id='caja'>".$i."</div></td>
      <td align='center' valign='center'><div style='background-image: url(../images/badge/1526726735.png);height: 42px;
 width: 42px;
 margin-left: 20;
 display: inline-block;
 min-width: 10px;
 padding: 3px 7px;
 font-size: 11px;
 font-weight: bold;
 color: #ffffff;
 line-height: 1;
 vertical-align: middle;
 white-space: nowrap;
 text-align: center;
 /*para Firefox*/
 -moz-border-radius: 10px 10px 10px 10px;
 /*para Safari y Chrome*/
 -webkit-border-radius: 10px 10px 10px 10px;
 /*para IE */
 behavior:url(border.htc);
 /* para Opera */
 border-radius: 10px 10px 10px 10px;'>".$allilvl."</div></td>
      <td align='center' valign='center'><a href='index.php?page_id=guild&clanTag=".$clan["ClanId"]."' title='".$clanname."'>".$clanname."</a></td>
	  <td align='center' valign='center'><div class='alliancerankingbadge'>".$alliexp."</div></td>
	  <td width='215' align='center' valign='center'><div class='alliancerankingbadge'>".$membersinclan."/".$clan["alliance_castle_total_capacity"]."</div></td>
	  <td align='center'><div id='trophy'>".$sc."<span class='badgetrophy'></span></div></td>
    </tr>";
}
$conn->close();
?>
  </tbody>
</table> 
</div>
</div>
<div align='center'>
<div class="panel panel-default">
  <div class="panel-body">
  </div>
</div>
</div>