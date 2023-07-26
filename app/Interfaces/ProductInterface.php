<?php

namespace App\Interfaces;

interface ProductInterface{
    public function getPopulars(int $limit = 4);
    public function getProducts();
    public function getCategories();
    public function getTag();
    public function getOrder();
    public function getViewWishlist();
    public function getCoupons();
    public function getPayments();
    public function getBrands();
    public function getAoPhong(int $limit = 4);
    public function getAoPolo(int $limit = 4);
    public function getQuanDai(int $limit = 4);
    public function getQuanDui(int $limit = 4);
    public function getPRoductImport();
}
