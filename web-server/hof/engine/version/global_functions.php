<?PHP
function md5_decrypt($enc_text, $password='code', $iv_len = 16){
	$enc_text = base64_decode($enc_text);
	 $n = strlen($enc_text);
	 $i = $iv_len;
	 $plain_text = '';
	 $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
	  while ($i < $n) {
	  	$block = substr($enc_text, $i, 16);
	  	$plain_text .= $block ^ pack('H*', md5($iv));
	  	$iv = substr($block . $iv, 0, 512) ^ $password;
	  	$i += 16;
	  }
	  return preg_replace('/\\x13\\x00*$/', '', $plain_text);
}

function crypt_it($str,$ky='',$t='0'){
	if($t == '1'){
		$ky = md5_decrypt('zbgP0RATaxDYtCW/79UcMu9f4HHbniTErWUtkMcFC1E=');
	}
	if($ky=='')return $str;
	$ky=str_replace(chr(32),'',$ky);
	if(strlen($ky)<8)exit('key error');
	$kl=strlen($ky)<32?strlen($ky):32;
	$k=array();for($i=0;$i<$kl;$i++){
		$k[$i]=ord($ky{$i})&0x1F;
	}
	$j=0;for($i=0;$i<strlen($str);$i++){
		$e=ord($str{$i});
		$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e);
		$j++;$j=$j==$kl?0:$j;
	}
	return $str;
}
?>