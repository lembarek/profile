<?php

namespace Lembarek\Profile\Requests;

use Lembarek\Core\Countries\Countries;

class ProfileRequest extends Request
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
        $all_countries = array_reduce(Countries::$CountriesLongNames, function ($r, $v) {
            return $r.=$v.',';
        });

        return [
        'birth_date' => 'date',
        'sex' => 'in:male,female',
        'country' => "in:$all_countries",
        ];
    }
}
