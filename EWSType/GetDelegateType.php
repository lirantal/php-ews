<?php
/**
 * Definition of the GetDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends EWSType
{
    /**
     * UserIds property
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UserIds',
                'required' => false,
                'type' => 'ArrayOfUserIdType',
            ),
            array(
                'name' => 'IncludePermissions',
                'required' => false,
                'type' => 'boolean',
            ),
        );
    }
}
