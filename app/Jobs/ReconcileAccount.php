<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ReconcileAccount implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user;


    public function __construct(User $user)
    {

        $this->user = $user;
    }

    public function handle(Filesystem $filesystem)
    {
        $filesystem->put(public_path('testing.txt'),'reconciling'.$this->user->name);

        logger('Đang Đối chiếu tài khoản của '.$this->user->name );
    }
}
