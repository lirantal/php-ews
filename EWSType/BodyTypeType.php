<?php
/**
 * Definition of the BodyTypeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BodyTypeType type
 */
class BodyTypeType extends EWSType
{
    /**
     * HTML body type.
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Text body type.
     *
     * @var string
     */
    const TEXT = 'Text';

    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
