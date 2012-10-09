<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends EWSType
{
    /**
     * OldFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $OldParentFolderId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'OldFolderId',
                'required' => false,
                'type' => 'FolderIdType',
            ),
            array(
                'name' => 'OldItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'OldParentFolderId',
                'required' => false,
                'type' => 'FolderIdType',
            ),
        );
    }
}
