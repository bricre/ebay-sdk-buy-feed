<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A parameter of the application's configuration used to define the feed files
 * that the application can access.
 */
class Constraint extends AbstractModel
{
    /**
     * A list of the marketplaces to which the application is constrained within the
     * feed type.<br/><br/><b>Example:</b> A value of <code>EBAY_US</code> means the
     * application is constrained to the U.S. marketplace for the listed feed.<br /><br
     * /><span class="tablenote"><span
     * style="color:#004680"><strong>Note:</strong></span> The <b>Buy Feed</b> API is
     * not supported by all eBay marketplaces. See <a
     * href='/api-docs/buy/feed/v1/overview.html#API'>API restrictions</a> for
     * information about regional constraints.</span>.
     *
     * @var string[]|
     */
    public $marketplaceIds = null;
}
