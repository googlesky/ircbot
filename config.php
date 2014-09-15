<?php
return array(
    'server'   => 'irc.lightirc.com',
    'port'     => 6667,
    'name'     => 'phpbot',
    'nick'     => 'phpbot',
    'channels' => array(
        '#hdvnbits',
    ),
    'max_reconnects' => 100,
    'log_file'       => 'log.txt',
    'commands'       => array(
        'Command\Say'     => array(),
        'Command\Weather' => array(
            'yahooKey' => 'a',
        ),
        'Command\Joke'    => array(),
        'Command\Ip'      => array(),
        'Command\Imdb'    => array(),
        'Command\Poke'    => array(),
        'Command\Join'    => array(),
        'Command\Part'    => array(),
        'Command\Timeout' => array(),
        'Command\Quit'    => array(),
        'Command\Restart' => array(),
    ),
    'listeners' => array(
        'Listener\Joins' => array(),
    ),
);