<style>
    button{
            background-color:#102C57;
            color:white;
            font-weight:bold;
            font-size:15px;
            border-radius:12px;
            padding:10px;
        }
        a{
            text-decoration: none;
            color:white;
            font-weight:bold;
        }
        table{
            border: solid 2px black;
            background-color:antiquewhite;
            border-collapse: collapse;
        }
        td,th{
            border:solid 2px black;
            padding:5px;
            text-align:center;
            font-weight:bold;
            font-size:20px;
        }
</style>
<table>
<?php
include 'db.php';

$sql = "SELECT id, task, status FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<ul>';
    while($row = $result->fetch_assoc()) {
       echo '<tr><td style="width:400px">' . $row["task"] ."</td>";
       echo'<td>' . $row["status"]. "</td>";
        echo ' <td><button style="background-color:green"><a href="update.php?id=' . $row["id"] . '">Complete</a></button></td>';
        echo ' <td><button style="background-color:red"><a href="delete.php?id=' . $row["id"] . '">Delete</a></button></td></tr>'; 
    }
    echo '</ul>';
} else {
    echo "No tasks found";
}

$conn->close();
?>

</table>