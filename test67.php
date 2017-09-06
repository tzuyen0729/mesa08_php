<?php
$mysqli = new mysqli('localhost','root','root','iii');

$sql = "select id from food";
$result = $mysqli->query($sql);
$total = $result->num_rows;

$rpp = 10;
$page = 1;
if (isset($_GET['page'])) $page = $_GET['page'];
$start = ($page-1)*$rpp;

$maxPage = ceil($total/$rpp);

$prev = $page==1?1:$page-1;
$next = $page==$maxPage?$page:$page+1;

$sql = "select * from food limit {$start},{$rpp}";
$result = $mysqli->query($sql);
// name LIKE '%餐廳' 有包含餐廳字樣   city LIKE '臺_市' 縣市是臺X市 ＿代表一個字

?>

<a href="?page=<?php echo $prev; ?>">Prev</a> | <a href="?page=<?php echo $next; ?>">Next</a>
<table border="1" width="100%">
    <tr>
        <th>ID.</th>
        <th>縣市</th>
        <th>城鎮</th>
        <th>名稱</th>
        <th>緯度</th>
        <th>經度</th>
    </tr>
    <?php
        while ($data = $result->fetch_object()){
            echo "<tr>";
            echo "<td>{$data->id}</td>";
            echo "<td>{$data->city}</td>";
            echo "<td>{$data->town}</td>";
            echo "<td>{$data->name}</td>";
            echo "<td>{$data->lat}</td>";
            echo "<td>{$data->lng}</td>";
            echo "</tr>";
        }
    ?>
</table>