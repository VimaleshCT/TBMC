<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function switchLanguage($language = 'en')
    {
        $availableLanguages = ['en', 'ta']; // Supported languages

        // Check if selected language is supported
        if (in_array($language, $availableLanguages)) {
            session()->set('lang', $language);
            $response = [
                'status' => 'success',
                'message' => 'Language switched to ' . $language,
            ];
        } else {
            session()->set('lang', 'en'); // Default to English if unsupported language is chosen
            $response = [
                'status' => 'error',
                'message' => 'Unsupported language, defaulted to English',
            ];
        }

        // Return the response as JSON for AJAX handling
        return $this->response->setJSON($response);
    }
}
