<html>
<head>
<title>Library Management</title>
</head>
<body>
<h1>Enter Book Details</h1>
<form action="book.php" method="POST">
    <table width="400" border="1" cellspacing="3" cellpadding="5">
        <tr>    
            <td width="100">Book Id:</td>
            <td><input type="number" name="book_id" required></td>
        </tr>    
        <tr>
            <td width="100">Title:</td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td width="100">Book Authors:</td>
            <td><input type="text" name="authors" required></td>
        </tr>
        <tr>
            <td width="100">Edition:</td>
            <td><input type="number" name="edition" required></td>
        </tr>
        <tr>
            <td width="100">Publisher:</td>
            <td><input type="text" name="publisher" required></td>
        </tr>
        <tr>
            <td width="100"></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
<h1>Search Here For Books!!</h1>
<form action="book.php" method="POST">
Author:<input type="text" name="authors">

<input type="submit" name="search" value="search">
</form>
<?php
$conn=mysqli_connect("localhost","root","","mca");
if(!$conn)
{
 die("Connection failed".mysqli_connect_error());
}
echo "Connected Succesfully"."<br>";

if(isset($_POST['submit']))
{
 $book_id=$_POST['book_id'];
 $title=$_POST['title'];
 $authors=$_POST['authors'];
 $edition=$_POST['edition'];
 $publisher=$_POST['publisher'];

 echo "The book details are:"."<br>";
 echo "Book Id:".$book_id."<br>";
 echo "Book Title:".$title."<br>";
 echo "Book Authors:".$authors."<br>";
 echo "Book Edition:".$edition."<br>";
 echo "Book Publisher:".$publisher."<br>";

$sql="INSERT INTO book values($book_id,'$title','$authors',$edition,'$publisher')";
if(mysqli_query($conn,$sql))
{
 echo "New record added successfully";
}
else
{
 echo "Error".mysqli_error($conn);
}
}
if(isset($_POST['search']))
{
 $authors=$_POST['authors'];
 $sql="SELECT * FROM book WHERE authors='$authors'";
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
  echo "<h1>Search Result</h1>";  
  echo "<table border=1>";
  echo "<tr><th>Book Id</th><th>Book Name</th><th>Book Authors</th><th>Book Edition</th<th>Book Publisher</th></tr>";
  while($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";
    echo "<td>".$row['book_id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['authors']."</td>";
    echo "<td>".$row['edition']."</td>";
    echo "<td>".$row['publisher']."</td>";
    echo "</tr>";
  }
  echo "</table>";
 }
}
mysqli_close($conn);
?>
</body>
</html> 
