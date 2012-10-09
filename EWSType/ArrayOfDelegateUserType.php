<?php
/**
 * Definition of the ArrayOfDelegateUserType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfDelegateUserType type
 */
class ArrayOfDelegateUserType extends EWSType
{
    /**
     * DelegateUser property
     *
     * @var EWSType_DelegateUserType
     */
    public $DelegateUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DelegateUser',
                'required' => false,
                'type' => 'DelegateUserType',
            ),
        );
    }
}
