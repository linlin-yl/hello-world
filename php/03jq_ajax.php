<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];

// echo "用户名——'$user'，密码——'$pwd'";

if($user === '翠花' && $pwd === '123'){
  echo '1';
}else{
  echo '0';
};
