<?php
/**
 * Definition of the ContactsFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ContactsFolderType type
 */
class ContactsFolderType extends EWSType
{
    /**
     * PermissionSet property
     *
     * @var EWSType_PermissionSetType
     */
    public $PermissionSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'PermissionSet',
                'required' => false,
                'type' => 'PermissionSetType',
            ),
        );
    }
}
