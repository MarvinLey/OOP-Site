<?php
function bereinige($userEingabe, $encoding='UTF-8') {
  return htmlspecialchars( strip_tags(trim($userEingabe)), ENT_QUOTES | ENT_HTML5, $encoding );
}

function konvertiereZeit($datetime){
  $date = new DateTime($datetime);
  return $date->format('H:i - d.m.Y');
}
