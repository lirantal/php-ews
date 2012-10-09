<?php
/**
 * Definition of the RootItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the RootItemIdType type
 */
class RootItemIdType extends EWSType
{
    /**
     * RootItemId property
     *
     * @var string
     */
    public $RootItemId;

    /**
     * RootItemChangeKey property
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootItemId',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'RootItemChangeKey',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
