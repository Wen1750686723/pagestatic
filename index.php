<?php  
//如果已存在静态页面，直接读取并显示  
if(file_exists('index.html'))  
{  
    echo file_get_contents('index.html');  
}  
else  
{  
    //这里把需要的变量都附好值  
    $var = "Hello,World.";  
    //开启输出缓存  
    ob_start();  
    //这里调用模板，模板里嵌入一些PHP标签，用来显示变量的值  
    require_once('template.php');  
    //这里得到输出缓存，也就是调用模板后，将来要显示到页面上的内容  
    $out = ob_get_contents();  
    //把要显示的内容保存成一个文件  
    file_put_contents('index.html',$out);  
    //输出  
    ob_end_flush();  
}  