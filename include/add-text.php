<?php
  require '../include/db.php';

  $data = $_POST;
  $addText = R::dispense('articles');
  $addText->title = $data['title'];
  $addText->text = $data['textarea'];
  $addText->image = $data['image'];
  $addText->image2 = $data['image2'];
  $id = R::store($addText);
 ?>
