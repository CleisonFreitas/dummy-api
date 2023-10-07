<?php
declare(strict_types=1);
namespace App\Shared\Interfaces;

use Illuminate\Http\JsonResponse;

interface ListProductContract
{
    public function index(): JsonResponse;
}
