<?php
/* ----------------------------------------------------------------------------
 * Application - Single Configuration File
 * ---------------------------------------------------------------------------- */

/**
 * Application Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */

class Config {
    // ------------------------------------------------------------------------
    // General Settings
    // ------------------------------------------------------------------------
    const BASE_URL      = 'https://www.goconsult.in/';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;
    const ENABLE_HOOKS  = FALSE;

    // ------------------------------------------------------------------------
    // Database Settings
    // ------------------------------------------------------------------------
    const DB_HOST       = 'localhost';
    const DB_NAME       = 'goconsult';
    const DB_USERNAME   = 'goconsult_user';
    const DB_PASSWORD   = 'sid+wfO%-sE2';
    const DB_PREFIX     = 'gc_';

    // ------------------------------------------------------------------------
    // Google Calendar Sync
    // ------------------------------------------------------------------------
    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '';
    const GOOGLE_CLIENT_ID      = '';
    const GOOGLE_CLIENT_SECRET  = '';
    const GOOGLE_API_KEY        = '';
}
/* End of file config.php */
/* Location: ./config.php */
