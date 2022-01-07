<?php
    use Entities\Articles;
    use Entities\Categories;
    use Entities\Comments;

    include 'setup.php';
    require_once('libs/bootstrap.php');

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

   if(isset($_POST['post_art'])){
        $art = new Articles();

        $art->setTitel($_POST['titel']);
        //$art->setDate(date("F j, Y, g:i a"));
        $takeCat = $entityManager->getRepository(Categories::class)->findOneBy(['name' => $_POST['cat']]);
        $art->setIdCategories($takeCat);
        $art->setText($_POST['text']);

        $image = $_FILES['image'];
        $art->setImage($image['name']);
        move_uploaded_file($image['tmp_name'], "image/".$image['name']);

        $entityManager->persist($art);
        $entityManager->flush();
    }

    $smarty->debugging = true;
    $smarty->display('editarticle.tpl');
?>