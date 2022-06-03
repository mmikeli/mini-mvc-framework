<?php

function error_page($error_code)
{
  return 'public/error_pages/'.$error_code.'.php';
}

function check_request($fields, $request)
{
  return ($fields[0] === $request['PATH'] && $fields[1] === $request['METHOD'])? true : false;
}

function dd($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

function dd_exit($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  exit;
}
