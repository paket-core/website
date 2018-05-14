<?php

namespace TokenChef\IcoTemplate\Services;

use Session;

/**
 * Class LocaleService
 * @package App\Services
 */
class LocaleService
{
    /**
     * @param $language
     * @param bool $force
     * @return mixed|string
     */
    public static function save_language($language, $force = false)
    {
        $current = Session::get('locale');
        if (!$current || $force) {
            if (in_array($language, StaticArray::SUPPORTED_LANGUAGES) || $language === 'en') {
                Session::put('locale', $language);
                $current = $language;
            }
        }
        if (!\Auth::guest()) {
            $user = \Auth::user();
            if ($user->lang !== $current) {
                $user->lang = $current;
                $user->save();
            }
        }
        \App::setLocale($current);
        return $current;
    }

    public static function set_locale()
    {
        \App::setLocale(self::get_language());
    }

    public static function get_language()
    {
        $current = Session::get('locale');
        return $current ? $current : 'en';
    }

    public static function detect_locale()
    {
        $language = self::get_browser_locale();
        return $language ? $language : 'en';
    }

    public static function get_browser_locale()
    {
        try {

            if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                return null;
            }

            // Credit: https://gist.github.com/Xeoncross/dc2ebf017676ae946082
            $websiteLanguages = StaticArray::SUPPORTED_LANGUAGES;
            // Parse the Accept-Language according to:
            // http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4
            preg_match_all(
                '/([a-z]{1,8})' .       // M1 - First part of language e.g en
                '(-[a-z]{1,8})*\s*' .   // M2 -other parts of language e.g -us
                // Optional quality factor M3 ;q=, M4 - Quality Factor
                '(;\s*q\s*=\s*((1(\.0{0,3}))|(0(\.[0-9]{0,3}))))?/i',
                $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                $langParse);

            $langs = $langParse[1]; // M1 - First part of language
            $quals = $langParse[4]; // M4 - Quality Factor

            $langArr = array();

            for ($num = 0; $num < count($langs); $num++) {
                $newLang = self::replace_lang(strtolower($langs[$num]));
                $newQual = isset($quals[$num]) ?
                    (empty($quals[$num]) ? 1.0 : floatval($quals[$num])) : 0.0;

                // Choose whether to upgrade or set the quality factor for the
                // primary language.
                $langArr[$newLang] = (isset($langArr[$newLang])) ?
                    max($langArr[$newLang], $newQual) : $newQual;
            }

            // sort list based on value
            // langArr will now be an array like: array('EN' => 1, 'ES' => 0.5)
            arsort($langArr, SORT_NUMERIC);

            // The languages the client accepts in order of preference.
            $acceptedLanguages = array_keys($langArr);

            // Set the most preferred language that we have a translation for.
            foreach ($acceptedLanguages as $preferredLanguage) {
                if (in_array($preferredLanguage, $websiteLanguages)) {
                    return $preferredLanguage;
                }
            }
        } catch (\Exception $err) {
            return null;
        }
        return null;
    }

    protected static function replace_lang($lang)
    {
        if ($lang === 'uk') {
            return 'ua';
        }
        return $lang;
    }
}