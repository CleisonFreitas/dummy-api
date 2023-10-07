<?php
declare(strict_types=1);
namespace App\Shared\Repositories;

use App\Shared\Interfaces\ListProductContract;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\JsonResponse;

class ListProductRepository implements ListProductContract
{
    /** @var Client $client; */
    private Client $client;

    /** @var string $url */
    private string $url;

    public function __construct(Client $client) 
    {
        $this->client = $client;
        $this->url = config('services.dummy.url');
    }

    /**
     * @return JsonResponse;
     */
    public function index(): JsonResponse
    {
        try{
            $products = $this->client->request('GET', $this->url);

            return response()->json([
                'response' => 'success',
                'data' => json_decode($products->getBody()->getContents())->products,
                'status' => $products->getStatusCode()
            ],$products->getStatusCode());
        }catch(ClientException $ex) {
            return response()->json($ex->getMessage(),$ex->getCode());
        }
    }
}
