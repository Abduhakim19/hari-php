
<?php
include ("config.php");
$koneksi = $query;
$kalimat1 = mysqli_query($koneksi, "SELECT message FROM chat ");
$nyobaarray = array();
while($kalimat2 = mysqli_fetch_array($kalimat1)) {
$kalimat3 = $kalimat2['message'];
$kalimat_array = explode(" ",$kalimat3);
foreach($kalimat_array as $value)
{
    if(isset($str[$value]))
        $str[$value]++;
    else
        $str[$value]=1;
}
foreach($str as $key => $value){
    $huruf = array($key);
    $huruf = implode(" ", $huruf);
    array_push($nyobaarray, $huruf);
}
}
foreach($nyobaarray as $value)
{
    if(isset($str[$value]))
        $str[$value]++;
    else
        $str[$value]=1;
}
foreach($str as $key => $value){
  echo $key." : ".$value."<br />";
}
?>
