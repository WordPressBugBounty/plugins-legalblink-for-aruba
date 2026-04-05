<?php
/**
 * LegalBlink for Aruba - Configuration
 *
 * This file contains your actual configuration values.
 * IMPORTANT: This file is excluded from version control.
 */

if (!defined('ABSPATH')) {
    die;
}

return array(
    /**
     * API Configuration
     */
    'api' => array(
        /**
         * API namespace for REST endpoints
         */
        'namespace' => 'lbfa/v1',

        /**
         * Base URL for LegalBlink API calls
         */
        'base_url' => 'https://app.legalblink.it/api/integrations/wordpress',

        /**
         * LegalBlink API Bearer Token
         */
        'bearer_token' => 'lb-wp-J0EjLXxBbGdrcWNXuORyNi7lV0TBLYDiNIoINEZHhAOeTdYOEfOpnK2VwGTMuepwvl2LnSaCeWWnbqN9f6C8KUuQxuQ57wzoSJTkqts10Pm5i5s3dLuKO7LlhT',

        /**
         * Rate limiting for API calls (calls per minute per user)
         */
        'rate_limit' => 60,

        /**
         * Cache time for API responses (in seconds)
         */
        'cache_time' => 3600,
    ),
);

