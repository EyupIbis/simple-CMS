<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 3/02/2019
 * Time: 16:19
 */

require '../app/start.php';

$statement = $db->prepare("SELECT page_id, title, label, slug FROM pages ORDER BY created DESC");
$statement->execute();
$pages = $statement->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT.'/admin/list.php';