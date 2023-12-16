<?php
namespace Code4Recovery\App;

class C4RSpec
{
    private static $languages = [
        'en' => 'English',
        'es' => 'Español',
        'fr' => 'Français',
        'js' => '日本語',
        'sv' => 'Svenska',
    ];

    private static $types;

    /**
     * Constructor.
     *
     * @param $program
     */
    public function __construct() {
        if($jsonTypes = file_get_contents('./src/types.json')) {
            self::$types = json_decode($jsonTypes);
        }
    }

    /**
     * Get all languages.
     *
     * Retrieves and returns all languages with language code and expanded language translation that is stored
     * in the type repository.
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return self::$languages;
    }

    /**
     * Get all types.
     *
     * Retrieves and returns all types stored in the type repository.
     *
     * @return array The array of all types.
     */
    public function getAllTypes ()
    {
        return self::$types;
    }

    /**
     * Returns an array of types translated into the specified language.
     *
     * @param string $language The language code to retrieve the translations
     *     for.
     *
     * @return array An array of type translations in the specified language.
     */
    public function getTypesByLanguage($language)
    {
        foreach (self::$types as $typeKey => $typeTranslations) {
            if (isset($typeTranslations->$language)) {
                $typesByLanguage[$typeKey] = $typeTranslations->$language;
            }
        }
        return $typesByLanguage;
    }
}