<?php
    use Entities\Articles;
    use Entities\Categories;

    include('../setup.php');
    require_once('../bootstrap.php');

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

    $articles = $entityManager->getRepository(Articles::class)->findBy([], ['id' => 'DESC'], 2);
    $smarty->assign('articles', $articles);

    $arts = $entityManager->getRepository(Articles::class)->findBy([], ['id' => 'DESC']);
    $smarty->assign('arts', $arts);

    $smarty->debugging = true;
    $smarty->display('index.tpl');
?>