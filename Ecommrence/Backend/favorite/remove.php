
<?php
include "../connect.php";

$userid = filterRequest("usersid");
$itemsid = filterRequest("itemsid");



deleteData("favorite","favorite_usersid= $userid AND favorite_itemsid=$itemsid" );


