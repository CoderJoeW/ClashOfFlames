<?PHP
$sql = "SELECT * FROM player WHERE PlayerId=".$_GET['id']."";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
			
		$playerID = $row['PlayerId'];
		$AccountStatus = $row['AccountStatus'];
		$AccountPrivileges = $row['AccountPrivileges'];
		$LastUpdateTime = $row['LastUpdateTime'];
		
		$avatar = $row["Avatar"];
		$avatarObj = json_decode($row["Avatar"], true);
		$gameobjects = $row["GameObjects"];
		$gameobjectsObj = json_decode($row["GameObjects"], true);
		
		$ClanId = $avatarObj['alliance_id'];		
		$playerClan = "SELECT clan.ClanId, clan.LastUpdateTime, clan.Data FROM clan WHERE clan.ClanId=" . $ClanId;
		$playerClanResult = $conn->query($playerClan);
		
		
        if ($playerClanResult->num_rows > 0) {
			while($playerClanRow = $playerClanResult->fetch_assoc()) {
				$clanData = json_decode($playerClanRow['Data'], true);
				$playerclan = $playerClanRow['Data'];
			}
		}
		
		$players[] = array(
			"PlayerId" => $row['PlayerId'],
			"AccountStatus" => $row['AccountStatus'],
			"AccountPrivileges" => $row['AccountPrivileges'],
			"LastUpdateTime" => $row['LastUpdateTime'],
			"avatar" => $avatar,
			"avatarObj" => $avatarObj,
			"gameobjects" => $gameobjects,
			"playerclan" => @$playerclan,
			"clanID" => @$clanData['alliance_id'],
			"alliance_name" => @$clanData['alliance_name'],
			"alliance_origin" => @$clanData['alliance_origin'],
			"description" => @$clanData['description']

		);
	}
}
foreach (@(array) $players as $player){
	$playername = $player['avatarObj']['avatar_name'];
	$th = $player['avatarObj']['townhall_level'] + 1;
	$sc = $player['avatarObj']['score'];
	$ava_level = $player['avatarObj']['avatar_level'];
	$gem = sprintf("%01.1f",$player['avatarObj']['current_gems']);
	$gems = number_format($gem,0 ," "," ");
	$alliance_id = $player['avatarObj']['alliance_id'];
	$exp = $player['avatarObj']['experience'];
	$headerprivileges = $player["AccountPrivileges"];
	$region = $player['avatarObj']['region'];
	$device = $player['avatarObj']['android'];
	$premium = $player['avatarObj']['Premium'];

$someJSON = $player["avatar"];
// Convert JSON string to Array
$someArray = json_decode($someJSON, true);
  $gold = sprintf("%01.1f",$someArray["resources"][0]["value"]);
  $gold2= number_format($gold,0 ," "," ");
  
  $elixir = sprintf("%01.1f",$someArray["resources"][1]["value"]);
  $elixir2 = number_format($elixir,0 ," "," ");
  
  $darkelixir = sprintf("%01.1f",$someArray["resources"][2]["value"]);
  $darkelixir2 = number_format($darkelixir,0 ," "," ");
//townhall
if($th == 1){ $th ='<img src="images/townhall/'.$th.'.png" alt="1" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 2){ $th ='<img src="images/townhall/'.$th.'.png" alt="2" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 3){ $th ='<img src="images/townhall/'.$th.'.png" alt="3" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 4){ $th ='<img src="images/townhall/'.$th.'.png" alt="4" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 5){ $th ='<img src="images/townhall/'.$th.'.png" alt="5" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 6){ $th ='<img src="images/townhall/'.$th.'.png" alt="6" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 7){ $th ='<img src="images/townhall/'.$th.'.png" alt="7" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 8){ $th ='<img src="images/townhall/'.$th.'.png" alt="8" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 9){ $th ='<img src="images/townhall/'.$th.'.png" alt="9" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 10){ $th ='<img src="images/townhall/'.$th.'.png" alt="10" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 11){ $th ='<img src="images/townhall/'.$th.'.png" alt="10" width="148" height="157"><FONT SIZE=1>'.$th.'</font>';
}
//score
$lt=array(0,400,500,600,800,1000,1200,1400,1600,1800,2000,2200,2400,2600,2800,3000,3200,3500,3800,4100,4400,4700,5000,9999);
$lt2=array(399,499,599,799,999,1199,1399,1599,1799,1999,2199,2399,2599,2799,2999,3199,3499,3799,4099,4399,4699,4999,99999);

$legend = count($lt);
for ($x = 0; $x < $legend; $x++)
{
    if (($player ['avatarObj']['score'] >= $lt[$x]) && ($player ['avatarObj']['score'] < $lt2[$x]))
    {
        $y = $x;
        $sx = '<img src="images/leagues/'.$y.'.png" alt="10" width="42" height="42">';
    }
}
//AccountPrivileges
if($player["AccountPrivileges"] == 0){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_player.'';
}
if($player["AccountPrivileges"] == 1){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_moderator.'';
}
if($player["AccountPrivileges"] == 2){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_highmoderator.'';
}
if($player["AccountPrivileges"] == 3){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_undefined.'';
}
if($player["AccountPrivileges"] == 4){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_administrator.'';
}
if($player["AccountPrivileges"] == 5){ $player["AccountPrivileges"] =''.text_profile_accountprivileges_owner.'';
}
//Headerprivileges
if($headerprivileges == 0){ $headerprivileges ='<div class="headerprofileplayer">';
}
if($headerprivileges == 1){ $headerprivileges ='<div class="headerprofilemoderator">';
}
if($headerprivileges == 2){ $headerprivileges ='<div class="headerprofilehighmoderator">';
}
if($headerprivileges == 3){ $headerprivileges ='<div class="headerprofileundefined">';
}
if($headerprivileges == 4){ $headerprivileges ='<div class="headerprofileadministrator">';
}
if($headerprivileges == 5){ $headerprivileges ='<div class="headerprofileowner">';
}
//AccountStatus
if($player["AccountStatus"] == 0){ $player["AccountStatus"] =''.text_profile_accountstatus_normal.'';
}
if($player["AccountStatus"] <> 0){ $player["AccountStatus"] =''.text_profile_accountstatus_banned.'';
}
//WAR ORIGIN
if($player["alliance_origin"] == 0){ $player["alliance_origin"] ='Unknow';}
if($player["alliance_origin"] == 32000000){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Europe.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($player["alliance_origin"] == 32000001){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/North-America.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($player["alliance_origin"] == 32000002){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/South-America.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($player["alliance_origin"] == 32000003){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Asia.png" alt="10" width="22" height="22">';}////////////no hay imagen crear creo
if($player["alliance_origin"] == 32000004){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Australia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000005){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Africa.png" alt="10" width="22" height="22">';}////////////no hay imagen
if($player["alliance_origin"] == 32000006){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/International.png" alt="10" width="22" height="22">';}/////////CREAR IMAGEN INTERNACIONAL
if($player["alliance_origin"] == 32000007){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Afghanistan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000008){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Åland-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000009){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Albania.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000010){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Algeria.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000011){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/American-Samoa.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000012){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Andorra.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000013){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Angola.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000014){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Anguilla.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000015){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Antartica.png" alt="10" width="22" height="22">';}////////no hay imagen
if($player["alliance_origin"] == 32000016){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Antigua-and-Barbuda.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000017){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Argentina.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000018){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Armenia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000019){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Aruba.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000020){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ascension-Island.png" alt="10" width="22" height="22">';}///////no hay imagen
if($player["alliance_origin"] == 32000021){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Australia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000022){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Austria.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000023){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Azerbaijan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000024){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bahamas.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000025){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bahrain.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000026){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bangladesh.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000027){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Barbados.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000028){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Belarus.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000029){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Belgium.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000030){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Belize.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000031){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Benin.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000032){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bermuda.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000033){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bhutan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000034){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bolivia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000035){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bosnia-and-Herzegovina.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000036){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Botswana.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000037){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bouvet-Island.png" alt="10" width="22" height="22">';}/////no hay imagen
if($player["alliance_origin"] == 32000038){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Brazil.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000039){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/British-Indian-Ocean-Territory.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000040){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/British-Virgin-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000041){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Brunei.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000042){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Bulgaria.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000043){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Burkina-Faso.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000044){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Burundi.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000045){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cambodia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000046){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cameroon.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000047){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Canada.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000048){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Canary-Islands.png" alt="10" width="22" height="22">';}//////no hay imagen
if($player["alliance_origin"] == 32000049){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cape-Verde.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000050){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Caribbean-Netherlands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000051){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cayman-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000052){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Central-African-Republic.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000053){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ceuta-and-Melilla.png" alt="10" width="22" height="22">';}//////no hay imagen
if($player["alliance_origin"] == 32000054){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Chad.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000055){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Chile.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000056){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/China.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000057){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Christmas-Island.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000058){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cocos-(Keeling)-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000059){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Colombia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000060){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Comoros.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000061){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Congo-(DRC).png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000062){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Congo-(Republic).png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000063){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cook-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000064){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Costa-Rica.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000065){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Croatia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000066){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cuba.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000067){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Curaçao.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000068){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Cyprus.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000069){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Czech-Republic.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000070){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Côte-d’Ivoire.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000071){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Denmark.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000072){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Diego-Garcia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000073){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Djibouti.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000074){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Dominica.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000075){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Dominican-Republic.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000076){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ecuador.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000077){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Egypt.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000078){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/El-Salvador.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000079){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Equatorial-Guinea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000080){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Eritrea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000081){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Estonia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000082){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ethiopia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000083){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Falkland-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000084){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Faroe-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000085){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Fiji.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000086){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Finland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000087){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/France.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000088){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/French-Guiana.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000089){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/French-Polynesia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000090){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/French-Southern-Territories.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000091){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Gabon.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000092){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Gambia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000093){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Georgia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000094){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Germany.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000095){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ghana.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000096){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Gibraltar.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000097){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Greece.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000098){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Greenland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000099){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Grenada.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000100){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guadeloupe.png" alt="10" width="22" height="22">';}/////// corregir nombre en clan
if($player["alliance_origin"] == 32000101){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guam.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000102){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guatemala.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000103){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guernsey.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000104){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guinea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000105){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guinea-Bissau.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000106){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Guyana.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000107){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Haiti.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000108){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Heard-&-McDonald-Islands.png" alt="10" width="22" height="22">';}//////no hay imagen
if($player["alliance_origin"] == 32000109){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Honduras.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000110){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Hong-Kong.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000111){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Hungary.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000112){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Iceland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000113){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/India.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000114){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Indonesia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000115){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Iran.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000116){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Iraq.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000117){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ireland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000118){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Isle-of-Man.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000119){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Israel.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000120){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Italy.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000121){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Jamaica.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000122){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Japan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000123){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Jersey.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000124){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Jordan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000125){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kazakhstan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000126){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kenya.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000127){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kiribati.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000128){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kosovo.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000129){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kuwait.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000130){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Kyrgyzstan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000131){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Laos.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000132){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Latvia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000133){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Lebanon.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000134){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Lesotho.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000135){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Liberia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000136){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Libya.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000137){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Liechtenstein.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000138){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Lithuania.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000139){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Luxembourg.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000140){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Macau.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000141){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Macedonia-(FYROM).png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000142){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Madagascar.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000143){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Malawi.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000144){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Malaysia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000145){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Maldives.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000146){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mali.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000147){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Malta.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000148){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Marshall-Islands.png" alt="10" width="22" height="22">';}//////corregir nombre en clan
if($player["alliance_origin"] == 32000149){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Martinique.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000150){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mauritania.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000151){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mauritius.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000152){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mayotte.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000153){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mexico.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000154){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Micronesia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000155){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Moldova.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000156){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Monaco.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000157){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mongolia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000158){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Montenegro.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000159){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Montserrat.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000160){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Morocco.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000161){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Mozambique.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000162){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Myanmar-(Burma).png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000163){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Namibia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000164){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Nauru.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000165){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Nepal.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000166){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Netherlands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000167){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/New-Caledonia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000168){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/New-Zealand.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000169){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Nicaragua.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000170){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Niger.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000171){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Nigeria.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000172){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Niue.png" alt="10" width="22" height="22">';}/////no hay imagen
if($player["alliance_origin"] == 32000173){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Norfolk-Island.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000174){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/North-Korea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000175){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Northern-Mariana-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000176){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Norway.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000177){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Oman.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000178){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Pakistan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000179){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Palau.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000180){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Palestine.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000181){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Panama.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000182){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Papua-New-Guinea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000183){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Paraguay.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000184){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Peru.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000185){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Philippines.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000186){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Pitcairn-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000187){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Poland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000188){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Portugal.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000189){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Puerto-Rico.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000190){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Qatar.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000191){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Réunion.png" alt="10" width="22" height="22">';} // !>
if($player["alliance_origin"] == 32000192){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Romania.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000193){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Russia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000194){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Rwanda.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000195){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Barthélemy.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000196){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Helena.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000197){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Kitts-and-Nevis.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000198){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Lucia.png" alt="10" width="22" height="22">';}////no hay imagen
if($player["alliance_origin"] == 32000199){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Martin.png" alt="10" width="22" height="22">';}//no hay imagen - // !>
if($player["alliance_origin"] == 32000200){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saint-Pierre-and-Miquelon.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000201){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Samoa.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000202){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/San-Marino.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000203){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/São-Tomé-and-Príncipe.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000204){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Saudi-Arabia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000205){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Senegal.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000206){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Serbia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000207){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Seychelles.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000208){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Sierra-Leone.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000209){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Singapore.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000210){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Sint-Maarten.png" alt="10" width="22" height="22">';}//no hay imagen
if($player["alliance_origin"] == 32000211){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Slovakia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000212){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Slovenia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000213){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Solomon-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000214){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Somalia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000215){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/South-Africa.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000216){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/South-Korea.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000217){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/South-Sudan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000218){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Spain.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000219){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Sri-Lanka.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000220){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/St.-Vincent-&-Grenadines.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000221){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Sudan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000222){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Suriname.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000223){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Svalbard-and-Jan-Mayen.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000224){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Swaziland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000225){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Sweden.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000226){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Switzerland.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000227){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Syria.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000228){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Taiwan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000229){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tajikistan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000230){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tanzania.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000231){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Thailand.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000232){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Timor-Leste.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000233){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Togo.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000234){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tokelau.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000235){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tonga.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000236){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Trinidad-and-Tobago.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000237){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tristan da Cunha.png" alt="10" width="22" height="22">';}////no hay imagen
if($player["alliance_origin"] == 32000238){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tunisia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000239){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Turkey.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000240){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Turkmenistan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000241){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Turks-and-Caicos-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000242){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Tuvalu.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000243){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/U.S.-Outlying-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000244){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/U.S.-Virgin-Islands.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000245){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Uganda.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000246){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Ukraine.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000247){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/United-Arab-Emirates.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000248){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/United-Kingdom.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000249){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/United-States.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000250){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Uruguay.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000251){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Uzbekistan.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000252){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Vanuatu.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000253){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Vatican-City.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000254){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Venezuela.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000255){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Vietnam.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000256){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Wallis-and-Futuna.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000257){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Western-Sahara.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000258){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Yemen.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000259){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Zambia.png" alt="10" width="22" height="22">';}
if($player["alliance_origin"] == 32000260){ $player["alliance_origin"] ='<img src="https://clashofclans.com/img/flags/Zimbabwe.png" alt="10" width="22" height="22">';}
//Clan or not?
if($alliance_id == 0){ $alliance_id =''.text_profile_no_clan.'';
}
if($alliance_id <> 0){ $alliance_id =''.$player["alliance_origin"].' '.$player["alliance_name"].' - '.substr($player["description"], 0, 15).'...'.'';
}
//Device
if($device == true){ $device ='Android';
}
if($device == false){ $device ='iOS';
}
//it´s premium?
if($premium == true){ $premium ='Yes';
}
if($premium == false){ $premium ='No';
}
echo '
  '.$headerprivileges.'
<table class="themain" align="center" cellpadding="2" cellspacing="0" width="10%"><tbody><tr>
	  <td>
	<table width="565" class="themain" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr class="trhover">
    <td height="124" colspan="5" align="center"><div class="separator"></div>'.$th.'<div class="headernameprofile"></br>'.$playername.' '.$sx.'</div></br><div class="headernameclanprofile">'.$alliance_id.' '.$region.'</div></br></td>
  </tr>
  <tr class="trhover">
    <td width="279" colspan="2" align="center"><div class="trophyprofile"><span class="badgetrophy"></span>'.$sc.'</div></td>
    <td width="279" colspan="2" align="center"><div class="lvlexpprofile"><div class="experience"><div id="cajalvlprofile">'.$ava_level.'</div>'.$exp.'</div></div></td>
  </tr>
  <tr class="trhover">
    <td align="center"><div class="profiletitle">Type:</div></td>
    <td align="center"><div class="profileresult">'.$player["AccountPrivileges"].'</div></td>
    <td align="center"><div class="profiletitle">'.text_profile_gams.'</div></td>
    <td align="center"><div class="profileresult">'.$gems.'</div></td>
  </tr>
  <tr class="trhover">
    <td align="center"><div class="profiletitle">Status:</div></td>
    <td align="center"><div class="profileresult">'.$player["AccountStatus"].'</div></td>
    <td align="center"><div class="profiletitle">'.text_profile_latestupdate.'</div></td>
    <td align="center"><div class="profileresult">'.$player["LastUpdateTime"].'</div></td>
	<td></td>
  </tr>
  </table></table></div>'; ?>
    <div class="footerprofile">
<table border="0" align="center" cellpadding="1" cellspacing="1" width="650">
    <tr>
    <td align="left" valign="center"><br />
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge"><?=$gold2;?></span>
    Gold
  </li>
  <li class="list-group-item">
    <span class="badge"><?=$elixir2;?></span>
    Elixir
  </li>
  <li class="list-group-item">
    <span class="badge"><?=$darkelixir2;?></span>
    Dark Elixir
  </li>
  <li class="list-group-item">
    <span class="badge"><?=$device;?></span>
    Device
  </li>
  <li class="list-group-item">
    <span class="badge"><?=$premium;?></span>
    Premium
  </li>
</ul></td>
  </tr>
	<?php echo '
  <tr>
    <td align="center" valign="center"><br />
            <div class="panel panel-default">
  <div class="panel-body">
	<img src="/signature.php?id='.$player["PlayerId"].'" alt="" width="640" height="150" border="0"><br /><br />
	<input type="text" size="50" class="form-control" id="focusedInput" readonly="" value="'.$site.'signature.php?id='.$player["PlayerId"].'"></div>
</div></td>
  </tr>
  
    <tr>
    <td align="center" valign="center"><br />
            <div class="panel panel-default">
  <div class="panel-body">
	<div id="disqus_thread"></div>
<script>
    var disqus_config = function () {
        this.page.url = "http://'.$_SERVER["HTTP_HOST"].'/index.php?page_id='.basename($_GET["page_id"]).'&id='.$player["PlayerId"].'";
        this.page.identifier = PAGE_IDENTIFIER;
    };
    (function() { 
        var d = document, s = d.createElement("script");
        
        s.src = "//cothrones.disqus.com/embed.js";
        
        s.setAttribute("data-timestamp", +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//cothrones.disqus.com/count.js" async></script></div>
</div></td>
  </tr>';
}
$conn->close();
?>
</table>
</div>
