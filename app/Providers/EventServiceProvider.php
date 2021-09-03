<?php

namespace App\Providers;

use App\Listeners\AssignRoleForRegisteredUser;
use App\Models\ContactCompany;
use App\Models\Product;
use App\Models\Team;
use App\Models\User;
use App\Models\UserAlert;
use App\Observers\ContactCompanyObserver;
use App\Observers\ProductObserver;
use App\Observers\TeamObserver;
use App\Observers\UserAlertObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            AssignRoleForRegisteredUser::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        UserAlert::observe(UserAlertObserver::class);
        User::observe(UserObserver::class);
        Team::observe(TeamObserver::class);
        Product::observe(ProductObserver::class);
        ContactCompany::observe(ContactCompanyObserver::class);
    }
}
