<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <b>getFeedType</b> and <b>getFeedTypes</b> methods to
 * provide more details about a feed type, including the OAuth scopes required to
 * download the feed files and the constraints on the feed type.
 */
class FeedType extends AbstractModel
{
    /**
     * A description of the feed type.
     *
     * @var string
     */
    public $description = null;

    /**
     * The unique identifier of the feed type.<br /><br /><span class="tablenote"><span
     * style="color:#004680"><strong>Note:</strong></span> Refer to <a
     * href="/api-docs/buy/feed/v1/static/overview.html#feed-types"
     * target="_blank">Supported feed types</a> for additional details.</span>.
     *
     * @var string
     */
    public $feedTypeId = null;

    /**
     * An array of the feed files of the indicated feed type that are available to be
     * downloaded.
     *
     * @var \Ebay\Buy\Feed\Model\SupportedFeed[]
     */
    public $supportedFeeds = null;
}
