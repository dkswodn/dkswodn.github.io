
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PHP: List Boxes with PHP</title>
    <link rel="stylesheet" type="text/css" href="/abbey.css" media="screen" />
    <meta name="keywords" content="abbey workshop, java, ruby, subversion, svn, os x, lamp, linux, mysql, unix, xml, xslt" />
    <meta name="description" content="##description##" />
	<!-- header lines here -->
  <style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  }
</style>
  </head>
  <header>
  </header>


</div>
  <body>
  <form name="form" method="post" action="">
  <input type="text" name="number" placeholder="ID">
  <table style="width:100%">
  <tr>
    <th>NO.</th>
    <th>구분</th>
    <th colspan="2">어린이</th>
    <th colspan="2">어른</th>
    <th>비고</th>
  </tr>
  <tr>
    <td>1</td>
    <td>입장권</td>
    <td>7,000</td>
    <td>
      <select name="select1">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>10,000</td>
    <td>
      <select name="select2">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>입장</td>
  </tr>
  <tr>
    <td>2</td>
    <td>BIG3</td>
    <td>12,000</td>
    <td>
     <select name="select3">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>16,000</td>
    <td>
      <select name="select4">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>입장+놀이3종</td>
  </tr>
  <tr>
    <td>3</td>
    <td>자유이용권</td>
    <td>21,000</td>
    <td>
      <select name="select5">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>16,000</td>
    <td>
      <select name="select6">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>입장+놀이자유</td>
  </tr>
  <tr>
    <td>4</td>
    <td>연간이용권</td>
    <td>70,000</td>
    <td>
      <select name="select7">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>90,000</td>
    <td>
      <select name="select8">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>입장+놀이자유</td>
  </tr>
  </table>
  </body>
  </html>
        <p> 
          <input type="submit" name="Submit" value="합계"/>
        </p>

      </form>
</div>

</html>

<html>
<head>
<title>놀이공원 입장권권</title>
</head>
<body>
	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo $_POST['number'] ." 고객님 감사합니다.</p>\n";
    }
   
    $sum = $_POST['select1'] + $_POST['select2'] + $_POST['select3'] + $_POST['select4'] + $_POST['select5'] + $_POST['select6'] + $_POST['select7'] + $_POST['select8'];
	echo "<p>입장권은 어린이 " . $_POST['select1']."매, 어른 " . $_POST['select2']."매</p>\n";
    echo "<p>BIG3는 어린이 " . $_POST['select3']."매, 어른 " . $_POST['select4']."매</p>\n";
    echo "<p>자유이용권은 어린이 " . $_POST['select5']."매, 어른 " . $_POST['select6']."매</p>\n";
    echo "<p>연간이용권은 어린이 " . $_POST['select7']."매, 어른 " . $_POST['select8']."매</p>\n";
    echo "<p>합계 " .$sum. "매 입니다.</p>\n";
    echo "<p>현재 시각은 ". date("H:i:sa"). "입니다.\n";
	?>
</body>
</html>