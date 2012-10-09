<?php
/**
 * Definition of the CreateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the CreateFolderType type
 */
class CreateFolderType extends EWSType
{
    /**
     * ParentFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * @var EWSType_NonEmptyArrayOfFoldersType
     */
    public $Folders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ParentFolderId',
                'required' => false,
                'type' => 'TargetFolderIdType',
            ),
            array(
                'name' => 'Folders',
                'required' => false,
                'type' => 'NonEmptyArrayOfFoldersType',
            ),
        );
    }
}
