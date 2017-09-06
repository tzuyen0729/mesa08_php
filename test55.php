<?php
    $mysqli = new mysqli('localhost','root','root','iii');
    if (isset($_GET['delid'])){
        // delete
        $delid = $_GET['delid'];
        $sql = "delete from member where id={$delid}";
        $mysqli->query($sql);
    }

    $sql = "select * from member";
    $result = $mysqli->query($sql);
?>
<script>
    function del_confirm(name) {
        return confirm("delete "+name);
    }


</script>
<a href="test57.php">New Member</a><hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Account</th>
        <th>Password</th>
        <th>Real Name</th>
        <th>del</th>
        <th>edit</th>
    </tr>
    <?php
        while ($data = $result->fetch_object()){
            echo "<tr>";
            echo "<td>$data->id</td>";
            echo "<td>$data->account</td>";
            echo "<td>$data->passwd</td>";
            echo "<td>$data->realname</td>";
            echo "<td><a href='?delid={$data->id}' onclick='return del_confirm(\"{$data->account}\");'>del</td>";
            echo "<td><a href='test58.php?editid={$data->id}'>edit</td>";
            echo "</tr>";
        }
    ?>
</table>