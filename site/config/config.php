<?php
return [
    'languages' => true,
    'debug' => true,
    'auth' => [
        'methods' => ['password'],
    ],
    'panel' =>[
        'install' => false
    ],
    'thumbs' => [
        'srcsets' => [
            'default' => [
                '800w' => ['width' => 800, 'quality' => 80],
                '1024w' => ['width' => 1024, 'quality' => 80],
                '1440w' => ['width' => 1440, 'quality' => 80]
            ]
        ]
    ],
    'blocks' => [
        'fieldsets' => [
          'custom' => [
            'label' => 'Custom blocks',
            'type' => 'group',
            'fieldsets' => [
            ]
          ],
          'kirby' => [
            'label' => 'Kirby blocks',
            'type' => 'group',
            'fieldsets' => [
              'heading',
              'text',
              'list',
              'quote',
              'image',
              'video',
              'code',
              'markdown'
            ]
          ]
        ]
      ]
];