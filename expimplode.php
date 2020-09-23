<?PHP

$vararray = array("makan opak",
					" sama onde onde",
					"makannya melek",
					"pegang kedondong",
					"Cacopa Kode",
					"dilike dong...");

echo "ini adalah contoh Implode";
echo "<br/>";
echo implode(",", $vararray);


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


$varstring = "satu,dua,tiga";
echo "ini adalah contoh Explode";
echo "<br/>";
$arrayexp = explode(",", $varstring);

print_r($arrayexp);

?>