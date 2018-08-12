<?php
    header("Content-type:application/vnd.ms-excel;charset=UTF-8");
    header('Content-Disposition:attachment;filename="SQLInfo.csv"');
    header('Cache-Control:max-age=0');
    
    $fp=fopen('php://output','a');//php文件句柄，'php://output'表示输出到浏览器
    fwrite($fp, chr(0xEF).chr(0xBB).chr(0xBF));

    $column_name=array('ID','FatherID','Level','EncryptKey');

    foreach($column_name as $i=>$v){
        $column_name[$i]=iconv('utf-8','GB18030',$v);
    }

    fputcsv($fp,$column_name);

    $servername="localhost";
    $username="root";//改成自己的mysql用户名
    $password="123456";//改成自己的mysql密码
    $dbname="test";//改成自己的数据库名字

    try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->prepare("select * from test1 ORDER BY Level, FatherID, ID");//test1要改为自己的存储节点信息的表
        $stmt->execute();
        $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v){
            fputcsv($fp,$v);
        }
    }
    catch(PDOException $e){
        echo "Error:" .$e->getMessage();
    }
    $conn=null;
    fclose($fp);
    exit();
?>