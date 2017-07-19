<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/categories/Letter">Letters</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Article">Articles</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Book">Books</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Photograph">Photographs</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Artwork">Artworks</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Brochure">Brochures</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/categories/Miscellaneous">Miscellaneous</a></li>
                <li id="searchForm">
                    <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php

if(file_exists('application/views/' . $actualPath . '.php')) {
    require_once 'application/views/' . $actualPath . '.php';
}
elseif(file_exists('application/views/' . $actualPath . '/index.php')) {
    require_once 'application/views/' . $actualPath . '/index.php';
}
else{
    require_once 'application/views/error/index.php';
}

?>
