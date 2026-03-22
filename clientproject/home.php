<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


      <div class="header">
        <h1>Project</h1>
    </div>  
    <div><a href="crud/table/table.php"><button>View Records</button></a></div>
    <div><a href="cashier&search/cashearch/search.php"><button>Search</button></a></div>
    <div><a href="sales/report/salesreport.php"><button>Sales report</button></a></div>
</body>
</html>
<?php
include("connect/conn/database.php");
?>