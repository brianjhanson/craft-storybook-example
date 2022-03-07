<?php

use craft\helpers\App;

return [
    'transformer' => 'craft',
    'imagerSystemPath' => '@webroot/assets/imager/',
    'imagerUrl' => '@assetBaseUrl/assets/imager/',
    'cacheEnabled' => true,
    'cacheRemoteFiles' => true,
    'cacheDuration' => 31536000,
    'cacheDurationRemoteFiles' => 1209600,
    'cacheDurationExternalStorage' => 1209600,
    'cacheDurationNonOptimized' => 300,
    'jpegQuality' => 80,
    'pngCompressionLevel' => 2,
    'webpQuality' => 80,
    'webpImagickOptions' => [],
    'useCwebp' => false,
    'cwebpPath' => '/usr/bin/cwebp',
    'cwebpOptions' => '',
    'interlace' => true,
    'allowUpscale' => true,
    'resizeFilter' => 'lanczos',
    'smartResizeEnabled' => false,
    'removeMetadata' => true,
    'bgColor' => '',
    'position' => '50% 50%',
    'letterbox' => ['color' => '#000', 'opacity' => 0],
    'useFilenamePattern' => true,
    'filenamePattern' => '{basename}_{transformString|hash}.{extension}',
    'shortHashLength' => 10,
    'hashFilename' => 'postfix', // deprecated
    'hashPath' => false,
    'addVolumeToPath' => true,
    'hashRemoteUrl' => false,
    'useRemoteUrlQueryString' => false,
    'instanceReuseEnabled' => false,
    'noop' => false,
    'suppressExceptions' => false,
    'convertToRGB' => true,
    'skipExecutableExistCheck' => false,
    'curlOptions' => [],
    'runJobsImmediatelyOnAjaxRequests' => true,
    'fillTransforms' => false,
    'fillAttribute' => 'width',
    'fillInterval' => '200',
    'clearKey' => '',

    'useForNativeTransforms' => true,
    'useForCpThumbs' => true,

    'imgixProfile' => 'default',
    'imgixConfig' => [
        'default' => [
            'domains' => [],
            'useHttps' => true,
            'signKey' => '',
            'sourceIsWebProxy' => false,
            'useCloudSourcePath' => true,
            'getExternalImageDimensions' => true,
            'defaultParams' => [],
        ]
    ],
    'storages' => ['aws'],
    'storageConfig' => [
        'aws'  => [
            'region' => getenv('AWS_REGION'),
            'bucket' => getenv('S3_BUCKET'),
            'folder' => 'assets/imager',
            'storageType' => 'standard',
        ],
    ]
];
