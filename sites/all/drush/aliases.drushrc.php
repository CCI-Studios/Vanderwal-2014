<?php

$aliases['dev'] = array(
	'uri'=> 'dev.trusses.ca',
	'root' => '/home/trusses/subdomains/dev/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'trusses',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=>'-p 37241'
);

