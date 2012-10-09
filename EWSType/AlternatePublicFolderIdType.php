<?php
/**
 * Definition of the AlternatePublicFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AlternatePublicFolderIdType type
 */
class AlternatePublicFolderIdType extends EWSType
{
    /**
     * FolderId property
     *
     * @var string
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
                'type' => 'string',
            ),
        );
    }
}
