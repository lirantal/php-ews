<?php
/**
 * Definition of the ArrayOfFreeBusyResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfFreeBusyResponse type
 */
class ArrayOfFreeBusyResponse extends EWSType
{
    /**
     * FreeBusyResponse property
     *
     * @var EWSType_FreeBusyResponseType
     */
    public $FreeBusyResponse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FreeBusyResponse',
                'required' => false,
                'type' => 'FreeBusyResponseType',
            ),
        );
    }
}
