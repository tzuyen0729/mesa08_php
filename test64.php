<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

    $(document).ready(function () {
       setInterval(function () {
            $.get("test65.php",function (data,status) {             //ajax只存在瀏覽器 手機沒有
               $("#dataarea").html(data);
            });


       },3000);

    });
</script>


<h1>123 haha...</h1>
<hr>
<div id="dataarea"></div>