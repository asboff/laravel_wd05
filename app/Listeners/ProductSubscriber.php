<?php

namespace App\Listeners;

use App\Events\ProductAddedEvent;

class ProductSubscriber
{
    public function addHandler($event){

    }

    public function registeredHandler($event){

    }

    /**
     * Зарегистрировать слушателей для подписчика.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe($events){
      $events->listen(ProductAddedEvent::class, [ProductSubscriber::class, 'addHandler']);
      $events->listen(ProductAddedEvent::class, [ProductSubscriber::class, 'registeredHandler']);
    }
}
