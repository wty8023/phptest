<?php
    //打开数据库连接
    $link=@mysqli_connent('localhost','root','') or die('打开数据库连接失败');
    //选择数据库
    mysqli_select_db($link,'newblog') or die('打开数据库连接失败');
    //设置传输编码
    mysql_set_charset($link,'UTF8')


 ?>
