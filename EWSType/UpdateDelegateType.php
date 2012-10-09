<?php
/**
 * Definition of the UpdateDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the UpdateDelegateType type
 */
class UpdateDelegateType extends EWSType
{
    /**
     * DelegateUsers property
     *
     * @var EWSType_ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var EWSType_DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DelegateUsers',
                'required' => false,
                'type' => 'ArrayOfDelegateUserType',
            ),
            array(
                'name' => 'DeliverMeetingRequests',
                'required' => false,
                'type' => 'DeliverMeetingRequestsType',
            ),
        );
    }
}
