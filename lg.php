<?php session_start(); ?>
<html>
<?php
$mongo = new \MongoDB\Driver\Manager('mongodb://localhost:27017');

$filter      = [];
$options = [];

$query = new \MongoDB\Driver\Query($filter, $options);
$rows   = $mongo->executeQuery('hospital.login', $query);


foreach ($rows as $document) {
  $document = json_decode(json_encode($document),true);
     if ($document['Username']==$_GET["id"]&&
      $document['Password']==$_GET["pwd"]){
        $_SESSION["idSession"] = $_GET["id"];
        // var_dump($_SESSION["idSession"]);
        header("Location: Requirement.php");

      }
else {
header("Location: Login.php");
      }

   }



// $bulk->insert(['_id' => 2,'Lname' => $_POST["lname"]]);
// if(isset($_POST['Male'])){
//   $bulk->insert(['_id' => 3,'Gender' => $_POST["Male"]]);}
//    else {
//     $bulk->insert(['_id' => 3,'Gender' => $_POST["Female"]]);
//   }
// /*$bulk->insert(['_id' => 3,'Male' => $_POST["Male"]]);
// $bulk->insert(['_id' => 4,'Female' => $_POST["Female"]]);*/
// $bulk->insert(['_id' => 4,'Address' => $_POST["address"]]);
// $bulk->insert(['_id' => 5,'Country Code' => $_POST["country_code"]]);
// $bulk->insert(['_id' => 6,'Others' => $_POST["Others"]]);
// $bulk->insert(['_id' => 7,'Contact' => $_POST["contact"]]);
// $bulk->insert(['_id' => 8,'Email id' => $_POST["email_id"]]);
// $bulk->insert(['_id' => 9,'Hospital name' => $_POST["hospital_name"]]);
// $bulk->insert(['_id' => 10,'Feedback' => $_POST["feedback"]]);


/*$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

try {
    $result = $manager->executeBulkWrite('hospital.fd', $bulk, $writeConcern);
}

catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    $result = $e->getWriteResult();

    // Check if the write concern could not be fulfilled
    if ($writeConcernError = $result->getWriteConcernError()) {
        printf("%s (%d): %s\n",
            $writeConcernError->getMessage(),
            $writeConcernError->getCode(),
            var_export($writeConcernError->getInfo(), true)
        );
    }

    // Check if any write operations did not complete at all
    foreach ($result->getWriteErrors() as $writeError) {
        printf("Operation#%d: %s (%d)\n",
            $writeError->getIndex(),
            $writeError->getMessage(),
            $writeError->getCode()
        );
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    printf("Other error: %s\n", $e->getMessage());
    exit;
}

echo "<br>";
printf("Inserted %d document(s)\n ", $result->getInsertedCount());
echo "<br>";
printf("\n Updated  %d document(s)\n", $result->getModifiedCount());
echo "<br>";
echo "\n Number of tupples inserted is equal to \t";

echo count($temp);
*/
?>
</html>
