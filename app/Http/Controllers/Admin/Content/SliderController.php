<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Resources\Admin\Content\SliderResource;
use App\Models\Content\Slider;
use App\Support\Http\CrudController;

class SliderController extends CrudController
{
    protected $model = Slider::class;

    protected $resource = SliderResource::class;

    protected $appends = ['image'];

    protected $media = [
        //key - the name of media name
        //value1 - file type, single for single file upload, multi for something like attachments
        //value2 - collection name if needed
        'image' => 'single|image',
    ];
}
