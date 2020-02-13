<?php
if (isset($_POST['user'])) {
    echo $_POST['user'];
}
else {
    echo "ain't nothing here";
}

$username = isset($_POST['user']) ? $_POST['user'] : "ain't nothing ere bruv";

echo $username;

$username = $_POST['user'] ?? "ain't nothing ere bruv";

echo $username;
?>

<form method="post">
    Username:<input type="text" id="user" name="user" class="form-control" value=""/>
    <button type="submit" class="btn btn-primary">Test!</button>
</form>