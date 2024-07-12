<?php

namespace App\Http\Controllers;

use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'],
            'amount' => ['required', 'numeric', 'min:1', 'max:10000000'],
            'gender' => ['nullable', 'string', 'in:male,female'],
            'zip' => ['required', 'digits:6'],
            'subscription' => ['nullable', 'boolean'],
            'agreement' => ['accepted'],
//            'password' => ['required', 'string', 'min:7', 'confirmed'],
            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'],
            'current_password' => ['required', 'string', 'current_password'],
            'email' => ['required', 'string', 'max:100', 'email', 'exists:users, email'],
//            'country_id' => ['required', 'integer', 'exists:countries, id'],
            'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)],
//            'phone' => ['required', 'string', 'unique:users,phone'],
            'phone' => ['required', 'string', new Phone, Rule::unique('users')->ignore($user)],
            'website' => ['nullable', 'string', 'url'],
            'uuid' => ['nullable', 'string', 'uuid'],
            'ip' => ['nullable', 'string', 'ip'],
            'avatar' => ['required', 'file', 'image', 'max:1024'],
            'birth_date' => ['nullable', 'string', 'date'],
            'start_date' => ['required', 'string', 'date', 'after_or_equal:today'],
            'finish_date' => ['required', 'string', 'date', 'after:start_date'],
            'services' => ['nullable', 'array', 'min:1', 'max:10'],
            'services.*' => ['required', 'integer'],
            'delivery' => ['required', 'array', 'size:2'],
            'delivery.date' => ['required', 'string', 'date_format:Y-m-d'],
            'delivery.time' => ['required', 'string', 'date_format:H:i:s'],
//            'secret' => ['required', 'string', function ($attribute, $value, \Closure $fail) {
//                if ($value !== config('example.secret')) {
//                    $fail(__('Invalid secret key'));
//                }
//            }]


        ]);


    }
}
