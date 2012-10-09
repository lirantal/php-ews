<?php
/**
 * Definition of the ResolveNamesResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ResolveNamesResponseMessageType type
 */
class ResolveNamesResponseMessageType extends EWSType
{
    /**
     * ResolutionSet property
     *
     * @var EWSType_ArrayOfResolutionType
     */
    public $ResolutionSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResolutionSet',
                'required' => false,
                'type' => 'ArrayOfResolutionType',
            ),
        );
    }
}
