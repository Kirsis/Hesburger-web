
<html lang="lv">
<head>
        <meta charset="UTF-8">
<?php

include 'con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$search_value=$_POST["search"];

$sql="select * from Vards where vards like '%$search_value%'";

        $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){

            $vards = $row["vards"];
            ?><h4><?php echo "Vārds:  " . $vards. " jau ir reģistrēts"?></h4><?php

        }
   }
?>
</head>
</html>