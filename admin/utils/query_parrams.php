<?php

function getPages()
{
  if (isset($_GET['p'])) {
    return $_GET['p'];
  }
  return null;
}
function getParams($key)
{
  if (isset($_GET[$key])) {
    return $_GET[$key];
  }
  return null;
}
?>