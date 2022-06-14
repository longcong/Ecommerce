<?php

namespace App\Interfaces;

interface ProductInterface{
    public function getPopulars(int $limit = 4);
    public function getProducts(int $limit = 12);
    public function getCategories();
    public function getTag();
    public function getOrder();
    public function getViewWishlist();
    public function getCoupons();
    
}
