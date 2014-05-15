<?php

$rows = Yii::app()->db->createCommand()
    ->select('username,hash')
    ->from('cruge_user')
    //->where('id=:id', array(':id'=>$id))
    ->queryAll();
  //  print_r($rows);
/*
 $connect = mysql_connect("127.0.0.1","root", "sra-45-ls");
    if (!$connect) {
          die(mysql_error());
    }
      mysql_select_db("joc");
      $results = mysql_query("SELECT * FROM cruge_user");*/
      
      
      echo "<table id='connect_table' border=1 style='width:300px'>
                <tr>
                  <td>Username</td>
                  <td>Hash</td> 
                </tr><tr>";
      foreach ($rows as $key => $valor) {
      foreach ($valor as $col => $valors) {
		//echo $username;
		if($col=='hash'){
		  if($valors!=""){
		  echo "<td><button id='connect' onclick='envia_hash(\"$valors\")' type='button'>PLAY</button></td>";
		  echo "</tr>";
		 
		}
		  if($col=='username'){
		    echo "<td>".$valors."</td>";
		  
		  }
		}
      }
    }
   /*   while($row = mysql_fetch_array($results)) {
           $hash=$row["hash"];
           if($hash!=""){
           echo "<td>".$row["username"]."</td>";
           echo "<td><button id='connect' onclick='envia_hash(\"$hash\")' type='button'>PLAY</button></td>";
           echo "</tr>";
           }
      }*/
?>