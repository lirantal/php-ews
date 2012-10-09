<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 */
class NonEmptyArrayOfInternetHeadersType extends EWSType
{
    /**
     * InternetMessageHeader property
     *
     * @var EWSType_InternetHeaderType
     */
    public $InternetMessageHeader;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'InternetMessageHeader',
                'required' => false,
                'type' => 'InternetHeaderType',
            ),
        );
    }
}
