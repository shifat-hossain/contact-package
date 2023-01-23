<?php
namespace ShifatHossain\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
    public function boot()
    {
        
    }


    public function register()
    {
        $this->app->bind(ContactService::class, function ($app) {
            return new ContactService();
        });
    }
}