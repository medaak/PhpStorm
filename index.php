<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>

<?php
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
$sum=0;
$nb=0;
echo "<table class='table'>\n<tr>\n<td>";
echo "Students";
echo "</td>\n<td>";
echo "Age";
echo "</td>\n</tr>";
foreach ($students as $student => $age) {
    $sum+=$age;
    $nb++;
    echo "<tr><td>";
    echo $student;
    echo "</td>\n<td>";
    echo $age;
    echo "</td>\n</tr>";
};
echo "</table>";
$average=$sum/$nb;
echo "La moyenne d'âge des étudiants est de $average";
?>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
