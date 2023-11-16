<?php

namespace App\Http\Controllers\Admin\Ecommerce;

use App\Http\Requests\Admin\Ecommerce\DeleteProductRequest;
use App\Http\Requests\Admin\Ecommerce\IndexProductRequest;
use App\Http\Requests\Admin\Ecommerce\ShowProductRequest;
use App\Http\Requests\Admin\Ecommerce\StoreProductRequest;
use App\Http\Requests\Admin\Ecommerce\UpdateProductRequest;
use App\Http\Resources\Admin\Ecommerce\ProductResource;
use App\Models\Ecommerce\Product;
use App\Support\Http\CrudController;

class ProductController extends CrudController
{
    protected $model    = Product::class;
    protected $resource = ProductResource::class;
    protected $requests = [
        'index'  => IndexProductRequest::class,
        'show'   => ShowProductRequest::class,
        'store'  => StoreProductRequest::class,
        'update' => UpdateProductRequest::class,
        'delete' => DeleteProductRequest::class,
    ];
    protected $appends = ['images', 'pdf'];

    protected $media = [
        //key - the name of media name
        //value1 - file type, single for single file upload, multi for something like attachments
        //value2 - collection name if needed
        'images' => 'multi|images',
        'pdf'    => 'single|pdf',
    ];
    
    public function with()
    {
        return [
            'brand',
            'categories',
        ];
    }
}
