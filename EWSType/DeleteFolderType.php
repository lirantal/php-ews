<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends EWSType
{
    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfBaseFolderIdsType',
            ),
            array(
                'name' => 'DeleteType',
                'required' => false,
                'type' => 'DisposalType',
            ),
        );
    }
}
