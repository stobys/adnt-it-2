<?php

namespace App\Listeners;

use Log;

class DatabaseEventsSubscriber
{
    /**
     * Handle db query execution events.
     */
    public function onQueryExecuted($event) {
        // @TODO: add query logging to a separate file based on configuration option
    }

    // TransactionBeginning
    // TransactionCommited
    // TransactionRolledBack
    
    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Database\Events\QueryExecuted',
            'App\Listeners\DatabaseEventsSubscriber@onQueryExecuted'
        );

    }

}
