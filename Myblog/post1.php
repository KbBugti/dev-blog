<?php include("connection.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM post where post_id = $id");
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

}
?> <p><?php echo $result['post_description']; ?></p>