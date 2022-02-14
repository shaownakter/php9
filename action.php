<?php
require_once 'vendor/autoload.php';

//use App\classes\calculator;
//use app\classes\all-products;
use App\classes\Category;
use App\classes\Products;




if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-products')
    {
        $category = new category();
        $categories = $category->category();
        $product = new products();
        $products = $product->index();

        include "pages/allProducts.php";
    }elseif ($_GET['pages'] =='category-products')
    {

        $category = new category();
        $categories = $category->category();
        $product = new Products();
        $products = $product->shortproducts($_GET['category_id']);
        include "pages/allProducts.php";
    }
    elseif ($_GET['pages'] =='product-details')
    {

        $category = new category();
        $categories = $category->category();
        $product = new products();
        $productDetails = $product->getproductdetails($_GET['product_id']);
        include 'pages/productDetails.php';

    }

}









