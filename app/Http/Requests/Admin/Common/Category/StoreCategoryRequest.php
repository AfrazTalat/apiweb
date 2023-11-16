<?php

namespace App\Http\Requests\Admin\Common\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|string|min:2|max:56',
            'description' => 'nullable|string|min:2|max:256',
            'is_enabled'  => 'required|boolean',
            'featured'    => 'required|boolean',
            'parent_id'   => 'nullable|numeric',
            // 'categories'  => 'nullable|array|exists:categories,id',
        ];
    }

    protected function prepareForValidation()
    {
        // $this->merge([
        //     'categories' => $this->parent ? [$this->parent] : [],
        // ]);
    }
}
