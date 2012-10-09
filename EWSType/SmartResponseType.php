<?php
/**
 * Definition of the SmartResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SmartResponseType type
 */
class SmartResponseType extends EWSType
{
    /**
     * NewBodyContent property
     *
     * @var EWSType_BodyType
     */
    public $NewBodyContent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'NewBodyContent',
                'required' => false,
                'type' => 'BodyType',
            ),
        );
    }
}
