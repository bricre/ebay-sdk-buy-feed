<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the getFeedTypes method.
 */
class FeedTypeSearchResponse extends AbstractModel
{
    /**
     * An array of the feed types that match the search criteria.
     *
     * @var \Ebay\Buy\Feed\Model\FeedType[]
     */
    public $feedTypes = null;

    /**
     * The URL to to the current set of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of records to show in the current response.
     *
     * @var int
     */
    public $limit = null;

    /**
     * You can use this URL to retrieve the next page of results beyond those displayed
     * on the page if there are more results that match the search criteria.
     *
     * @var string
     */
    public $next = null;

    /**
     * The total number of matches for the search criteria.
     *
     * @var int
     */
    public $total = null;
}
