<?php

namespace App\Http\Controllers;

use Blaspsoft\Onym\Facades\Onym;

class FilenameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo __('Generates a random string of characters for the filename: ') . Onym::make(strategy: 'random', options: [
            'length' => 8,
            'prefix' => 'temp_',
            'suffix' => '_draft'
        ]) . PHP_EOL;
        echo __('Generates a UUID v4 for the filename: ') . Onym::make(strategy: 'uuid', options: [
            'prefix' => 'id_',
            'suffix' => '_backup'
        ]) . PHP_EOL;
        echo __('Adds a timestamp to the filename using PHP\'s DateTime formatting: ') . Onym::make('document', 'timestamp', 'pdf', [
            'format' => 'Y-m-d_H-i-s',
            'prefix' => 'letter_',
            'suffix' => '_signed'
        ]) . PHP_EOL;
        /*
        echo __('Converts the filename to a URL-friendly slug: ') . Onym::make('My Document Name', 'slug', 'pdf', [
            'prefix' => 'post_',
            'suffix' => '_draft'
        ]) . PHP_EOL;
        */
        echo __('Generates a hash of the filename using various algorithms: ') . Onym::make('document', 'hash', 'pdf', [
            'algorithm' => 'md5',
            'prefix' => 'hash_',
            'suffix' => '_checksum'
        ]) . PHP_EOL;
    }
}
