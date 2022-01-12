<!doctype html>
    {include file="head.tpl"}
    <body>

        <div class="container">{include file="header.tpl"}</div>

        <main class="container">


            <div class="row mb-2">
                {foreach from=$articles item=$art}
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><a style="text-decoration: none" href = "/public/art_cat.php?categori={$art->getIdCategories()->getId()}">{$art->getIdCategories()->getName()}</a></strong>
                        <h3 class="mb-0">{$art->getTitel()}</h3>
                        <div class="mb-1 text-muted ">{$art->getDate()|date_format}</div>
                        <p class="card-text mb-auto">{$art->getText()|truncate:120:"...":true}</p>
                        <a href="/public/art.php?id={$art->getId()}" >Продолжить читать</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="/image/{$art->getImage()}" height="250" width="190"/> 
                        </svg>
                    </div>
                    </div>
                </div>
                {/foreach}  
            </div>

            <hr>

            <div class="row g-5">
                <div class="col-md-8">
                {foreach from=$arts item=$art}
                <div class="col-md-12">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><a style="text-decoration: none" href = "/public/art_cat.php?categori={$art->getIdCategories()->getId()}"> {$art->getIdCategories()->getName()} </a></strong>
                        <h3 class="mb-0">{$art->getTitel()}</h3>
                        <div class="mb-1 text-muted ">{$art->getDate()|date_format}</div>
                        <p class="card-text mb-auto">{$art->getText()|truncate:120:"...":true}</p>
                        <a href="/public/art.php?id={$art->getId()}" >Продолжить читать</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="/image/{$art->getImage()}" height="250" width="190"/> 
                        </svg>
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