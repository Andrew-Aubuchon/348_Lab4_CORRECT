<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
</head>
<body>
  <h2>Generate a Multiplication Table</h2>
  <form method="POST">
    <label>Enter a number: <input type="number" name="num" min="1" required></label>
    <button type="submit">Generate</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $n = intval($_POST["num"]);
      echo "<h3>Multiplication Table (1 to $n)</h3>";
      echo "<table border='1' cellpadding='5'>";
      echo "<tr><th>*</th>";
      for ($col = 1; $col <= $n; $col++) {
        echo "<th>$col</th>";
      }
      echo "</tr>";
      for ($row = 1; $row <= $n; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $n; $col++) {
          echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
  ?>
</body>
</html>
