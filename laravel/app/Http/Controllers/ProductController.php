<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /api/products
    public function getProducts()
    {
        return [
            "message" => "Getting list of products"
        ];
    }

    // POST /api/products
    public function createProduct(Request $request)
    {
        return [
            "message" => "Creating 1 new product"
        ];
    }

    // GET /api/products/{productId}
    public function getProduct($productId)
    {
        return [
            "message" => "Getting 1 product base on given productId"
        ];
    }

    // PATCH /api/products/{productId}
    public function updateProduct($productId, Request $request)
    {
        return [
            "message" => "Updating 1 product base on given productId"
        ];
    }

    // DELETE /api/products/{productId}
    public function deleteProduct($productId)
    {
        return [
            "message" => "Deleting 1 product base on given productId"
        ];
    }
}
