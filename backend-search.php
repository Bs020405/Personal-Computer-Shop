<?php
require_once "connection.php";
// echo $_POST['term'];
// exit();
try {
    if (isset($_REQUEST["sortby"])) {
        $sortby = $_REQUEST["sortby"];
        $category = $_REQUEST["category"];
        $cid = $_REQUEST["cid"];
        if ($sortby == 'pdesc') {
            $fieldName = $cid . 'Price_DESC';
        }
        if ($sortby == 'pasc') {
            $fieldName = $cid . 'Price_ASC';
        }
        if ($sortby == 'cdesc') {
            $fieldName = $cid . 'Company_DESC';
        }
        if ($sortby == 'casc') {
            $fieldName = $cid . 'Company_ASC';
        }
        $arr = array('redirect' => true, 'redirect_url' => "/pcs/product_archive_page.php/?category=$category&sortby=$fieldName", 'sortby' => $fieldName);
        echo json_encode($arr);
    }
    if (isset($_REQUEST["term"])) {
        $term = $_REQUEST["term"];
        $cid = $_REQUEST['cid'];
        $fieldName = $cid . 'Name';
        $pid = $cid . 'id';
        $sql = "SELECT cTableName,cName FROM product_category WHERE cid = '$cid'";
        $result = $connect_db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tableName = $row['cTableName'];
                $pageName = str_replace(" ", "_", $row['cName']);
                $pageName .= '_page.php?pid=';
                $sql = "SELECT * FROM $tableName WHERE $fieldName LIKE '%$term%'";
                $result = $connect_db->query($sql);
                if ($result->num_rows > 0) {
                    while ($innerRow = $result->fetch_assoc()) {
                        echo "<p style='width:88.6%;'><a style='color: black;' href='/pcs/" . $pageName . $innerRow[$pid] . "'>" . $innerRow[$fieldName] . "</a></p>";
                    }
                } else {
                    echo "<p>No matches found</p>";
                }
            }
        }
    }
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
