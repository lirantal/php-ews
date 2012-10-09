
<?php
/**
 * Definition of the SyncFolderHierarchyDeleteType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SyncFolderHierarchyDeleteType type
 */
class SyncFolderHierarchyDeleteType extends EWSType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

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
        );
    }
}
