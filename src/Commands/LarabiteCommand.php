<?php

namespace cpuch\Larabite\Commands;

use Illuminate\Console\Command;

class LarabiteCommand extends Command
{
    public $signature = 'larabite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
