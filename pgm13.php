<html>
<body>
    <?php
        $students = array("Rahul", "Anita", "Vikram", "Sneha", "Arjun");
        echo "Original Array:\n";
        print_r($students);
        echo "<br>";
        asort($students);
        echo "\nArray after asort (Ascending Order):\n";
        print_r($students);
        echo "<br>";
        arsort($students);
        echo "\nArray after arsort (Descending Order):\n";
        print_r($students);
        echo "<br>";
    ?>
</body>
</html>