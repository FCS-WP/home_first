<?php

$sep_id  = 4574;
$section = 'header_sticky';

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'enable_header_sticky',
    'label'       => esc_html__( 'Enable Sticky Header', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,

) );
