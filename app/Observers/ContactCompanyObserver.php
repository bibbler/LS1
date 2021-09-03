<?php

namespace App\Observers;

use App\Models\ContactCompany;
use App\Models\User;
use App\Notifications\DataChangeEmailNotification;
use Notification;

class ContactCompanyObserver
{
    public function created(ContactCompany $contactCompany): void
    {
        $payload = [
            'action' => 'created',
            'model'  => sprintf('%s#%s', get_class($contactCompany), $contactCompany->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function updated(ContactCompany $contactCompany): void
    {
        $payload = [
            'action' => 'updated',
            'model'  => sprintf('%s#%s', get_class($contactCompany), $contactCompany->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function deleted(ContactCompany $contactCompany): void
    {
        $payload = [
            'action' => 'deleted',
            'model'  => sprintf('%s#%s', get_class($contactCompany), $contactCompany->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }
}
