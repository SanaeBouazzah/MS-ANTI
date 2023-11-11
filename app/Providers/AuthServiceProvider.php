<?php

namespace App\Providers;

use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Auth\GenericUser;
use App\Policies\PublicationPolicy;
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
        Publication::class => PublicationPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
