<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class AttachmentInfoResponseMessageType extends EWSType
{
    /**
     * Attachments property
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Attachments',
                'required' => false,
                'type' => 'ArrayOfAttachmentsType',
            ),
        );
    }
}
