<?php
function bootkit_customize_register($wp_customize)
{
    $wp_customize->add_setting('bootkit_facebook_handle', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_section('bootkit_social_section', [
        'title' => __('Bootkit Social Settings', 'bootkit'),
        'priority' => 30,
    ]);
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bootkit_social_facebook_input',
            array(
                'label' => __('Facebook', 'bootkit'),
                'section' => 'bootkit_social_section',
                'settings' => 'bootkit_facebook_handle',
            )
        )
    );
}