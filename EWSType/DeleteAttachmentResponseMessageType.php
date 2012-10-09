<?php
/**
 * Definition of the DeleteAttachmentResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the DeleteAttachmentResponseMessageType type
 */
class DeleteAttachmentResponseMessageType extends EWSType
{
    /**
     * RootItemId property
     *
     * @var EWSType_RootItemIdType
     */
    public $RootItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootItemId',
                'required' => false,
                'type' => 'RootItemIdType',
            ),
        );
    }
}
