<?php

/*
 * This file is part of askvortsov/flarum-private-tags.
 *
 * Copyright (c) 2020 Alexander Skvortsov.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Askvortsov\FlarumPrivateTags;

use Askvortsov\FlarumPrivateTags\Access;
use Flarum\Extend;
use Illuminate\Contracts\Events\Dispatcher;

return [
    
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
        
    new Extend\Locales(__DIR__ . '/resources/locale'),

    function (Dispatcher $events) {
        $events->subscribe(Access\DiscussionPolicy::class);
        $events->subscribe(Access\TagPolicy::class);
    }
];