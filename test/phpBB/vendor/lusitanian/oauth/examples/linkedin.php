<?php
/**
 * Example of retrieving an authentication token of the Linkedin service
 *
 * PHP version 5.4
 *
 * @author     David Desberg <david@daviddesberg.com>
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @author     Antoine Corcy <contact@sbin.dk>
 * @copyright  Copyright (c) 2012 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
use OAuth\OAuth2\Service\Linkedin;
use OAuth\Common\Storage\Session;
use OAuth\Common\Consumer\Credentials;
use OAuth\Common\Http\Uri\Uri;

/**
 * Bootstrap the example
 */
require_once __DIR__ . '/bootstrap.php';

// Session storage
$storage = new Session();

// Setup the credentials for the requests
$credentials = new Credentials(
    $servicesCredentials['linkedin']['key'],
    $servicesCredentials['linkedin']['secret'],
    $currentUri->getAbsoluteUri()
);

// Instantiate the Linkedin service using the credentials, http client and storage mechanism for the token
/** @var $linkedinService Linkedin */
$linkedinService = $serviceFactory->createService('linkedin', $credentials, $storage, array('r_basicprofile'));

if( !empty( $_GET['code'] ) ) {
    // This was a callback request from google, get the token
    $token = $linkedinService->requestAccessToken( $_GET['code'] );

    // Send a request with it. Please note that XML is the default format.
    $result = json_decode( $linkedinService->request( '/people/~?format=json' ), true );

    // Show some of the resultant data
    echo 'Your linkedin first name is ' . $result['firstName'] . ' and your last name is ' . $result['lastName'];

} elseif( !empty($_GET['go'] ) && $_GET['go'] == 'go' ) {
    // state is used to prevent CSRF, it's required
    $url = $linkedinService->getAuthorizationUri(array('state' => 'DCEEFWF45453sdffef424'));
    header('Location: ' . $url);
} else {
    $url = $currentUri->getRelativeUri() . '?go=go';
    echo "<a href='$url'>Login with Linkedin!</a>";
}
