<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          [1-46-9]\\d{7,10}|
          5\\d{8,9}
        ',
    'PossibleNumberPattern' => '\\d{8,11}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          1[1-9][2-5]\\d{7}|
          (?:
            [4689][1-9]|
            2[12478]|
            3[1-578]|
            5[13-5]|
            7[13-579]
          )[2-5]\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{8,11}',
    'ExampleNumber' => '1123456789',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          1[1-9]9\\d{8}|
          2[12478]9?[6-9]\\d{7}|
          (?:
            3[1-578]|
            [4689][1-9]|
            5[13-5]|
            7[13-579]
          )[6-9]\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{10,11}',
    'ExampleNumber' => '11961234567',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800\\d{6,7}',
    'PossibleNumberPattern' => '\\d{8,11}',
    'ExampleNumber' => '800123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '[359]00\\d{6,7}',
    'PossibleNumberPattern' => '\\d{8,11}',
    'ExampleNumber' => '300123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '[34]00\\d{5}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '40041234',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => '[34]00\\d{5}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '40041234',
  ),
  'id' => 'BR',
  'countryCode' => 55,
  'internationalPrefix' => '00(?:1[45]|2[135]|[34]1|43)',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0(?:(1[245]|2[135]|[34]1)(\\d{10,11}))?',
  'nationalPrefixTransformRule' => '$2',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [2-9](?:
              [1-9]|
              0[1-9]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(\\d{5})(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            9(?:
              [1-9]|
              0[1-9]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '(\\d{3,5})',
      'format' => '$1',
      'leadingDigitsPatterns' => 
      array (
        0 => '1[125689]',
      ),
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    3 => 
    array (
      'pattern' => '(\\d{2})(\\d{5})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            (?:
              1[1-9]|
              2[12478]
            )9
          ',
      ),
      'nationalPrefixFormattingRule' => '($1)',
      'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
    ),
    4 => 
    array (
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[1-9][1-9]',
      ),
      'nationalPrefixFormattingRule' => '($1)',
      'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
    ),
    5 => 
    array (
      'pattern' => '([34]00\\d)(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[34]00',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    6 => 
    array (
      'pattern' => '([3589]00)(\\d{2,3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[3589]00',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{5})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            (?:
              1[1-9]|
              2[12478]
            )9
          ',
      ),
    ),
    1 => 
    array (
      'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[1-9][1-9]',
      ),
    ),
    2 => 
    array (
      'pattern' => '([34]00\\d)(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[34]00',
      ),
    ),
    3 => 
    array (
      'pattern' => '([3589]00)(\\d{2,3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[3589]00',
      ),
    ),
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
/* EOF */