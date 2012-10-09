<?php
/**
 * Definition of the ArrayOfSuggestion type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfSuggestion type
 */
class ArrayOfSuggestion extends EWSType
{
    /**
     * Suggestion property
     *
     * @var EWSType_Suggestion
     */
    public $Suggestion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Suggestion',
                'required' => false,
                'type' => 'Suggestion',
            ),
        );
    }
}
