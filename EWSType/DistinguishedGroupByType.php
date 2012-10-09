<?php
/**
 * Definition of the DistinguishedGroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the DistinguishedGroupByType type
 */
class DistinguishedGroupByType extends EWSType
{
    /**
     * StandardGroupBy property
     *
     * @var EWSType_StandardGroupByType
     */
    public $StandardGroupBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'StandardGroupBy',
                'required' => false,
                'type' => 'StandardGroupByType',
            ),
        );
    }
}
