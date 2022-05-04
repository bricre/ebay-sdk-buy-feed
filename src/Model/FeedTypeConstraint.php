<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This is used to define the eBay marketplaces and eBay L1 categories that support
 * the corresponding feed type.
 */
class FeedTypeConstraint extends AbstractModel
{
    /**
     * An array of the eBay categories the application can access in a feed. See the <a
     * href='https://developer.ebay.com/api-docs/commerce/taxonomy/overview.html'>Taxonomy
     * API</a> for details about obtaining a list eBay L1 categories. The category is
     * expressed as the category's <b>categoryId</b>, not its <b>categoryName</b>;
     * e.g.,  <code>172008</code>, not <code>Gift Cards &amp; Coupons</code>.<br /><br
     * />If no <b>categoryIds</b> are listed, the application can access all categories
     * in the specified marketplace.
     *
     * @var string[]
     */
    public $categoryIds = null;

    /**
     * This enum value indicates an eBay marketplace for which the application can
     * access feed files for the corresponding feed type<br/><br/><b>Example:</b>
     * <code>EBAY_US</code> for the U.S. or <code>EBAY_DE</code> for Germany. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;
}
