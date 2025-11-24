<?php

namespace ARCWP;

use Gateway\Collection;
use Gateway\Field;

/**
 * Package Collection
 *
 * Stores software packages (like Gateway plugin) for display purposes
 */
class Package extends Collection
{
    /**
     * Collection key
     *
     * @var string
     */
    protected $key = 'packages';

    /**
     * The table associated with the collection
     *
     * @var string
     */
    protected $table = 'packages';

    /**
     * Collection title (singular)
     *
     * @var string
     */
    protected $title = 'Package';

    /**
     * Collection title (plural)
     *
     * @var string
     */
    protected $titlePlural = 'Packages';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'description', 'summary', 'version', 'type', 'release_file'];

    /**
     * Route configuration
     *
     * @var array
     */
    protected $routes = [
        'enabled' => true,
        'namespace' => 'arcwp',
        'version' => 'v1',
        'route' => 'packages',
        'allow_basic_auth' => true,
        'methods' => [
            'get_many' => true,
            'get_one' => true,
            'create' => true,
            'update' => true,
            'delete' => true,
        ],
        'permissions' => [
            'get_many' => [
                'type' => 'protected'
            ],
            'get_one' => [
                'type' => 'protected'
            ],
        ]
    ];

    /**
     * Filter definitions
     *
     * @var array
     */
    protected $filters = [
        [
            'type' => 'text',
            'field' => 'search',
            'label' => 'Search',
            'placeholder' => 'Search packages...',
        ],
        [
            'type' => 'select',
            'field' => 'type',
            'label' => 'Type',
            'placeholder' => 'All Types',
        ],
    ];

    /**
     * Field definitions
     *
     * @var array
     */
    protected $fields = [
        'title' => [
            'type' => 'text',
            'label' => 'Title',
            'required' => true,
            'placeholder' => 'Enter package title',
            'helpText' => 'The name of the software package',
        ],
        'slug' => [
            'type' => 'text',
            'label' => 'Slug',
            'required' => true,
            'placeholder' => 'e.g., gateway-plugin',
            'helpText' => 'URL-friendly identifier for the package',
        ],
        'type' => [
            'type' => 'select',
            'label' => 'Type',
            'required' => true,
            'options' => [
                ['value' => 'plugins', 'label' => 'Plugins'],
                ['value' => 'react', 'label' => 'React'],
                ['value' => 'themes', 'label' => 'Themes'],
            ],
            'helpText' => 'The category/type of this package',
        ],
        'summary' => [
            'type' => 'text',
            'label' => 'Summary',
            'placeholder' => 'Brief summary of the package',
            'helpText' => 'A short one-line description of the package',
        ],
        'description' => [
            'type' => 'textarea',
            'label' => 'Description',
            'placeholder' => 'Detailed description of the package',
            'helpText' => 'Full description of the package features and functionality',
        ],
        'version' => [
            'type' => 'text',
            'label' => 'Version',
            'placeholder' => 'e.g., 1.0.0',
            'helpText' => 'Current version number of the package',
        ],
        'release_file' => [
            'type' => 'file',
            'label' => 'Release File',
            'required' => false,
            'helpText' => 'Upload the package release file (zip format)',
            'buttonText' => 'Select Release File',
            'description' => 'Upload a zip file containing the package release',
            'allowedTypes' => ['application/zip', 'application/x-zip-compressed'],
            'mediaTitle' => 'Select Package Release',
            'mediaButtonText' => 'Use this file',
        ],
    ];
}
