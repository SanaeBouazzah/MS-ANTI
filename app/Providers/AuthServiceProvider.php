<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    public function boot(): void
    {
        $this->registerPolicies();
        if(Auth()::id() !== $publication->profile_id){
          abort(404);
        }
        Gate::define('update-publication', function(Profile $profile, Publication $publication){
          return $profile->id !== $publication->profile_id;
        });
    }
}
