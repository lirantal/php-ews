<?php
/**
 * Definition of the SearchFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SearchFolderType type
 */
class SearchFolderType extends EWSType
{
    /**
     * SearchParameters property
     *
     * @var EWSType_SearchParametersType
     */
    public $SearchParameters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SearchParameters',
                'required' => false,
                'type' => 'SearchParametersType',
            ),
        );
    }
}
