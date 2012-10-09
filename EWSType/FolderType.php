<?php
/**
 * Definition of the FolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the FolderType type
 */
class FolderType extends EWSType
{
    /**
     * PermissionSet property
     *
     * @var EWSType_PermissionSetType
     */
    public $PermissionSet;

    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;

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
            array(
                'name' => 'UnreadCount',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
