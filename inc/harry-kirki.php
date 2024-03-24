<?php 

new \Kirki\Panel(
	'header',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Site header', 'harry' ),
		'description' => esc_html__( 'Header Customization.', 'harry' ),
	]
);
// header top 
function header_top(){


new \Kirki\Section(
	'top_header',
	[
		'title'       => esc_html__( 'Top header', 'kirki' ),
		'description' => esc_html__( 'Customize top header area', 'kirki' ),
		'panel'       => 'header',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'email',
		'label'    => esc_html__( 'Email Address', 'kirki' ),
		'section'  => 'top_header',
		'default'  => esc_html__( 'info@example.com', 'kirki' ),
		'priority' => 1,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'phone',
		'label'    => esc_html__( 'ne number', 'kirki' ),
		'section'  => 'top_header',
		'default'  => esc_html__( '+964 742 44 763', 'kirki' ),
		'priority' => 2,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'timing',
		'label'    => esc_html__( 'Timing set', 'kirki' ),
		'section'  => 'top_header',
		'default'  => esc_html__( 'Sunday-Thures 10am-07pm', 'kirki' ),
		'priority' =>3,
	]
);
}
header_top();

// header logo 

new \Kirki\Section(
	'header_logo',
	[
		'title'       => esc_html__( 'Header logo', 'kirki' ),
		'description' => esc_html__( 'Customize logo', 'kirki' ),
		'panel'       => 'header',
		'priority'    => 160,
	]
);
function header_logo(){
	new \Kirki\Field\Image(
		[
			'settings'    => 'hary_header_logo',
			'label'       => esc_html__( 'Header menu Logo', 'kirki' ),
			'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
			'section'     => 'header_logo',
			'default'     => get_template_directory_uri().'/assets/img/logo/logo-black.svg',
		]
	);

		new \Kirki\Field\Image(
			[
				'settings'    => 'search_logo',
				'label'       => esc_html__( 'Search Logo', 'kirki' ),
				'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
				'section'     => 'header_logo',
				'default'     => get_template_directory_uri().'/assets/img/logo/logo.svg',
			]
		);
}

header_logo();