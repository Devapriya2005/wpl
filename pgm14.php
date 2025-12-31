<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2a365;
        }
    </style>
</head>
<body>

<?php
    $players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Kapil Dev", "Hardik Pandya", "Jasprit Bumrah", "Yuvraj Singh");
    echo "Original Array:\n";
    print_r($players);
    echo "<table>";
    echo "<tr><th>Serial No.</th><th>Player Name</th></tr>";

    foreach ($players as $index => $player) {
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>";
        echo "<td>" . $player . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>