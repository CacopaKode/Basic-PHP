<?PHP

function cek_jenis($inputan){
	switch($inputan){
		case "manusia":		
			echo $inputan. " anda adalah manusia yang berjenis kelamin laki-laki atau perempuan";
		break;
		case "hewan":		
			echo $inputan. " anda adalah hewan yang berjenis kelamin jantan dan betina";
		break;
		default:
			echo $inputan. " maaf inputan anda tidak kenali";		
		break;
	}
}

$varinput = "manusia";
cek_jenis($varinput);


?>