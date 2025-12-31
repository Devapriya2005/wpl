<html>
    <head>
        <title>Electricity Bill Calculator</title>
    </head>
    <body>
        <form action="pgm16.php" method="post">
            <label for="c_no">Consumer NO:</label>
            <input type="number" id="c_no" name="c_no" required>
            <br><br>
            <label for="name">Consumer Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <label for="units">Units Consumed:</label>
            <input type="number" id="units" name="units" required min="1">
            <br><br>
            <input type="submit" value="Calculate Bill">
            <br><br>
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $c_no= $_POST['c_no'];
            $name = $_POST['name'];
            $units = $_POST['units'];

            if ($units <= 100) {
                $bill = $units * 5;
            } elseif ($units <= 200) {
                $bill = (100 * 5) + (($units - 100) * 7.5);
            } else {
                $bill = (100 * 5) + (100 * 7.5) + (($units - 200) * 10);
            }

        
        echo "<h2>Electricity Bill</h2>";
        echo "<p><strong>Consumer Number:</strong>$c_no</p>";
        echo "<p><strong>Consumer Name:</strong> $name</p>";
        echo "<p><strong>Units Consumed:</strong> $units</p>";
        echo "<p><strong>Total Bill Amount:</strong> Rs. " .$bill. "</p>";
    }
    ?>

    </body>
</html>