<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The object that is returned by a successful <b>getFeedType</b> or
 * <b>getFeedTypes</b> search describing the characteristics of a feed type.
 */
class SupportedFeed extends AbstractModel
{
    /**
     * The oauth authorization scopes which grant access to the feed files.<br /><br
     * />Currently the only applicable authorization scope is
     * <code>https://api.ebay.com/oauth/api_scope/buy.item.feed</code>.<br /><br
     * /><span class="tablenote"><span
     * style="color:#004680"><strong>Note:</strong></span> You can view your
     * application's oauth scopes on the <a
     * href='developer.ebay.com/my/keys'>Application Keys</a> page.</span>.
     *
     * @var string[]
     */
    public $authorizationScopes = null;

    /**
     * This container shows the eBay marketplaces that support the corresponding feed
     * type. If no constraints are returned, all marketplaces are supported.
     *
     * @var \Ebay\Buy\Feed\Model\Constraint
     */
    public $constraint = null;

    /**
     * Specifies the frequency with which the feed file is made available
     * (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br /><br
     * />Currently only <code>DAILY</code> is supported. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:FeedScopeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $feedScope = null;

    /**
     * How far back from the current time to limit the returned feed files. The
     * returned feed files will be those generated between the current time and the
     * look-back time.<br /><br /><b>Example:</b> A value of <code>120</code> will
     * limit the returned feed files to those generated in the past 2 hours (120
     * minutes). If 3 feed files have been generated in the past 2 hours, those 3 files
     * will be returned. A feed file generated 4 hours earlier will not be returned.
     *
     * @var \Ebay\Buy\Feed\Model\TimeDuration
     */
    public $lookBack = null;

    /**
     * The status for this feed. One of <code>ACTIVE</code>, <code>PAUSED</code>, or
     * <code>DEPRECATED</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:FeedStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * An array of the supported <b>Feed</b> API schemas for this feed type.
     *
     * @var \Ebay\Buy\Feed\Model\SupportedSchema[]
     */
    public $supportedSchemas = null;
}
