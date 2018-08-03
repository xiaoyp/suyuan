<?php
    header("Content-type:application/vnd.ms-excel;charset=UTF-8");
    header('Content-Disposition:attachment;filename="student.csv"');
    header('Cache-Control:max-age=0');
    
    $fp=fopen('php://output','a');//php文件句柄
    fwrite($fp, chr(0xEF).chr(0xBB).chr(0xBF));

    $column_name=array('stuid','stuname','degree','majorid');

    foreach($column_name as $i=>$v){
        $column_name[$i]=iconv('utf-8','GB18030',$v);
    }

    fputcsv($fp,$column_name);

    $servername="localhost";
    $username="root";
    $password="123456";
    $dbname="library";
    try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->prepare("select * from student");
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














/*    $con=mysqli_connect('localhost','root','123456','library');
    if(!$con){
        die("连接失败：" . mysqli_connect_error());
    }
    $result=mysqli_query($con,"select count(*) as total from student");
    $count1=mysqli_fetch_assoc($result);
    $total_export_count=($count1['total']>1000000)?1000000:$count1['total'];

    $pre_count=10000;
    for($i=0;$i<intval($total_export_count/$pre_count)+1;$i++)
    {
        $result2=mysqli_query($con,"select * from student limit" .$i*pre_count.",".$pre_count);
        $export_data=array();
        while($arow=mysqli_fetch_assoc($result2)){
            $export_data[]=$arow;
        }
        foreach($export_data as $item){
            $rows=array();
            foreach($item as $export_obj){
                $rows[]=iconv('utf-8','GB18030',$export_obj);
            }
            fputcsv($fp,$rows);
        }
        unset($export_data);
        ob_flush();
        flush();
    }
    fclose($fp);
    exit();
    */
?>