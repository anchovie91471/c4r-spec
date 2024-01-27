# Code4Recovery Spec Composer Package

This package contains a class that makes the most up-to-date meeting types available to your application. Updates are released anytime new meeting types are added.

## Installation
```shell
composer require code4recovery/spec
```
## Instantiation
```php
use Code4Recovery\Spec;

$spec = new Spec();
```

## Get all available languages
Returns an array of all available languages for type translation. The array is keyed by language code and has the expanded language name as the value.
```php
$spec->getLanguages();
```
Example returned value
```php
[
    'en' => 'English',
    'es' => 'Español',
    'fr' => 'Français',
    'ja' => '日本語',
    'sv' => 'Svenska',
];
```

## Get all types
Returns an object containing every current meeeting type stored in the type repository with each language translation. 
```php
$spec->getAllTypes();
```
Example returned value (truncated)
```php
{
  "11": {
    "en": "11th Step Meditation",
    "es": "Meditación del Paso 11",
    "fr": "Méditation sur la 11e Étape",
    "ja": "ステップ11 黙想",
    "sv": "11th Stegs Meditation"
  },
   "12x12": {
    "en": "12 Steps & 12 Traditions",
    "es": "12 Pasos y 12 Tradiciones",
    "fr": "12 Étapes et 12 Traditions",
    "ja": "12のステップと12の伝統",
    "sv": "12 Steg & 12 Traditioner"
  },
  ...
};
```

## Get types by language
Returns an array of types translated into the specified language.

```php
$spec->getTypesByLanguage('en');
```
Example returned value
```php
[
    11 => "11th Step Meditation"
    "12x12" => "12 Steps & 12 Traditions"
    "A" => "Secular"
    "ABSI" => "As Bill Sees It"
    "AL" => "Concurrent with Alateen"
    "AL-AN" => "Concurrent with Al-Anon"
    "AM" => "Amharic"
    "ASL" => "American Sign Language"
    "B" => "Big Book"
    "BA" => "Babysitting Available"
    "BE" => "Newcomer"
    "BI" => "Bisexual"
    "BRK" => "Breakfast"
    "C" => "Closed"
    "CAN" => "Candlelight"
    "CF" => "Child-Friendly"
    "D" => "Discussion"
    "DA" => "Danish"
    "DB" => "Digital Basket"
    "DD" => "Dual Diagnosis"
    "DE" => "German"
    "DR" => "Daily Reflections"
    "EL" => "Greek"
    "EN" => "English"
    "FA" => "Persian"
    "FF" => "Fragrance Free"
    "FR" => "French"
    "G" => "Gay"
    "GR" => "Grapevine"
    "H" => "Birthday"
    "HE" => "Hebrew"
    "HI" => "Hindi"
    "HR" => "Croatian"
    "HU" => "Hungarian"
    "ITA" => "Italian"
    "JA" => "Japanese"
    "KOR" => "Korean"
    "L" => "Lesbian"
    "LGBTQ" => "LGBTQ"
    "LIT" => "Literature"
    "LS" => "Living Sober"
    "LT" => "Lithuanian"
    "M" => "Men"
    "MED" => "Meditation"
    "ML" => "Malayalam"
    "N" => "Native American"
    "NDG" => "Indigenous"
    "NO" => "Norwegian"
    "O" => "Open"
    "OUT" => "Outdoor"
    "P" => "Professionals"
    "POC" => "People of Color"
    "POL" => "Polish"
    "POR" => "Portuguese"
    "PUN" => "Punjabi"
    "RUS" => "Russian"
    "S" => "Spanish"
    "SEN" => "Seniors"
    "SK" => "Slovak"
    "SM" => "Smoking Permitted"
    "SP" => "Speaker"
    "ST" => "Step Study"
    "SV" => "Swedish"
    "T" => "Transgender"
    "TC" => "Location Temporarily Closed"
    "TH" => "Thai"
    "TL" => "Tagalog"
    "TR" => "Tradition Study"
    "UK" => "Ukrainian"
    "W" => "Women"
    "X" => "Wheelchair Access"
    "XB" => "Wheelchair-Accessible Bathroom"
    "XT" => "Cross Talk Permitted"
    "Y" => "Young People"
];
```

## License
Guzzle is made available under the MIT License (MIT). Please see [License File](LICENSE) for more information.