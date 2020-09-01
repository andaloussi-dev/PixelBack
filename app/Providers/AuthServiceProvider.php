<?php

namespace App\Providers;

use App\Issue\Issue;
use App\Customer\Policy\IssuePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Issue::class=> IssuePolicy::class,  
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Passport::routes();
        
        // auth scopes to determine admin and Customer privilege

      /*  Passport::tokensCan([
            'admin-privilege' => 'Adminestarot',
            'customer-privilege' => 'customer',
        ]);*/
    }
}
