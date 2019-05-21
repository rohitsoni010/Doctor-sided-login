<html>
<?php
$mongo = new \MongoDB\Driver\Manager('mongodb://localhost:27017');
$query = new \MongoDB\Driver\Query($document);
$rows   = $mongo->executeQuery('hospital.fd', $query);

$document['Email id']==$_GET["email_id"];
foreach($document as $docm) {
  echo  $docm;
  // code...
}

// $query = new \MongoDB\Driver\Query($document, $options);
// $rows   = $mongo->executeQuery('hospital.fd', $query);
//
//
//
// ['Feedback'=>$doc];
//
//
// foreach ($rows as $doc) {
// echo  $doc = json_decode(json_encode($doc),true);
// }



//      if ($document['Email id']==$_GET["email_id"])
//       {header("Location: homepage.php");
//
// }
// else {
//       echo '<script>
//         alert("Wrong Password Sir!");
//
//       </script>';
//       header("Location: Login.php");}
//    }

?>
</html>
