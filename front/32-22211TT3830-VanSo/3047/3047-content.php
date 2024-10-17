<div class="container custom-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="sidebar">
                <div class="search-box">
                    <form class="form-search">
                        <input type="text" placeholder="SEARCH PRODUCTS...">
                    </form>
                </div>
                <div class="product-categories">
                    <h4 class="widget-title">Product categories</h4>
                    <ul class="product-categories-2">
                        <li class="cat-item"><a href="#" class="item">Clothing</a></li>
                        <li class="cat-item"><a href="#" class="item">Music</a></li>
                        <li class="cat-item"><a href="#" class="item">Posters</a></li>
                        <li class="cat-item"><a href="#" class="item">Headphones</a></li>
                        <li class="cat-item"><a href="#" class="item">Uncategorized</a></li>
                    </ul>
                </div>
                <div class="filter-by-price">
                    <h4 class="widget-title">Filter by price</h4>
                    <form class="form-filter-price">
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                        </div>
                        <div class="price-input">
                            <button class="btn-filter">FILTER</button>
                            <div class="field">
                                Price: <input type="number" class="input-min" value="2500" readonly>
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <input type="number" class="input-max" value="7500" readonly>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="top-rated-products">
                    <h4 class="widget-title">Top rated products</h4>
                    <ul class="product_list_widget">
                        <li class="item_product">
                            <div class="product">
                                <a href="#"><img src="./images/pin.jpg" alt="Product 1" class="img-product"></a>
                                <div class="product-info">
                                    <h4 class="title-product">PELLENTESQUE HABITAN</h4>
                                    <span class="rating">★★★★★</span>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </li>
                        <li class="item_product">
                            <div class="product">
                                <a href="#"><img src="./images/nokia.jpg" alt="Product 2" class="img-product"></a>
                                <div class="product-info">
                                    <h4 class="title-product">AEFUIGAT VITAE</h4>
                                    <span class="rating">★★★★★</span>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
                maxPrice = parseInt(priceInput[1].value);

            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                if (e.target.className === "input-min") {
                    rangeInput[0].value = minPrice;
                    range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                } else {
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });

    rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
                if (e.target.className === "range-min") {
                    rangeInput[0].value = maxVal - priceGap;
                } else {
                    rangeInput[1].value = minVal + priceGap;
                }
            } else {
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });

</script>