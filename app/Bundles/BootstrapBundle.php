<?php namespace App\Bundles;

use Tatter\Assets\Bundle;

class BootstrapBundle extends Bundle
{
    protected array $paths = [
        'bootstrap/css/bootstrap.min.css',
        'bootstrap/js/bootstrap.bundle.min.js',
    ];
}