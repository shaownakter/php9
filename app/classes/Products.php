<?php


namespace App\classes;


class Products
{
          protected  $allProducts;
          protected $result = [];

 public function index()
 {
     return [
         0=>[
             'id'=>1,
             'category_id'=>1,
             'name'=>' red T-shirt',
             'price'=>'200',
             'description'=>'Nice product',
             'image'=>'assets/img/p0.jpg',
         ],
         1=>[
     'id'=>2,
             'category_id'=>1,
     'name'=>' black T-shirt',
     'price'=>'300',
     'description'=>'Nice product',
     'image'=>'assets/img/p1.jpg',
 ],
         2=>[
             'id'=>3,
             'category_id'=>2,
             'name'=>' black shari',
             'price'=>'600',
             'description'=>'Nice product',
             'image'=>'assets/img/p2.jpg',
         ],
         3=>[
             'id'=>4,
             'category_id'=>2,
             'name'=>' read T-shirt',
             'price'=>'300',
             'description'=>'Nice product',
             'image'=>'assets/img/p6.jpg',
         ],
         4=>[
             'id'=>5,
             'category_id'=>3,
             'name'=>' read kids-shirt',
             'price'=>'300',
             'description'=>'Nice product',
             'image'=>'assets/img/p4.jpg',
         ],
         5=>[
             'id'=>6,
             'category_id'=>3,
             'name'=>' read kids-shirt',
             'price'=>'300',
             'description'=>'Nice product',
             'image'=>'assets/img/p5.jpg',
         ],

     ];
 }
 public function shortProducts ($categoryId)
 {
   $this->allProducts = $this->index();
   foreach ($this->allProducts as $product)
   {
       if ($product['category_id'] == $categoryId)
       {
           array_push($this->result,$product);
       }
   }
   return $this->result;
 }
 public  function getProductDetails($productId)
 {
     $this->allProducts = $this->index();
     foreach ($this->allProducts as $product)
     {
         if($product['id'] == $productId)
         {
             return $product;
         }
     }
 }
}