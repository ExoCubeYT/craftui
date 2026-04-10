<?php

namespace Exocubeyt\CraftUI\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'craftui:install';
    protected $description = 'Install all of the CraftUI resources';

    public function handle()
    {
        $this->info('Installing CraftUI resources...');

        $this->callSilent('vendor:publish', ['--tag' => 'craftui-config']);
        $this->callSilent('vendor:publish', ['--tag' => 'craftui-views']);
        $this->callSilent('vendor:publish', ['--tag' => 'craftui-assets']);

        $this->info('CraftUI scaffolding installed successfully.');
        $this->info('Remember to add @craftuiStyles and @craftuiScripts to your layout.');
    }
}
