<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\User;
use App\Notifications\DataChangeEmailNotification;
use Notification;

class ProductObserver
{
    public function created(Product $product): void
    {
        $payload = [
            'action' => 'created',
            'model'  => sprintf('%s#%s', get_class($product), $product->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function updated(Product $product): void
    {
        $payload = [
            'action' => 'updated',
            'model'  => sprintf('%s#%s', get_class($product), $product->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }

    public function deleted(Product $product): void
    {
        $payload = [
            'action' => 'deleted',
            'model'  => sprintf('%s#%s', get_class($product), $product->id),
            'reason' => auth()->user(),
        ];

        $admins = User::admins()->get();

        Notification::send($admins, new DataChangeEmailNotification($payload));
    }
}
