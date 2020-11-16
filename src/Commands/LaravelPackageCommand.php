<?php

namespace Anubra266\LaravelPackage\Commands;

use Illuminate\Console\Command;

class LaravelPackageCommand extends Command
{
    public $signature = 'laravel_package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
