<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    protected $helpers = ['url'];

    public function __construct()
    {
        // Ensure session is started
        if (session_status() == PHP_SESSION_NONE) {
            session()->start();
        }

        // Check the current language from session or default to 'en'
        $language = session()->get('lang') ?? 'en';
        service('language')->setLocale($language);
    }

    public function switchLanguage($language = 'en')
    {
        $availableLanguages = ['en', 'ta']; // Supported languages
        if (in_array($language, $availableLanguages)) {
            session()->set('lang', $language);
        } else {
            session()->set('lang', 'en');
        }

        // Redirect back to the previous page
        return redirect()->back();
    }
}
