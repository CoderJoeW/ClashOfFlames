<?PHP
/////////////////////Configs DATA BASE////////////////////
$host="localhost";
$user="root";
$pass="";
$db="ucsdb";

$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/////////////////////Configs Page Info////////////////////
$serverName="Clash of Flames";
$site="http://cof.ftp.sh";
$linkdownloadandroid="https://mega.nz/#!JA9T1ICK!e7YmKzrx0JqEYjJz85FupTeidk558HI34nlD2dxAKTk";
$linkdownloadios="https://mega.nz/#!ZYMjya4L!SWz5Tn6lp7nhTVtZgUrIDjwVJbGGpI1-QRQmDitFBmE";
error_reporting(E_ALL & ~E_NOTICE);
?>
