<?php

namespace RustamAliHussaini\EcommerceCompletionPackage\Commands;

use Illuminate\Console\Command;

class EcommerceCompletionPackageCommand extends Command
{
    public $signature = 'ecommerce-completion-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
