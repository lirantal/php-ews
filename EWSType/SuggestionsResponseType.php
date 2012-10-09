<?php
/**
 * Definition of the SuggestionsResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * @var EWSType_ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResponseMessage',
                'required' => false,
                'type' => 'ResponseMessageType',
            ),
            array(
                'name' => 'SuggestionDayResultArray',
                'required' => false,
                'type' => 'ArrayOfSuggestionDayResult',
            ),
        );
    }
}
