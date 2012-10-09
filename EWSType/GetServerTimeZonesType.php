<?php
/**
 * Definition of the GetServerTimeZonesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the GetServerTimeZonesType type
 */
class GetServerTimeZonesType extends EWSType
{
    /**
     * Collection of timezone identifiers to get the definition for. Omit to get
     * the definition of all timezones supported by the server.
     *
     * @var EWSType_NonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Ids',
                'required' => false,
                'type' => 'NonEmptyArrayOfTimeZoneIdType',
            ),
        );
    }
}
