<?php
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    // continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
