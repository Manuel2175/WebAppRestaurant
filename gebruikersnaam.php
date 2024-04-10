<?php
include ('connection.php');

$sql = "SELECT gebruikersnaam FROM accounts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_COLUMN); // Fetch all usernames

foreach($users as $user) {
?>
<option class="input" value="<?php echo $user; ?>"><?php echo $user; ?></option>
<?php
}
?>
