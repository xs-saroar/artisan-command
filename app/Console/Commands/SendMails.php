<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class SendMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send
                        {user : The ID of the user}
                        {--queue : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $name = $this->choice(
            'What is your name?',
            ['Taylor', 'Dayle'],
           0
        );

        $this->line('Display this on the screen');

        $this->error('Something went wrong!');

        $this->info('The command was successful!');

        $this->comment('comment The command was successful!');

        $this->question('question The command was successful!');
        $this->warn('warn The command was successful!');

        
 
        // $this->table(
        //     ['Name', 'Email'],
        //     User::all(['name', 'email'])->toArray()
        // );

        dd($name);


        $userId = $this->argument('user');
        $arguments = $this->arguments();

        //dd($userId, $arguments);

        // Retrieve a specific option...
        $queueName = $this->option('queue');
        
        // Retrieve all options as an array...
        $options = $this->options();

        dd($queueName, $options);

    }
}
