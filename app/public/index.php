<?php

$r = new \Redis();
$r->connect('redis');

//$m = new \Memcached();
//$m->addServer('memcached', 11211);
//$m->setOption(\Memcached::OPT_BINARY_PROTOCOL, TRUE);

echo '<h1>Page load counter: '
    . ' redis=' . $r->incr('counter')
//  . ' memcached=' .  $m->increment('counter', 1, 0)
    . '</h1>';

show_source(__FILE__);