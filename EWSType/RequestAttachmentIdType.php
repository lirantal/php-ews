<?php
/**
 * Definition of the RequestAttachmentIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the RequestAttachmentIdType type
 */
class RequestAttachmentIdType extends EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
