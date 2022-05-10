<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

$logger = new LoggerWrapper('RenderLogger');
$logs = $logger->getLogs();
$loader = new Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
$view = new \Twig\Environment($loader);

$namePage = $_GET['namePage'] ?? 'Logs';

try {
    echo $view->render('index.html.twig', ['namePage' => $namePage, 'logs' => $logs ?? array()]);
} catch (\Twig\Error\LoaderError | \Twig\Error\RuntimeError | \Twig\Error\SyntaxError $e) {
    $logger->critical($e);
}
