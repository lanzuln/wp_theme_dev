<?php

new \Kirki\Panel(
    'header',
    [
        'priority' => 10,
        'title' => esc_html__('Harry Option', 'harry'),
        'description' => esc_html__('Header Customization.', 'harry'),
    ]
);
// header top 
function header_top()
{
    new \Kirki\Section(
        'top_header',
        [
            'title' => esc_html__('Top header', 'kirki'),
            'description' => esc_html__('Customize top header area', 'kirki'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Select(
        [
            'settings' => 'header_default_setting',
            'label' => esc_html__('Header Select', 'harry'),
            'section' => 'top_header',
            'default' => 'header-style-1',
            'priority' => 1,
            'placeholder' => esc_html__('Choose default header', 'harry'),
            'choices' => [
                'header-style-1' => esc_html__('Header Style 01', 'harry'),
                'header-style-2' => esc_html__('Header Style 02', 'harry'),
                'header-style-3' => esc_html__('Header Style 03', 'harry'),
                'header-style-4' => esc_html__('Header Style 04', 'harry'),
                'header-style-5' => esc_html__('Header Style 05', 'harry'),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'email',
            'label' => esc_html__('Email Address', 'kirki'),
            'section' => 'top_header',
            'default' => esc_html__('info@example.com', 'kirki'),
            'priority' => 2,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'phone',
            'label' => esc_html__('ne number', 'kirki'),
            'section' => 'top_header',
            'default' => esc_html__('+964 742 44 763', 'kirki'),
            'priority' => 3,
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'timing',
            'label' => esc_html__('Timing set', 'kirki'),
            'section' => 'top_header',
            'default' => esc_html__('Sunday-Thures 10am-07pm', 'kirki'),
            'priority' => 4,
        ]
    );
}
header_top();


// header logo 
function header_logo()
{
    new \Kirki\Section(
        'header_logo',
        [
            'title' => esc_html__('Header logo', 'kirki'),
            'description' => esc_html__('Customize logo', 'kirki'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings' => 'hary_header_logo',
            'label' => esc_html__('Header menu Logo', 'kirki'),
            'description' => esc_html__('The saved value will be the URL.', 'kirki'),
            'section' => 'header_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'search_logo',
            'label' => esc_html__('Search Logo', 'kirki'),
            'description' => esc_html__('The saved value will be the URL.', 'kirki'),
            'section' => 'header_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo.svg',
        ]
    );
}
header_logo();



// harry_side_info_section
function harry_side_info_section()
{
    new \Kirki\Section(
        'harry_side_info',
        [
            'title' => esc_html__('Side Info', 'harry'),
            'description' => esc_html__('Side info section here', 'harry'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_side_logo',
            'label' => esc_html__('Side info Logo', 'harry'),
            'section' => 'harry_side_info',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_email',
            'label' => esc_html__('Header side Email', 'harry'),
            'section' => 'harry_side_info',
            'default' => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings' => 'harry_side_phone',
            'label' => esc_html__('Header side phone', 'harry'),
            'section' => 'harry_side_info',
            'default' => esc_html__('+964 742 44 763', 'harry'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button',
            'label' => esc_html__('Header side button', 'harry'),
            'section' => 'harry_side_info',
            'default' => esc_html__('Getting Started', 'harry'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button_url',
            'label' => esc_html__('Header side button url', 'harry'),
            'section' => 'harry_side_info',
            'default' => esc_html__('#', 'harry'),
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_side_shape_switch',
            'label' => esc_html__('Shape Switch', 'harry'),
            'description' => esc_html__('Shape switch control', 'harry'),
            'section' => 'harry_side_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_side_logo_switch',
            'label' => esc_html__('Side Logo Switch', 'harry'),
            'description' => esc_html__('Side Logo switch control', 'harry'),
            'section' => 'harry_side_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_side_menu_switch',
            'label' => esc_html__('Side menu  Switch', 'harry'),
            'description' => esc_html__('Side menu switch control', 'harry'),
            'section' => 'harry_side_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'harry_side_social_switch',
            'label' => esc_html__('Side Social Switch', 'harry'),
            'description' => esc_html__('Side Social switch control', 'harry'),
            'section' => 'harry_side_info',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );


}
harry_side_info_section();


// harry_social_section
function harry_social_section()
{
    new \Kirki\Section(
        'harry_social_info',
        [
            'title' => esc_html__('Social Icon', 'harry'),
            'description' => esc_html__('Social info section here', 'harry'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_facebook',
            'label' => esc_html__('Facebook URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_twitter',
            'label' => esc_html__('Twitter URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_youtube',
            'label' => esc_html__('Youtube URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_linkedin',
            'label' => esc_html__('Linkedin URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_flickr',
            'label' => esc_html__('Flickr URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_vimeo',
            'label' => esc_html__('Vimeo URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_behance',
            'label' => esc_html__('Behance URL', 'harry'),
            'section' => 'harry_social_info',
            'default' => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_social_section();

// harry footer bottom
function harry_footer_section()
{
    new \Kirki\Section(
        'harry_footer_option',
        [
            'title' => esc_html__('Footer', 'harry'),
            'description' => esc_html__('Footer section here', 'harry'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_footer_copyright',
            'label' => esc_html__('Footer Copyright', 'harry'),
            'section' => 'harry_footer_option',
            'default' => esc_html__('© 2024 Harry All Rights Reserved.', 'harry'),
            'priority' => 10,
        ]
    );

}
harry_footer_section();

// Blog section 
function harry_blog_section()
{
    new \Kirki\Section(
        'harry_blog_option',
        [
            'title' => esc_html__('Blog', 'harry'),
            'description' => esc_html__('Blog section here', 'harry'),
            'panel' => 'header',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_breadcrumb_bg',
            'label' => esc_html__('Breadcrumb Image', 'harry'),
            'section' => 'harry_blog_option',
            'priority' => 10,
        ]
    );

}
harry_blog_section();

new \Kirki\Panel(
    'blog',
    [
        'priority' => 10,
        'title' => esc_html__('Harry Blog', 'harry'),
        'description' => esc_html__('Blog Customization.', 'harry'),
    ]
);


function blog_side_bar()
{
    new \Kirki\Section(
        'blog_sidebar',
        [
            'title' => esc_html__('Blog sidebar', 'kirki'),
            'description' => esc_html__('Blog sidebar', 'kirki'),
            'panel' => 'blog',
            'priority' => 160,
        ]
    );
}
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'sidebar_switch_setting',
		'label'       => esc_html__( 'Switch Field', 'kirki' ),
		'description' => esc_html__( 'Simple switch control', 'kirki' ),
		'section'     => 'blog_sidebar',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);
blog_side_bar();