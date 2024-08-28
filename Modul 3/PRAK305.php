<!DOCTYPE html>
<html>

<head>
  <title>Soal 5</title>
</head>

<body>
  <form action="" method="post" style="margin-bottom: 10px;">
    <label for="kata"></label>
    <input type="text" name="kata" id="kata">
    <button type="submit" name="submit">Submit</button>
  </form>
  <?php
  if (isset($_POST['submit'])) :
    $kata = $_POST['kata'];
    $arr = str_split($kata);
    $output = "";
    for ($i = 1; $i <= count($arr); $i = $i + 1) {
      for ($j = 1; $j <= count($arr); $j = $j + 1) {
        if ($j == 1) {
          $output .= strtoupper($arr[$i - 1]);
        } else {
          $output .= strtolower($arr[$i - 1]);
        }
      }
    }
  ?>
    <h2>Input:</h2>
    <?php echo $kata; ?><br>
    <h2>Output:</h2>
    <?php echo $output; ?>
  <?php endif; ?>
</body>

</html>
