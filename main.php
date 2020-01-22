<!DOCTTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>"My PHP"</title>

  </head>
  <body>

<!--HTML for calculator -->
    <h1> This is my useless calculator </h1>
    <form action = "main.php" method="get">
      <input type="number" name="num1" placeholder="Number 1">
      <input type="number" name="num2" placeholder="Number 2">

      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>

      </select>
      <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
      <!--<input type="number" name="num2"> -->

    </form>
    <p>The Result is: </p>



    <?php
// Result of Calculator
    if (isset($_GET['submit'])) {


      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];

      switch ($operator) {
        case "None":
          echo "Please select operation";
            break;
        case "Add":
          echo $result1 + $result2;
            break;
        case "Subtract":
          echo $result1 - $result2;
            break;
        case "Multiply":
          echo $result1 * $result2;
            break;
        case "Divide":
          echo $result1 / $result2;
            break;
        default:
          // code...
          break;
      }
    }
     ?>




  </body>

</html>
