<style media="screen">
  td {
    width: 200px;
  }
</style>
<form method="post">
  <select name="hari">
    <option>-- Pilih Hari --</option>
    <option value="Sunday">Minggu</option>
    <option value="Monday">Senin</option>
    <option value="Tuesday">Selasa</option>
    <option value="Wednesday">Rabu</option>
    <option value="Thursday">Kamis</option>
    <option value="Friday">Jumat</option>
    <option value="Saturday">Sabtu</option>
  </select>
  <input type="submit" name="" value="Submit">
</form>
 <table border="1">
   <tr>
     <td>id</td>
     <td>name</td>
     <td>message</td>
     <td>time</td>
   </tr>

 <?php
 include("config.php");
 ini_set('date.timezone', 'Asia/Jakarta');
 $koneksi = $query;
 $hari = $_POST['hari'];
 $sql = mysqli_query($koneksi, "SELECT * FROM chat WHERE DATE_FORMAT(time,'%W')='$hari'");
 while($data = mysqli_fetch_array($sql)) {

   $id = $data['id'];
   $name = $data['name'];
   $message = $data['message'];
   $time = $data['time'];
   ?>
   <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $message; ?></td>
     <td><?php echo date('l, d F Y H:i:s', strtotime($time)); ?></td>
   </tr>
   <?php
    }
    ?>
   </table>
