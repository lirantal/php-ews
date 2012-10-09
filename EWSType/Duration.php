<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the Duration type
 */
class Duration extends EWSType
{
    /**
     * StartTime property
     *
     * @var EWSType_dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var EWSType_dateTime
     */
    public $EndTime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'StartTime',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'EndTime',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
