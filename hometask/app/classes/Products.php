<?php


namespace App\Classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index ()
    {
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Black T-shirt',
                'price' => 700,
                'description' => 'product description',
                'image' => 'assets/img/p1.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => 'White T-shirt',
                'price' => 900,
                'description' => 'product description',
                'image' => 'assets/img/p2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 1,
                'name' => 'Red Saree',
                'price' => 5600,
                'description' => 'product description',
                'image' => 'assets/img/p3.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Black Saree',
                'price' => 6500,
                'description' => 'product description',
                'image' => 'assets/img/s3.jpg',
            ],
            4 => [
                'id' => 5,
                'category_id' => 2,
                'name' => 'Kids White Shirt',
                'price' => 2500,
                'description' => 'product description',
                'image' => 'assets/img/k-3.jpg',
            ],
            5 => [
                'id' => 6,
                'category_id' => 2,
                'name' => 'Kids Black Shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/k-1.jpg',
            ],
            6 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Kids Black Shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/k-1.jpg',
            ],
            7 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Kids Black Shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/k-1.jpg',
            ],
            8 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Kids Black Shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/k-1.jpg',
            ],
            9 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Kids Black Shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/k-1.jpg',
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
             array_push($this->result, $product);
          }
      }
     return $this->result;
    }

    public function getProductDetails ($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}