<?PHP


//Array Numerical 
echo "array numerical yang disimpan kedalam variabel, Contoh 1";
$variabel_isi_array_numerical_1 = array("Udang", "Sapi", "Ikan", "Unta", "Kambing");
echo "<pre>";
print_r($variabel_isi_array_numerical_1); 
echo "</pre>";

echo "array numerical yang disimpan kedalam variabel, Contoh 2";
$variabel_isi_array_numerical_2[] = "udang"; 
$variabel_isi_array_numerical_2[] = "Sapi"; 
$variabel_isi_array_numerical_2[] = "Ikan"; 
$variabel_isi_array_numerical_2[] = "Unta"; 
$variabel_isi_array_numerical_2[] = "Kambing"; 
echo "<pre>";
print_r($variabel_isi_array_numerical_2); 
echo "</pre>";



//Array Associative
echo "array Associative yang disimpan kedalam variabel, contoh 1";
$variabel_isi_array_associative_1 = array("hewan"=>"Udang", "habitat"=>"air");
echo "<pre>";
print_r($variabel_isi_array_associative_1); 
echo "</pre>";

//Array Associative
echo "array Associative yang disimpan kedalam variabel, contoh 2";
$variabel_isi_array_associative_2['hewan'] = "Udang";
$variabel_isi_array_associative_2['habitat'] = "air";
echo "<pre>";
print_r($variabel_isi_array_associative_2); 
echo "</pre>";



?>