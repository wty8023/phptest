<?php
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        //先查id
        $sql="select * from blog where bid='$id'";
        $query=mysqli_query($link,$sql);
        $rs=mysqli_fetch_array($query);
    }
    if(isset($_POST['sub'])){
        $title=$_POST['title'];
        $con=$_POST['con'];
    }
    //修改操作
    $sql="update"

?>
<meta charset="utf-8">
<form action="add.php" method="post">
    标题: <input type="text" name="title" value="<?php echo $rs['title'];?>"><br>
    内容: <textarea name="content" rows="8" cols="8" value="<?php echo $rs['content']; ?>"></textarea>
    <input type="submit" name="sub" value="发表">
</form>
