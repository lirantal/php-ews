<?php
/**
 * Definition of the FolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the FolderIdType type
 */
class FolderIdType extends EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'ChangeKey',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
