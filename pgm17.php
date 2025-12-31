<?php
$conn=mysqli_connect("localhost","root","","mca");
if(!$conn)
{
    die("Connection failed.".mysqli_connect_error());
}
echo "Connected successfully";

$sql="SELECT * FROM student";
 $res=mysqli_query($conn,$sql);
 if(!$res){
    echo "SQL Error".mysqli_error($conn);
 }
 if(mysqli_num_rows($res)<=0)
 {
   echo "No records Found";
 }
 else
 {
  echo "<h1>Student Details</h1>";
  echo "<table border=1>";
  echo "<tr><th>Roll No</th><th>Name</th><th>Branch</th><th>Book Price</th></tr>";
  while($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";
    echo "<td>".$row['roll_no']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['branch']."</td>";
    echo "<td>".$row['marks']."</td>";
    echo "</tr>";
  }
  echo "</table>";
 }

mysqli_close($conn);
?>