<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM login_data ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>
          <td>{$row['role']}</td>
          <td>{$row['user_id']}</td>
          <td>{$row['login_date']}</td>
          <td>{$row['login_time']}</td>
        </tr>";
}
body: `role=${role}&user=${user}&pass=${pass}`

?>
