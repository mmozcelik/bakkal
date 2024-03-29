<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use LaravelLocalization;
use Lang;

class ProdPropRequest extends Request {

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
        $rules['title_en'] = 'required|max:255';
		return $rules;
	}

	public function attributes()
	{
        $attr['title_en'] = 'Başlık';
		return $attr;
	}

}
