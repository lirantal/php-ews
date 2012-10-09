<?php
/**
 * Definition of the BodyType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BodyType type
 */
class BodyType extends EWSType
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * BodyType property
     *
     * @var EWSType_BodyTypeType
     */
    public $BodyType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => '_',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'BodyType',
                'required' => false,
                'type' => 'BodyTypeType',
            ),
        );
    }
}
