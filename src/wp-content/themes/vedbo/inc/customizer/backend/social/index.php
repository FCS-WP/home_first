<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_media', array(
    'title'          => esc_html__( 'Social Media', 'vedbo' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98795;
$section = 'social_media';

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_html__( 'Facebook', 'vedbo' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_html__( 'Twitter', 'vedbo' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_html__( 'Pinterest', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_html__( 'LinkedIn', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'googleplus_link',
    'label'       => esc_html__( 'Google+', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'rss_link',
    'label'       => esc_html__( 'RSS', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'tumblr_link',
    'label'       => esc_html__( 'Tumblr', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_html__( 'Instagram', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_html__( 'Youtube', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'vimeo_link',
    'label'       => esc_html__( 'Vimeo', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_html__( 'Behance', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_html__( 'Dribbble', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'flickr_link',
    'label'       => esc_html__( 'Flickr', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'git_link',
    'label'       => esc_html__( 'Git', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_html__( 'Skype', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'weibo_link',
    'label'       => esc_html__( 'Weibo', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_html__( 'Foursquare', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_html__( 'Soundcloud', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'text',
    'settings'    => 'snapchat_link',
    'label'       => esc_html__( 'Snapchat', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );
