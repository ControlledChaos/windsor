<?php

return [

    /**
     * You may enable this mode to display ACF keys
     * next to each field, useful for debugging
     */
    'debug' => false,

    /**
     * The path where all ACF fields are stored
     */
    'path' => get_stylesheet_directory() . '/acf-fields',

    /**
     * The entry point, listing all registered fields.
     */
    'entry' => 'index.yaml',

    /**
     * The parser responsible to translating ACF fields
     * into ACF field groups
     */
    'parser' => \Windsor\Parser\YamlParser::class,

];
