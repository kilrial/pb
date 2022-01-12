<?php
    use Entities\Articles;
    use Entities\Categories;

    include '../setup.php';
    require_once('../bootstrap.php');

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

    $art_cat = $entityManager->getRepository(Articles::class)->findBy(['idCategories' => $_GET['categori']]);
    $smarty->assign('articles', $art_cat);

    $smarty->debugging = true;
    $smarty->display('art_cat.tpl');
?> 