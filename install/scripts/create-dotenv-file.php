<?php
require_once $_SERVER['PWD'].'/vendor/leoloso/pop-api-wp/install/scripts/create-dotenv-file.php';

/**
 * Create the .env configuration files with default values for DEV/PROD environments
 */
addEnvVariablesToConfigFile([
    // PROD
    'USE_APPSHELL' => false,
    'DISABLE_SERVICE_WORKERS' => false,
    'USE_PROGRESSIVE_BOOTING' => true,
    'USE_CODE_SPLITTING' => true,
    'GENERATE_CODE_SPLITTING_FILES' => false,
    'GENERATE_BUNDLE_FILES' => false,
    'GENERATE_BUNDLEGROUP_FILES' => true,
    'GENERATE_BUNDLE_FILES_ON_RUNTIME' => true,
    'GENERATE_LOADING_FRAME_RESOURCE_MAPPING' => false,
    'ENQUEUE_FILES_TYPE' => 'bundlegroup',
    'INCLUDE_SCRIPTS_AFTER_HTML' => true,
    'DISABLE_SERVER_SIDE_RENDERING' => false,
    'USE_MINIFIED_RESOURCES' => true,
    'ACCESS_EXTERNAL_CDN_RESOURCES' => false,
    'USE_BUNDLED_RESOURCES' => true,
    'EXTRACT_RESPONSE_INTO_JS_FILES_ON_RUNTIME' => false,
    'REMOVE_DATABASES_FROM_OUTPUT' => true,
    'RESOURCES_INCLUDE_TYPE' => 'header',
    'DISABLE_DEFINITIONS' => false,
    'DISABLE_DEFINITION_PERSISTENCE' => false,
    'DISABLE_PERSISTING_DEFINITIONS_ON_EACH_REQUEST' => true,
    'COMPACT_RESPONSE_JSON_KEYS' => false,
    'USE_LOCAL_STORAGE' => true,
    'DISABLE_JS' => false,
    'LOAD_FRAME_RESOURCES' => false,
    'BUNDLE_CHUNK_SIZE' => 4,
    'LOAD_DYNAMICALLY_GENERATED_RESOURCE_FILES' => true,
    'DISABLE_PRELOADING_PAGES' => false,
    'THROW_EXCEPTION_ON_TEMPLATE_ERROR' => false,
    'DISABLE_SENDING_EMAILS_BY_AWS_SES' => false,
    'NAMESPACE_TYPES_AND_INTERFACES' => false,
], [
    // DEV
    'USE_APPSHELL' => false,
    'DISABLE_SERVICE_WORKERS' => true,
    'USE_PROGRESSIVE_BOOTING' => false,
    'USE_CODE_SPLITTING' => false,
    'GENERATE_CODE_SPLITTING_FILES' => true,
    'GENERATE_BUNDLE_FILES' => false,
    'GENERATE_BUNDLEGROUP_FILES' => false,
    'GENERATE_BUNDLE_FILES_ON_RUNTIME' => false,
    'GENERATE_LOADING_FRAME_RESOURCE_MAPPING' => false,
    'ENQUEUE_FILES_TYPE' => 'bundlegroup',
    'INCLUDE_SCRIPTS_AFTER_HTML' => false,
    'DISABLE_SERVER_SIDE_RENDERING' => false,
    'USE_MINIFIED_RESOURCES' => false,
    'ACCESS_EXTERNAL_CDN_RESOURCES' => false,
    'USE_BUNDLED_RESOURCES' => false,
    'EXTRACT_RESPONSE_INTO_JS_FILES_ON_RUNTIME' => false,
    'REMOVE_DATABASES_FROM_OUTPUT' => false,
    'RESOURCES_INCLUDE_TYPE' => 'header',
    'DISABLE_DEFINITIONS' => true,
    'DISABLE_DEFINITION_PERSISTENCE' => true,
    'DISABLE_PERSISTING_DEFINITIONS_ON_EACH_REQUEST' => true,
    'COMPACT_RESPONSE_JSON_KEYS' => false,
    'USE_LOCAL_STORAGE' => false,
    'DISABLE_JS' => false,
    'LOAD_FRAME_RESOURCES' => false,
    'BUNDLE_CHUNK_SIZE' => 4,
    'LOAD_DYNAMICALLY_GENERATED_RESOURCE_FILES' => true,
    'DISABLE_PRELOADING_PAGES' => false,
    'THROW_EXCEPTION_ON_TEMPLATE_ERROR' => true,
    'DISABLE_SENDING_EMAILS_BY_AWS_SES' => false,
    'NAMESPACE_TYPES_AND_INTERFACES' => false,
]);
