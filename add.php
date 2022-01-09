<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm nhân viên mới</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <form>
      <div class="card-body">
        <div class="form-group">
          <label>Mã NV</label>
          <input class="form-control" name="maNV">
        </div>

        <div class="form-group">
          <label>Họ và tên</label>
          <input class="form-control" name="ht">
        </div>

        <div class="form-group">
          <label>Chức vụ</label>
          <input class="form-control" name="cv">
        </div>

        <div class="form-group">
          <label>Phòng ban</label>
          <input class="form-control" name="pb">
        </div>

        <div class="form-group">
          <label>Lương</label>
          <input class="form-control" name="l">
        </div>

        <div class="form-group">
          <label>Ngày vào làm</label>
          <input class="form-control" name="nvl">
        </div>
    </form>
    <button type="submit" style ="width:100px;" class="btn btn-primary" name="btn_submit">Thêm</button>
  </div>

  <?php

      if (isset($_POST['btn_submit']))
        {
       // xu li sql them san pham tai day
      
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "1951060501_employees";

       $conn = new mysqli($servername, $username, $password, $dbname);

       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }
       // Check connection
       if (!$conn) {
      //  die("Connection failed: " . mysqli_connect_error());
       echo " <script type=\"text/javascript\">alert('Lỗi khi kết nối tới cơ sở dữ liệu!'); </script>";
       die();
       }
       $maNV = $_POST['maNV'];
       $ht = $_POST['hovaten'];
       $cv = $_POST['chucvu'];
       $pb = $_POST['phongban'];
       $l = $_POST['luong'];
       $nvl = $_POST['ngayvaolam'];
       $sql = "select * from nhanvien where maNV = \"{$maNV}\"";
       $rs = $conn->query($sql);
       
       $sql = sprintf("insert into  values (\"%s\", \"%s\", \"%s\", \"%s\", \"%s\", \"%s\")",$maNV,$ht,$cv,$pb,$l,$nvl);
       if ($conn->query($sql) === TRUE) {
         echo " <script type=\"text/javascript\">alert('Thêm mới thành công!'); </script>";
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo " <script type=\"text/javascript\">alert('Lỗi khi thêm!'); </script>";
        die();
      }}
      ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</head>
</html>