<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "turfirma");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clients");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>