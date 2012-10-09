<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends EWSType
{
    /**
     * FreeBusyResponseArray property
     *
     * @var EWSType_ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * @var EWSType_SuggestionsResponseType
     */
    public $SuggestionsResponse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FreeBusyResponseArray',
                'required' => false,
                'type' => 'ArrayOfFreeBusyResponse',
            ),
            array(
                'name' => 'SuggestionsResponse',
                'required' => false,
                'type' => 'SuggestionsResponseType',
            ),
        );
    }
}
