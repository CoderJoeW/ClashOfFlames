<?PHP
include('config.php');
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
		
		$players[] = array(
			"PlayerId" => $row['PlayerId'],
			"AccountStatus" => $row['AccountStatus'],
			"AccountPrivileges" => $row['AccountPrivileges'],
			"LastUpdateTime" => $row['LastUpdateTime'],
			"avatar" => $avatar,
			"avatarObj" => $avatarObj,
			"gameobjects" => $gameobjects,
		);
	}
}
foreach($players as $player){
	$playername = $player['avatarObj']['avatar_name'];
	$th = $player['avatarObj']['townhall_level'] + 1;
	$sc = $player['avatarObj']['score'];
	$ava_level = $player['avatarObj']['avatar_level'];
	$gems = $player['avatarObj']['current_gems'];
	$exp = $player['avatarObj']['experience'];
}
//AccountPrivileges
if($player["AccountPrivileges"] == 0){ $player["AccountPrivileges"] ='Player';
}
if($player["AccountPrivileges"] == 1){ $player["AccountPrivileges"] ='Moderator';
}
if($player["AccountPrivileges"] == 2){ $player["AccountPrivileges"] ='High Moderator';
}
if($player["AccountPrivileges"] == 3){ $player["AccountPrivileges"] ='Undefined';
}
if($player["AccountPrivileges"] == 4){ $player["AccountPrivileges"] ='Administrator';
}
if($player["AccountPrivileges"] == 5){ $player["AccountPrivileges"] ='Owner';
}
//AccountStatus
if($player["AccountStatus"] == 0){ $player["AccountStatus"] ='Normal';
}
if($player["AccountStatus"] <> 0){ $player["AccountStatus"] ='Banned';
}  
//Resources
$someJSON = $player["avatar"];
// Convert JSON string to Array
$someArray = json_decode($someJSON, true);
  $gold = sprintf("%01.1f",$someArray["resources"][0]["value"]);
  $gold2= number_format($gold,0 ," "," ");
  
  $elixir = sprintf("%01.1f",$someArray["resources"][1]["value"]);
  $elixir2 = number_format($elixir,0 ," "," ");
  
  $darkelixir = sprintf("%01.1f",$someArray["resources"][2]["value"]);
  $darkelixir2 = number_format($darkelixir,0 ," "," "); 
     
    $font = "images/sc.ttf";
    $backgroundimage = "images/signature.jpg"; //background image type have to be jpg/jpeg .    

    header("Content-Type: image/png");
    $im = imagecreatefromjpeg($backgroundimage);
    $color = imagecolorallocatealpha($im, 255, 255, 255, 100);
    $text_colour = imagecolorallocate( $im, 245, 213, 10);
    $text_colour2 = imagecolorallocate( $im, 255, 255, 255);
    $line_colour = imagecolorallocate( $im,  245, 213, 10);
    $grey = imagecolorallocate($im, 128, 128, 128);
    $black = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255, 255, 255);
    $wizardblue = imagecolorallocate($im, 91, 99, 103);
    
    $adminrenk = imagecolorallocate($im, 0, 255, 0);
    $adminrenk = imagecolorallocate($im, 255, 0, 0);
    
	//Line yellow
    imagettftext( $im, 11, 0, 228, 142, $black, $font, ' ');
    imagettftext( $im, 11, 0, 226, 140, $text_colour, $font, ' ');
	//Line yellow

    imagettftext( $im, 12, 0, 28, 18, $black, $font, $playername);
    imagettftext( $im, 12, 0, 30, 20, $text_colour2, $font, $playername);
   
    imagettftext( $im, 12, 0, 32, 62, $black, $font, 'Townhall: '.$th);
    imagettftext( $im, 12, 0, 30, 60, $adminrenk, $font, 'Townhall: '.$th);

    imagettftext( $im, 12, 0, 32, 82, $black, $font, 'Experience: '.$exp);
    imagettftext( $im, 12, 0, 30, 80, $adminrenk, $font, 'Experience: '.$exp);
	
	imagettftext( $im, 12, 0, 32, 100, $black, $font, 'Level: '.$ava_level);
    imagettftext( $im, 12, 0, 30, 98, $adminrenk, $font, 'Level: '.$ava_level);
    
	imagettftext( $im, 12, 0, 32, 120, $black, $font, 'Trophies: '.$sc);
    imagettftext( $im, 12, 0, 30, 118, $adminrenk, $font, 'Trophies: '.$sc);

	imagettftext( $im, 12, 0, 32, 140, $black, $font, 'Gems: '.$gems);
    imagettftext( $im, 12, 0, 30, 138, $adminrenk, $font, 'Gems: '.$gems);
	
    //imagefilledrectangle($im, 478, 70, 636, 100, $wizardblue);
	//Derecha
	imagettftext( $im, 12, 0, 488, 18, $black, $font, 'Resources');
    imagettftext( $im, 12, 0, 488, 20, $text_colour2, $font, 'Resources');

    imagettftext( $im, 9, 0, 469, 40, $black, $font, 'Gold: '.$gold2);
    imagettftext( $im, 9, 0, 469, 42, $text_colour, $font, 'Gold: '.$gold2);
	
    imagettftext( $im, 9, 0, 463, 60, $black, $font, 'Elixir: '.$elixir2);
    imagettftext( $im, 9, 0, 463, 62, $text_colour, $font, 'Elixir: '.$elixir2);
	
	imagettftext( $im, 9, 0, 415, 80, $black, $font, 'Dark Elixir: '.$darkelixir2);
    imagettftext( $im, 9, 0, 415, 82, $text_colour, $font, 'Dark Elixir: '.$darkelixir2);
    
    imagesetthickness ( $im, 5 );
    imageline( $im, 30, 147, 642, 147, $black );
    imageline( $im, 30, 145, 640, 145, $line_colour );
    
    
    imagefillalpha($im, $color);
    imagepng($im);
    imagedestroy($im);

    function ImageFillAlpha($image, $color)
    {
        imagefilledrectangle($image, 0, 0, imagesx($image), imagesy($image), $color);
    }
$conn->close();
?>