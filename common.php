<?php

session_start();

spl_autoload_register(function($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    include_once __DIR__ . '/' . $className . '.php';
});
$dataBinder = new \Core\DataBinder();
$template = new \Core\Template();
//to prod
//$dbInfo = parse_ini_file("../Config/db.ini");
$dbInfo = parse_ini_file("../warehouse_app/Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db = new \Database\PDODatabase($pdo);
$webOrderRepository = new \App\Repository\Weborders\WebOrderRepository($db);
$webOrderService = new \App\Service\Weborder\WebOrderService($webOrderRepository);
//$userRepository = new \App\Repository\UserRepository($db);
$fiscalRepository = new \App\Repository\Fiscal\FiscalRepository($db);
//$personRepository = new \App\Repository\Person\PersonRepository($db);
//$emailService = new App\Service\Email\EmailService($emailRepository);
//$encryptionService = new \App\Service\Encryption\ArgonEncryptionService();
//$articleService = new \App\Service\Articles\ArticleService($articleRepository);
//$personService = new \App\Service\Person\PersonService($personRepository);
$fiscalService = new \App\Service\Fiscal\FiscalService($fiscalRepository);
//$userService = new App\Service\UserService($userRepository, $encryptionService);
//$articleHttpHandler = new \App\Http\article\ArticleHttpHandler($template, $dataBinder,$articleService );
//$fiscalHttpHandler = new \App\Http\Fiscal\BonHttpHandler($template, $dataBinder, $fiscalService, $personService);
//$personHttpHandler = new App\Http\Person\PersonHttpHanler($template, $dataBinder, $personService,$fiscalService);
//$emailHttpHandler = new App\Http\Email\EmailHttpHandler($template, $dataBinder, $emailService);
//$userHttpHandler = new \App\Http\UserHttpHandler($template, $dataBinder);
$webHttpHandler = new \App\Http\Weborders\WebOrderHttpHandler($template ,$dataBinder, $webOrderService);
