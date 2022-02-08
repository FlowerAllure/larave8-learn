<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ChunkController extends Controller
{
    #[NoReturn]
    public function logChunk()
    {
        User::query()->chunk(2000, function ($rows) use (&$users) {

        });
    }

    #[NoReturn]
    public function logChunkById()
    {
        User::query()->chunkById(2000, function ($rows) use (&$users) {

        });
    }
}
