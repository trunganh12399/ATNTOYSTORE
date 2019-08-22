<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PostgreSQL SELECT Example 1</title>
<meta name="description" content="If we want to fetch all rows from the actor table the following PostgreSQL SELECT statement can be used.">
</head>
<body>
<h1>List of all actors in the table</h1>
<?php
$db = pg_connect("host=localhost port=5432 dbname=w3r user=w3r_admin password=admin123");
$result = pg_query($db,"SELECT * FROM actor");
echo "<table>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['actor_id'] . "</td>";
echo "<td align='center' width='200'>" . $row['first_name'] . "</td>";
echo "<td align='center' width='200'>" . $row['last_name'] . "</td>";
echo "<td align='center' width='200'>" . $row['last_update'] . "</td>";
echo "</tr>";}echo "</table>";?>
</div>
</body>
</html>