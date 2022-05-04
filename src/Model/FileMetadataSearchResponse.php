<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the <b>getFiles</b> method.
 */
class FileMetadataSearchResponse extends AbstractModel
{
    /**
     * An array of metadata values describing the available feed files that match the
     * input criteria.
     *
     * @var \Ebay\Buy\Feed\Model\FileMetadata[]
     */
    public $fileMetadata = null;

    /**
     * The URL to to the current set of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of results that will be displayed on each page, as set by the
     * <b>limit</b> URI parameter.<br /><br /><b>Default:</b> 20.
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
