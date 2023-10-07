<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Shared\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /** @var ProductService $service */
    private ProductService $service;

    public function __construct(ProductService $service) 
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse;
     */
    public function index()
    {
        return $this->service->index();
    }
}
