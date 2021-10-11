<?php

$m = new Memcached();
$m->addServer('memcached', 11211);
$m->setOption(\Memcached::OPT_BINARY_PROTOCOL, TRUE); // required because of bug

echo '<h1>Page load counter: ' . $m->increment('counter', 1, 0) . '</h1>';

show_source(__FILE__);