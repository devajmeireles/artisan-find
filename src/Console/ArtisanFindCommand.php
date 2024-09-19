<?php

namespace DevAJMeireles\ArtisanFind\Console;

use Illuminate\Console\Command;

use function Laravel\Prompts\suggest;

class ArtisanFindCommand extends Command
{
    protected $signature = 'find';

    protected $description = 'Useful Artisan command to find other Artisan commands.';

    public function handle(): int
    {
        $commands = collect($this->getApplication()->all())
            ->keys()
            ->filter(fn ($key) => $key !== $this->signature)
            ->map(fn ($key) => $key)
            ->toArray();

        $command = suggest(
            'Which command do you want to run?',
            options: $commands,
            required: true,
            hint: 'Insert part of the command name to filter the list.'
        );

        $this->call($command);

        return self::SUCCESS;
    }
}
