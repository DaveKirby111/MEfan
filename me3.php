<?php include "partials/head.php"; ?>

<?php include "partials/nav.php" ?>

<?php

$heading = "mass effect 3";

require "dbconnect.php";

?>

<?php include "partials/banner.php"; ?>

<div class="content container-fluid d-flex flex-column min-vh-100 p-0
bg-image" style="background-image: url('images/space.webp')">

<main class="container-fluid flex-grow-1">

<h2>characters:</h2>

<?php

$db = new database();
$chars = $db->query("select * from me3");

foreach ($chars as $char) {

    echo "<ul class='me-list'>";
    echo "<li>" . $char['characters'] . " : " . $char['race'] . "</li>";
    echo "</ul>";
    
}

?>

<table class="chars">

    <tr>
    <th>name</th>
    <th>race</th>
    </tr>

    <?php

    foreach ($chars as $char) {

    ?>

    <tr>
        <td><?php echo $char['characters']; ?></td>
        <td><?php echo $char['race']; ?></td>
    </tr>

    <?php

    }

    ?>

</table>

</main>

</div>

<?php include "partials/footer.php"; ?>