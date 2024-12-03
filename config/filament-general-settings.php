<?php

use Joaopaulolndev\FilamentGeneralSettings\Enums\TypeFieldEnum;

return [
    'show_application_tab' => true,
    'show_analytics_tab' => false,
    'show_logo_and_favicon' => true,
    'show_seo_tab' => false,
    'show_email_tab' => true,
    'show_social_networks_tab' => true,
    'expiration_cache_config_time' => 60,
    'show_custom_tabs'=> true,
    'custom_tabs' => [
        'more_configs' => [
            'label' => 'Diğer Ayarlar',
            'icon' => 'heroicon-o-plus-circle',
            'columns' => 1,
            'fields' => [
                'header' => [
                    'type' => TypeFieldEnum::Textarea->value,
                    'label' => 'Header Script',
                    'placeholder' => '',
                    'rows' => '3',
                    'required' => false,
                ],
                'footer' => [
                    'type' => TypeFieldEnum::Textarea->value,
                    'label' => 'Footer Script',
                    'placeholder' => '',
                    'rows' => '3',
                    'required' => false,
                ],
                'robots' => [
                    'type' => TypeFieldEnum::Textarea->value,
                    'label' => 'Robots.txt',
                    'placeholder' => '',
                    'rows' => '3',
                    'required' => false,
                ],
            ]
        ],
    ]
];
