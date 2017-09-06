<?php
$mysqli = new mysqli('localhost','root','root','iii');
$result = $mysqli->query("select * from member where id=21");   // result是指標
$data = $result->fetch_object();    // 從指標抓取一個物件

?>




<table border="1" width="100%">
    <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->account; ?></td>
        <td><?php echo $data->realname; ?></td>
    </tr>

</table>