<?php
$router->get('/', 'index.php');


$router->get('/register', 'auth/create.php')->only('guest');
$router->post('/register', 'auth/store.php')->only('guest');

$router->get('/login', 'auth/login_form.php')->only('guest');
$router->post('/login', 'auth/login.php')->only('guest');
$router->delete('/login', 'auth/logout.php')->only('auth');


