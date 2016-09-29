<?Php
    $var1 ="<p><restaurant>[{id:7777,name:Baan Yai Restaurant}]</restaurant></p><p><restaurant>[{id:27,name:Baan Yai Restaurant}]</restaurant></p>";


  	$find_str= stripos ($var1, "<restaurant>[{id:",0);
    if($find_str){
      $exp=explode('[{id:',$var1);

      echo "<pre>";
      print_r($exp);
      echo "</pre>";
      $rest_id=array();
      foreach ($exp as $key => $value) {
        if($key>0){
          	$str_pos= strpos($value, ",");

            $id_rest=substr($value,0,$str_pos);
            array_push($rest_id,$id_rest);
        }
      }
    }else{
      echo "Else";
    }

    echo "<pre>";
    print_r($rest_id);
    echo "</pre>";

//echo str_replace("<restaurant>[{id:7777,name:Baan Yai Restaurant}]</restaurant>","777",$var1);

?>
