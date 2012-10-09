<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the FolderInfoResponseMessageType type
 */
class FolderInfoResponseMessageType extends EWSType
{
    /**
     * Folders property
     *
     * @var EWSType_ArrayOfFoldersType
     */
    public $Folders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Folders',
                'required' => false,
                'type' => 'ArrayOfFoldersType',
            ),
        );
    }
}
