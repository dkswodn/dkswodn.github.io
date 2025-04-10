<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>도형 계산기</title>
  <style>
    body { font-family: sans-serif; padding: 20px; }
    .form-group { margin-bottom: 10px; }
    label { display: block; margin-bottom: 5px; }
  </style>
</head>
<body>

<h2>도형 계산기</h2>

<form method="post">
  <div class="form-group">
    <label for="shape">도형 선택:</label>
    <select name="shape" id="shape" onchange="this.form.submit()">
      <option value="">-- 선택하세요 --</option>
      <option value="triangle" <?= $_POST['shape'] == 'triangle' ? 'selected' : '' ?>>삼각형 (면적)</option>
      <option value="rectangle" <?= $_POST['shape'] == 'rectangle' ? 'selected' : '' ?>>직사각형 (면적)</option>
      <option value="circle" <?= $_POST['shape'] == 'circle' ? 'selected' : '' ?>>원 (면적)</option>
      <option value="cuboid" <?= $_POST['shape'] == 'cuboid' ? 'selected' : '' ?>>직육면체 (체적)</option>
      <option value="cylinder" <?= $_POST['shape'] == 'cylinder' ? 'selected' : '' ?>>원통 (체적)</option>
      <option value="sphere" <?= $_POST['shape'] == 'sphere' ? 'selected' : '' ?>>구 (체적)</option>
    </select>
  </div>

  <?php
  $shape = $_POST['shape'] ?? '';
  function inputField($label, $name) {
    $value = $_POST[$name] ?? '';
    echo "<div class='form-group'>
            <label>$label: <input type='number' name='$name' step='any' value='$value' required></label>
          </div>";
  }

  // 도형별 입력 필드 표시
  if ($shape === 'triangle' || $shape === 'rectangle') {
    inputField('가로 (width)', 'width');
    inputField('높이 (height)', 'height');
  } elseif ($shape === 'circle' || $shape === 'sphere') {
    inputField('반지름 (radius)', 'radius');
  } elseif ($shape === 'cuboid') {
    inputField('가로 (width)', 'width');
    inputField('세로/길이 (length)', 'length');
    inputField('높이 (height)', 'height');
  } elseif ($shape === 'cylinder') {
    inputField('반지름 (radius)', 'radius');
    inputField('높이 (height)', 'height');
  }

  if ($shape):
  ?>
    <button type="submit">계산하기</button>
  <?php endif; ?>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $pi = pi();
  $result = null;

  switch ($shape) {
    case 'triangle':
      $result = ($_POST['width'] * $_POST['height']) / 2;
      break;
    case 'rectangle':
      $result = $_POST['width'] * $_POST['height'];
      break;
    case 'circle':
      $result = $pi * pow($_POST['radius'], 2);
      break;
    case 'cuboid':
      $result = $_POST['width'] * $_POST['length'] * $_POST['height'];
      break;
    case 'cylinder':
      $result = $pi * pow($_POST['radius'], 2) * $_POST['height'];
      break;
    case 'sphere':
      $result = (4 / 3) * $pi * pow($_POST['radius'], 3);
      break;
  }

  if ($result !== null) {
    echo "<h3>결과: " . round($result, 2) . "</h3>";
  }
}
?>

</body>
</html>
