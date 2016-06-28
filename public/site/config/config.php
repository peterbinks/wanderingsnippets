<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PERSONAL-bb99c27fa993be7459e866ddd22d96f8');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('languages', array(
    array(
        'code'    => 'en',
        'name'    => 'English',
        'locale'  => 'en_US',
        'default' => true,
        'url'     => '/'
    )
));

c::set('kirbytext.image.figure', false);

 c::set('panel.install', true); 
