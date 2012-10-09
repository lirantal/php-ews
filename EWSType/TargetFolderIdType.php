<?php
/**
 * Definition of the TargetFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the TargetFolderIdType type
 */
class TargetFolderIdType extends EWSType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderId',
                'required' => false,
                'type' => 'FolderIdType',
            ),
            array(
                'name' => 'DistinguishedFolderId',
                'required' => false,
                'type' => 'DistinguishedFolderIdType',
            ),
        );
    }
}
