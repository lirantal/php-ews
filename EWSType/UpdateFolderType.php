<?php
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the UpdateFolderType type
 */
class UpdateFolderType extends EWSType
{
    /**
     * FolderChanges property
     *
     * @var EWSType_NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderChanges',
                'required' => false,
                'type' => 'NonEmptyArrayOfFolderChangesType',
            ),
        );
    }
}
