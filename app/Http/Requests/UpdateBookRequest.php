<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $bookId = $this->route('book');

        return [
            'isbn' => 'required|unique:books,isbn,' . $bookId,
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'date_published' => 'required|date',
        ];
    }
}
