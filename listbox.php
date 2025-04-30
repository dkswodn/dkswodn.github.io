
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
  }
</style>
  </head>
  <body>
  <header>
  </header>


</div>
  <body>
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
      <select name="select">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>10,000</td>
    <td>
      <select name="select">
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
     <select name="select">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>16,000</td>
    <td>
      <select name="select">
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
      <select name="select">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>16,000</td>
    <td>
      <select name="select">
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
      <select name="select">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
      </select>
    </td>
    <td>90,000</td>
    <td>
      <select name="select">
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
	<div>
    <form name="form" method="post" action="listbox.php">
        <h4>Combo and List Box Form</h4>
        <p>Combo Box<br/>
          <select name="select">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </p>

        <p>List Box - Single Select<br/>
          <select name="listbox" size="3">
            <option value="Option 1" selected="true">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
          </select>
        </p>

        <p>List Box - Multiple Select<br/>
          <select name="listmultiple[]" size="3" multiple="true">
            <option value="Option 1" selected="true">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
          </select>

        </p>

        <p> 
          <input type="submit" name="Submit" value="Submit"/>
          <input type="reset" name="Reset" value="Reset"/>
        </p>

      </form>

<footer>

<!-- Page footer start -->

</footer>
</div>

  </body>
</html>

<html>
<head>
<title>List Box Form Data</title>
</head>
<body>
<h3>List Box Form Data</h3>
<p>Form data passed from the form</p>
	<?php
		echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
    echo "<p>select: " . $_POST['select']."</p>\n";
		echo "<p>listbox: " . $_POST['listbox'] . "</p>\n";
		$values = $_POST['listmultiple'];
		echo "<p>listmultiple: ";
		foreach ($values as $a){
			echo $a;
		}
		echo "</p>\n";
	?>
</body>
</html>