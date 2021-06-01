<?php

declare(strict_types=1);

namespace App\Core\Product\Service;

use App\Api\Product\Dto\ProductCreateRequestDto;
use App\Api\Product\Dto\ProductUpdateRequestDto;
use App\Core\Product\Document\Product;
use App\Core\Product\Factory\ProductFactory;
use App\Core\Product\Repository\ProductRepository;
use Psr\Log\LoggerInterface;

class ProductService
{
    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;

    /**
     * @var ProductFactory
     */
    private ProductFactory $productFactory;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    public function __construct(
        ProductRepository $productRepository,
        ProductFactory $productFactory,
        LoggerInterface $logger
    ) {
        $this->productRepository = $productRepository;
        $this->productFactory    = $productFactory;
        $this->logger            = $logger;
    }

    public function findOneBy(array $criteria): ?Product
    {
        return $this->productRepository->findOneBy($criteria);
    }

    public function updateProduct(string $id, ProductUpdateRequestDto $requestDto)
    {
        //todo update logic
    }

    public function createProduct(ProductCreateRequestDto $requestDto): Product
    {
        $product = $this->productFactory->create(
            $requestDto->title,
            $requestDto->description,
            $requestDto->image,
            $requestDto->price,
            $requestDto->place_date,
            $requestDto->category,
            $requestDto->city,
            $requestDto->type,
            $requestDto->user,
        );

        $product->setTitle($requestDto->title);
        $product->setDescription($requestDto->description);
        $product->setImage($requestDto->image);
        $product->setPrice($requestDto->price);
        $product->setPlaceDate($requestDto->place_date);
        $product->setCategory($requestDto->category);
        $product->setCity($requestDto->city);
        $product->setType($requestDto->type);
        $product->setUser($requestDto->user);

        $product = $this->productRepository->save($product);

        $this->logger->info(
            'Product created successfully',
            [
                'product_id'   => $product->getId(),
                'product_name' => $product->getTitle(),
            ]
        );

        return $product;
    }
}
