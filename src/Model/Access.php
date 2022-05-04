<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Defines the constraints on the feed files available for download within the
 * specified feed type.
 */
class Access extends AbstractModel
{
    /**
     * This array shows the eBay marketplace and eBay L1 categories that the
     * corresponding feed type applies to. If there are no <b>marketplaceId</b>
     * constraints, the application has access to all marketplaces. If there are no
     * <b>categoryId</b> constraints, then the application has access to all categories
     * within the given marketplace.
     *
     * @var \Ebay\Buy\Feed\Model\FeedTypeConstraint[]
     */
    public $constraints = null;

    /**
     * The identifier of the feed type that the application has access to.
     *
     * @var string
     */
    public $feedType = null;
}
