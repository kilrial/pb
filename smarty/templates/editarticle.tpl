<!doctype html>
    {include file="head.tpl"}
    <body>

        <div class="container">{include file="header.tpl"}</div>

        <main class="container">


            <div class="row g-5">
                <div class="col-md-8">
                    <form calss="form" method="POST" id="data" action="/editarticle.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="mb-3" type="text" name="titel" placeholder="Название" required>                           
                                
                                <select form="data" name="cat"> 
                                {foreach from=$categories item=$cat}
                                    <option>{$cat->getName()}</option>    
                                {/foreach}
                                </select>

                                <input class="mb-3" method="POST" enctype="multipart/form-data" type="file" name="image">   
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea class="container-fluid" style="height: 550px;" name="text" placeholder="Текст статьи" required></textarea>   
                            </div>

                            <div class="col-md-12">
                                <input type="submit" name="post_art" value="Добавить статью">
                            </div>
                        </div>
                    </form>
                </div>
            {include file='sidebar.tpl'} 

            </div>    
        </main>  

    {include file='footer.tpl'}

  </body>
</html>