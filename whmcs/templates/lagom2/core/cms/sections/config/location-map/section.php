<?php

return [
    'default_type' => true,
    'name' => 'Location Map',
    'slug' => 'location-map',
    'comingsoon' => true,
    'thumb' => 'thumb.png',
    'fields' => [
        [
            'type' => 'text',
            'name' => 'title',
            'label' => 'Title'
        ],
        [
            'type' => 'textarea',
            'name' => 'subtitle',
            'label' => 'Subtitle'
        ],
        [
            'type' => 'graphic',
            'name' => 'graphic',
            'label' => 'Map'
        ],
        [
            'type' => 'multiselect',
            'name' => 'locations',
            'label' => 'Locations',
            'options' =>  [
                'Nuremberg - Germany', 'Falkenstein - Germany', 'Helsinki - Finland',  'Ashburn - USA', 'Mumbai - India', 'Singapore', 'London - UK', 'Fremont - USA', 'Tokyo - Japan', 'Sydney - Australia' 
            ]
        ],
        [
            'type' => 'buttons',
            'name' => 'buttons',
            'label' => 'Section Actions'
        ],
        [
            'type' => 'text',
            'name' => 'section_anchor',
            'label' => 'Section anchor',
            'placeholder' => 'Enter anchor...',
            'tooltip' => 'Lorem Ipsum <a href="#">Learn More</a>'
        ],
        [
            'type' => 'text',
            'name' => 'custom_class',
            'label' => 'Section Custom Class'
        ]
    ]
];