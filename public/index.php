<?php
    use Entities\Articles;
    use Entities\Categories;

    include('../setup.php');
    require_once('../bootstrap.php');
    require('../src/weather.php');

    $smarty->assign('weather', $weatherData);

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

    $articles = $entityManager->getRepository(Articles::class)->findBy([], ['id' => 'DESC'], 2);
    $smarty->assign('articles', $articles);

    $arts = $entityManager->getRepository(Articles::class)->findBy([], ['id' => 'DESC']);
    $smarty->assign('arts', $arts);

    $smarty->display('index.tpl');
?>