<?php
$databases = array (
  'default' =>
    array (
      'default' =>
        array (
          'database' => 'demo',
          'username' => 'tugboat',
          'password' => 'tugboat',
          'host' => 'mysql',
          'port' => '',
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);

$config_directories['sync'] = '../config';

// Mailchimp settings.
$config['mailchimp.settings']['api_key'] = getenv('MAILCHIMP_KEY');
$config['mailchimp_signup.mailchimp_signup.dcamp_mailchimp']['mc_lists'] = [
  getenv('MAILCHIMP_LIST') => getenv('MAILCHIMP_LIST'),
];

// Point Stage File Proxy to production.
$config['stage_file_proxy.settings']['origin'] = 'https://2018.drupalcamp.es';

// Session settings.
$config['dcamp_sessions.settings'] = [
  'debugging' => FALSE,
  'service_account_file' => '/var/lib/tugboat/service-file.json',
  'spreadsheet_id' => getenv('SESSIONS_SPREADSHEET_ID'),
  'spreadsheet_range' => 'Form Responses 1',
];
