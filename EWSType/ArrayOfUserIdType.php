<?php
/**
 * Definition of the ArrayOfUserIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfUserIdType type
 */
class ArrayOfUserIdType extends EWSType
{
    /**
     * UserId property
     *
     * @var EWSType_UserIdType
     */
    public $UserId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UserId',
                'required' => false,
                'type' => 'UserIdType',
            ),
        );
    }
}
