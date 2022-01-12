<?php
    use Entities\Articles;
    use Entities\Categories;
    use Entities\Comments;

    include('../setup.php');
    require_once('../bootstrap.php');

    $categories = $entityManager->getRepository(Categories::class)->findAll();
    $smarty->assign('categories', $categories);

    $art = $entityManager->getRepository(Articles::class)->findOneBy(['id' => $_GET['id']]);
    $smarty->assign('art', $art);

    if(isset($_POST['post_comm'])){
        $comm = new Comments();

        $inputText = htmlspecialchars(strip_tags($_POST['author']));
        $comm->setAuthor($inputText);

        $inputText = htmlspecialchars(strip_tags($_POST['text']));
        $comm->setText($inputText);

        $comm->setIdArticles($art);

        $entityManager->persist($comm);
        $entityManager->flush();
    }

    $comments = $entityManager->getRepository(Comments::class)->findBy(['idArticles' => $_GET['id']]);
    $smarty->assign('comments', $comments);

    $smarty->debugging = true;
    $smarty->display('art.tpl');
?>
