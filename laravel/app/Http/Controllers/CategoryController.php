<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // GET /api/categories
    public function getCategories()
    {
        return [
            "message" => "Getting list of categories"
        ];
    }

    // POST /api/categories
    public function createCategory(Request $request)
    {
        return [
            "message" => "Creating 1 new category"
        ];
    }

    // GET /api/categories/{categoryId}
    public function getCategory($categoryId)
    {
        return [
            "message" => "Getting 1 category base on given categoryId"
        ];
    }

    // PATCH /api/categories/{categoryId}
    public function updateCategory($categoryId, Request $request)
    {
        return [
            "message" => "Updating 1 category base on given categoryId"
        ];
    }

    // DELETE /api/categories/{categoryId}
    public function deleteCategory($categoryId)
    {
        return [
            "message" => "Deleting 1 category base on given categoryId"
        ];
    }
}
