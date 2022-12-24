<?php

return [
  'debug'  => true,
  'routes' => [
    [
        'pattern' => 'blog/tag/(:any)',
        'action' => function ($tag) {
            return page('blog')->render([
                'tag' => $tag
            ]);
        }
    ]
  ]
];


?>