<?php
/**
 * Definition of the AlternatePublicFolderItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AlternatePublicFolderItemIdType type
 */
class AlternatePublicFolderItemIdType extends EWSType
{
    /**
     * ItemId property
     *
     * @var string
     */
    public $ItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
