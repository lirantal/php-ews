<?php
/**
 * Definition of the SortDirectionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Sort order specification
 */
class SortDirectionType extends EWSType
{
    /**
     * Items are sorted in ascending order
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order
     *
     * @var string
     */
    const DESCENDING = 'Descending';

    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
