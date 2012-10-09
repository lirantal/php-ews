<?php
/**
 * Definition of the DeletedOccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the DeletedOccurrenceInfoType type
 */
class DeletedOccurrenceInfoType extends EWSType
{
    /**
     * Start property
     *
     * @var EWSType_dateTime
     */
    public $Start;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Start',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
