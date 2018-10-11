<?php
// header("content=type:text/html;charset=utf8");
// $sum = 0;$n=100;
// $sum=(1+$n)*$n/2;
// echo $sum;
// 
// echo strlen("Hello world!");
// $name = "赵盼zhaopan";
// echo str_repeat($name,5);
// $pdo = new PDO('mysql:host=127.0.0.1;dbname=manth','root','root');

// $sql = "select * from type";
// $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
/**
 * @param $data
 * @param int $pid
 * @param int $le
 * @return array
 */
// function getTree($data, $pid=0, $le=1){
//     static $list = [];
//     foreach ($data as $key => $val){
//         if($val['p_id']==$pid){
//             $val['le']=$le;
//             $list[]=$val;
//             unset($data[$key]);
//             getTree($data,$val['type_id'],$le+1);
//         }
//     }
//     return $list;
// }
// $res = getTree($data);
// var_dump($res);

?>
<!-- <select name="" id="">
     <?php foreach ($res as $key=>$value){?>
     <option value=""><?php echo str_repeat('——',$value['le']).$value['type_name']?></option>
     <?php } ?>
</select>