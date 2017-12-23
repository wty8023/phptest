<a href="add.php"></a>
<?php
    include "conn.php";
    $sql="select * from blog order by bid desc";
    $query=mysqli_query($link,$sql);
    //resuorce->array
    //$rs=mysqli_fetch_array($query);
    while ($rs=mysqli_fetch_array($query)) {

?>
<h3>标题： <?php echo $rs['title'];?>| <a href="del.php?id=<?php $rs=['bid'];?>">删除</a> | <a href="update.php?id=<?php $rs=['bid'];?>">修改</a> </h3>
<li>时间：<?php echo $rs['time'];?> </li>
<p> <?php echo $rs['content']; ?> </p>
<?php
    }

 ?>
