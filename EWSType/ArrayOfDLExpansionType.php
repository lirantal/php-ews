<?php
/**
 * Definition of the ArrayOfDLExpansionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfDLExpansionType type
 */
class ArrayOfDLExpansionType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'EmailAddressType',
            ),
            array(
                'name' => 'IndexedPagingOffset',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'NumeratorOffset',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'AbsoluteDenominator',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'IncludesLastItemInRange',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'TotalItemsInView',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
