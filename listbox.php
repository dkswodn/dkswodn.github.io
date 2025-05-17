
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amusement";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['number'];
    $c1 = $_POST['select1']; $a1 = $_POST['select2'];
    $c2 = $_POST['select3']; $a2 = $_POST['select4'];
    $c3 = $_POST['select5']; $a3 = $_POST['select6'];
    $c4 = $_POST['select7']; $a4 = $_POST['select8'];

    $sum = $c1 + $a1 + $c2 + $a2 + $c3 + $a3 + $c4 + $a4;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("연결 실패: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tickets (customer_id, child_entry, adult_entry, child_big3, adult_big3, child_free, adult_free, child_annual, adult_annual, total_tickets, purchase_time)
            VALUES ('$id', $c1, $a1, $c2, $a2, $c3, $a3, $c4, $a4, $sum, NOW())";

    if ($conn->query($sql) === TRUE) {
        $message = "$id 고객님 감사합니다.<br>
        입장권: 어린이 $c1 매, 어른 $a1 매<br>
        BIG3: 어린이 $c2 매, 어른 $a2 매<br>
        자유이용권: 어린이 $c3 매, 어른 $a3 매<br>
        연간이용권: 어린이 $c4 매, 어른 $a4 매<br>
        합계: $sum 매입니다.<br>
        현재 시각은 " . date("H:i:sa") . "입니다.";
    } else {
        $message = "오류: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>놀이공원 입장권</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>놀이공원 입장권 구매</h2>
  <form method="post" action="">
    <input type="text" name="number" placeholder="ID" required>
    <table style="width:100%">
      <tr>
        <th>NO.</th>
        <th>구분</th>
        <th colspan="2">어린이</th>
        <th colspan="2">어른</th>
        <th>비고</th>
      </tr>
      <tr>
        <td>1</td><td>입장권</td><td>7,000</td>
        <td><select name="select1"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>10,000</td>
        <td><select name="select2"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>입장</td>
      </tr>
      <tr>
        <td>2</td><td>BIG3</td><td>12,000</td>
        <td><select name="select3"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>16,000</td>
        <td><select name="select4"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>입장+놀이3종</td>
      </tr>
      <tr>
        <td>3</td><td>자유이용권</td><td>21,000</td>
        <td><select name="select5"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>26,000</td>
        <td><select name="select6"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>입장+놀이자유</td>
      </tr>
      <tr>
        <td>4</td><td>연간이용권</td><td>70,000</td>
        <td><select name="select7"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>90,000</td>
        <td><select name="select8"><?php for($i=0;$i<=5;$i++) echo "<option value='$i'>$i</option>"; ?></select></td>
        <td>입장+놀이자유</td>
      </tr>
    </table>
    <br>
    <input type="submit" name="Submit" value="합계" />
  </form>

  <?php
    if (!empty($message)) {
        echo "<hr><p>$message</p>";
    }
  ?>
</body>
</html>
