<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    
        Validator::extend('validateNumber', function ($attribute, $value, $parameters, $validator) {
            //Custom validation logic 
          return strlen($value) === 10 && is_numeric($value);// Check if the value is numeric
        });

    
        // Custom Validation rules password validate
        Validator::extend('strong_password', function ($attribute, $value, $parameters, $validator) {
            // Check if the value contains at least one letter, one digit, one symbol, and has a minimum length of 6 characters
            return preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/', $value);
        });

        Validator::replacer('strong_password', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The :attribute must contain at least one letter, one digit, one symbol, and have a minimum length of 6 characters.');
        });
        


    }
}
