<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, []);
$template_variables = [
  'submitButtonHTML' => '<input class="btn btn-primary" type="submit" value="Log In"/>',
  'loginHeaderText' => 'Log In',
  'isAdminLogin' => false,
  'totalSiteLogins' => '0.00'
];

// here we echo out the rendered template files
// with the declared variables
echo $twig->render('solution.twig', $template_variables);
