<?php 

new \Kirki\Panel(
	'header',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Site header', 'harry' ),
		'description' => esc_html__( 'Header Customization.', 'harry' ),
	]
);

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