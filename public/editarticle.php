<?php
    use Entities\Articles;
    use Entities\Categories;

    include ('../setup.php');
    require_once('../bootstrap.php');

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

   if(isset($_POST['post_art'])){
        $art = new Articles();

        $art->setTitel($_POST['titel']);
        //$art->setDate(date("F j, Y, g:i a"));
        $takeCat = $entityManager->getRepository(Categories::class)->findOneBy(['name' => $_POST['cat']]);
        $art->setIdCategories($takeCat);
        $art->setText($_POST['text']);

        $uploaddir = "/var/www/pb/image/";
        $uploadfile = $uploaddir.basename($_FILES['image']['name']);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
            $art->setImage($_FILES['image']['name']);
        }

        $entityManager->persist($art);
        $entityManager->flush();
    }

    $smarty->debugging = true;
    $smarty->display('editarticle.tpl');
?>