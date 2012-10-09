<?php
/**
 * Definition of the NonEmptyArrayOfRequestAttachmentIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfRequestAttachmentIdsType type
 */
class NonEmptyArrayOfRequestAttachmentIdsType extends EWSType
{
    /**
     * AttachmentId property
     *
     * @var EWSType_RequestAttachmentIdType
     */
    public $AttachmentId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AttachmentId',
                'required' => false,
                'type' => 'RequestAttachmentIdType',
            ),
        );
    }
}
