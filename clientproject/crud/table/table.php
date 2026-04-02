<?php
session_start()
?>
<?php
include("../../connect/conn/database.php");
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/style.css">
    <title>Document</title>
  </head>
  <body>
    <div><a href=" /clientproject/index.php"><button>Home</button></a></div>
     <div><a href="add.php"><button>Add New Record</button></a></div>
    <!-- CRUD table -->
    <div>
        <table>
            <thead>
                <tr>
                <th>Id</th>
                <th>temp_name</th>
                <th>temp_date</th>
                <th>temp_var1</th>
                <th>temp_var2</th>
                <th>temp_var3</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientinfo";
                $result = mysqli_query($conn, $sql);
                if(!$result){
                    die("Query failed: " . mysqli_error($conn));
                }
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["temp_id"]; ?></td>
                        <td><?php echo $row["temp_name"]; ?></td>
                        <td><?php echo $row["temp_date"]; ?></td>
                        <td><?php echo $row["temp_var1"]; ?></td>
                        <td><?php echo $row["temp_var2"]; ?></td>
                        <td><?php echo $row["temp_var3"]; ?></td>
                        <td><a href="update.php?updateid=<?php echo $row['temp_id']; ?>"><button>Update Record</button></a></td>
                        <td><a href="delete.php?deleteid=<?php echo $row['temp_id']; ?>"><button>Delete Record</button></a></td>
                    </tr>
                    <?php
                }?>
      </tbody>
  </table>
    </div>
  </body>
</html>
