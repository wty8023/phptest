<?php
    //连接数据库
    include "conn.php";
    if(isset($_POST['sub'])){
        $title=$_POST['title'];
        $con=$$_POST['con'];
        //操作数据库插入数据
        $sql="insert into blog(bid,title,content,time) values(null,'$title','$con',now())";
        //发送这个字符串
        $query=mysqli_query($link,$sql);
        if($query){
            header("localhost/index.php");
        }else {
            echo "插入失败";
        }
    }



 ?>
 <meta charset="utf-8">
 <form action="add.php" method="post">
     标题: <input type="text" name="title" value=""><br>
     内容: <textarea name="content" rows="8" cols="8"></textarea>
     <input type="submit" name="sub" value="发表">
 </form>
