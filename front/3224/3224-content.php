<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3224">
    <div class="filter">
        <h3>Filter by price</h3>
        <div class="price-slider">
            <hr>
        </div>
        <button>Filter<span class="arrow">&#8594;</span></button>
        <p>Price: $10<span></span>$40</p>
    </div>
    <div class="categories">
        <hr>
        <h3>Categories</h3>
        <div class="list-item">
            <li><a href="">Arts & Crafts</a></li>
            <li><a href="">Business</a></li>
            <li><a href="">Design</a></li>
            <li><a href="">Languages</a></li>
            <li><a href="">Psychology</a></li>
            <li><a href="">Technology</a></li>
            <li><a href="">Uncategoized</a></li>
        </div>
    </div>
    <div class="related-product">
        <hr>
        <h3>Related products</h3>
        <div class="item-product">
            <img src="./shop-list" alt="">
            <div class="product-content">
                <a href="">Therapy methods</a>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
                <p>$35</p>
            </div>
        </div>
        <div class="item-product">
            <img src="./shop-list-02" alt="">
            <div class="product-content">
                <a href="">Therapy methods</a>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
                <span>&#9734;</span>
                <p>$25</p>
            </div>
        </div>
        <div class="item-product">
            <img src="./shop-list-03" alt="">
            <div class="product-content">
                <a href="">Therapy methods</a>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <p>$25</p>

            </div>
        </div>
    </div>
    <div class="tags">
        <hr>
        <h3>Tags</h3>
        <div class="tag-content">
            <a href="">Arts, Business, Creativity, <br>Economy, Mind, Motivation, Tech,<br> Writing</a>
        </div>
    </div>
    <div class="search">
        <form action="">
            <div class="search-container">
                <input type="text" placeholder="Search">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </form>
    </div>
</div>