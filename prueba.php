<?php
require_once("view/frontend/MasterPage.php");
$tmp = MasterPage::GetMaster();
echo $tmp->GetPage();

require_once("view/product/viewProduct.php");

$view = viewProduct::GetMaster();

echo $view->GetView();

echo $tmp->GetFooter();
?>