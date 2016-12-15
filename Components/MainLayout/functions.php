<?php
namespace Flynt\Components\MainLayout;

use Flynt\Helpers\Component;

add_action('wp_enqueue_scripts', function () {
  Component::enqueueAssets('MainLayout', [
    [
      'name' => 'console-polyfill',
      'type' => 'script',
      'path' => 'vendor/console.js'
    ],
    [
      'name' => 'babel-polyfill',
      'type' => 'script',
      'path' => 'vendor/babel-polyfill.js'
    ],
    [
      'name' => 'document-register-element',
      'type' => 'script',
      'path' => 'vendor/document-register-element.js'
    ],
    [
      'name' => 'picturefill',
      'path' => 'vendor/picturefill.js',
      'type' => 'script'
    ],
    [
      'name' => 'normalize',
      'path' => 'vendor/normalize.css',
      'type' => 'style'
    ]
  ]);
});