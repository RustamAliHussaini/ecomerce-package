<?php

namespace Ramaki\Inventory\Commands;

use Illuminate\Console\Command;

class InventoryCommand extends Command
{
    public $signature = 'inventory';

    public $description = 'My command';

    public function handle(): int
    {

        $this->comment('All done');

        return self::SUCCESS;
    }
}
