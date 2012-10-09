<?php
/**
 * Definition of the ContactsViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ContactsViewType type
 */
class ContactsViewType extends EWSType
{
    /**
     * InitialName property
     *
     * @var string
     */
    public $InitialName;

    /**
     * FinalName property
     *
     * @var string
     */
    public $FinalName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'InitialName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'FinalName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
