<?php
/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 */
class NonEmptyArrayOfFolderNamesType extends EWSType
{
    /**
     * FolderName property
     *
     * @var string
     */
    public $FolderName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
