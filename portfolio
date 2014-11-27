<div>
<?php
    $user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    print("<h3> User:  " . $user[0]["username"] . "</h3>");
?>
</div>
<table class = "table table-striped">
    <tr>
        <th>Name</th>
        <th>Instrument</th>
        <th>Genre</th>
        <th></th>
    </tr>
    <?php
        
        foreach ($users as $user)
        {
            $user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
            print("<tr style='text-align:left;'>");
            print("<td>" . $user[0]["username"] . "</td>");
            print("<td>" . $user[0]["instrument"] . "</td>");
            print("<td>" . $user[0]["genre"] . "</td>");
            print("</tr>");
        }

    ?>
</table>
<div>
    <a href="instrument.php">Choose Instrument and Genre</a>
</div>
<div>
    <a href="logout.php">log out</a>
</div>
