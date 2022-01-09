<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Home</title>
</head>

<body>
  <div class="header">
    <h1 style='text-align:center'>Danh sách nhân viên</h1>
  </div>
  <div class="container" style='margin-top:100px'>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Mã NV</th>
          <th scope="col">Họ và tên</th>
          <th scope="col">Chức vụ</th>
          <th scope="col">Phòng ban</th>
          <th scope="col">Lương</th>
          <th scope="col">Ngày vào làm</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "1951060501_employees";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT maNV,hovaten,chucvu,phongban,luong,ngayvaolam FROM nhanvien";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $maNV = $row["maNV"];
          $ht = $row["hovaten"];
          $cv = $row["chucvu"];
          $pb = $row["phongban"];
          $l = $row["luong"];
          $nvl = $row["ngayvaolam"];
          }
          // $conn->close();
        }?>
        <tr>
          <th scope="row"><?php echo $maNV;?></th>
        </tr> 
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>