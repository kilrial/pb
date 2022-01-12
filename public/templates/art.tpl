<!doctype html>
    {include file="head.tpl"}
    <body>

        <div class="container">{include file="header.tpl"}</div>

        <main class="container">


            <div class="row g-5">
                {if $art == false}
                    <h1>Статья не найдена</h1>
                {/if}
                <div class="col-md-8">
                    <img src ="/image/{$art->getImage()}" style = "max-width: 100%" >
                    <h1>{$art->getTitel()}</h1>
                    <div class="mb-1 text-muted ">{$art->getDate()|date_format}</div>
                    <p class="card-text mb-auto">{$art->getText()}</p>

                    <h1>Комментарии</h1>
                        <div class="col-md-12">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <form class = "form" method = "POST" action = "/public/art.php?id={$art->getId()}">
                                        <div class="row row-fluid">
                                            <div class ="col-md-4">
                                                <input class="mb-3" type="text" name="author" placeholder="Имя" required>
                                                <input type="submit" name="post_comm" value="Добавить комментарий">
                                            </div>
                                            
                                            <div class ="col-md-8">
                                                <textarea class="container-fluid" name="text" placeholder="Текст комментария" required></textarea>   
                                            </div>    
                                            
                                        </div>          
                                    </form>
                                </div>
                            </div>
                        </div>

                    {if $comments == false}
                        <h1>Нет комментариев</h1>    
                    {/if}
                    {foreach from=$comments item=$comm}
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">{$comm->getAuthor()}</h3>
                                <p class="card-text mb-auto">{$comm->getText()}</p>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                        
                </div>

            {include file='sidebar.tpl'} 

            </div>    
        </main>  

    {include file='footer.tpl'}

  </body>
</html>