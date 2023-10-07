<?php
declare(strict_types=1);
namespace App\Shared\Services;

use App\Shared\Interfaces\ListProductContract;

class ProductService
{
    /** @var ListProductContract $listRepository */
    private ListProductContract $listRepository;

    /**
     * Class constructor.
     *
     * @return void
     */
    public function __construct(ListProductContract $listRepository)
    {
        $this->listRepository = $listRepository;
    }

    /**
     * @return JsonResponse;
     */
    public function index()
    {
        return $this->listRepository->index();
    }
}
