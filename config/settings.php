<?php

return array(
	'script_url' => URL::to_route('upload'),
	'upload_dir' => path('storage').'uploads/files/',
	'upload_url' => URL::base().'uploads/files/',
	'delete_type' => 'POST',
	'image_versions' => array(
		'thumbnail' => array(
			'upload_dir' => path('storage').'uploads/thumbnails/',
			'upload_url' => URL::base().'uploads/thumbnails/',
		),
	),
);