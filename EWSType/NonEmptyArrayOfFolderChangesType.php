<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 */
class NonEmptyArrayOfFolderChangesType extends EWSType
{
    /**
     * FolderChange property
     *
     * @var EWSType_FolderChangeType
     */
    public $FolderChange;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderChange',
                'required' => false,
                'type' => 'FolderChangeType',
            ),
        );
    }
}
