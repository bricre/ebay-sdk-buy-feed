<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to provide metadata about each feed file in a <b>getFile</b>
 * or <b>getFiles</b> response.
 */
class FileMetadata extends AbstractModel
{
    /**
     * Indicates whether the application is permitted to access the feed file. One of
     * <code>ALLOWED</code> or <code>RESTRICTED</code>. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:AccessEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $access = null;

    /**
     * An array of dimensions supported by the corresponding feed file. <br /><br
     * />Currently the only dimension available is <b>CATEGORY</b>.<br /><br
     * /><b>Example:</b><BR /><code>&quot;dimensionKey&quot;: &quot;CATEGORY&quot;,<br
     * />&quotvalues&quot;: &lsqb;&quot;15032&quot;&rsqb;.
     *
     * @var \Ebay\Buy\Feed\Model\Dimension[]
     */
    public $dimensions = null;

    /**
     * The date on which the feed was created. <br /><br /><b>Format:</b> UTC format
     * <code>(yyyy-MM-ddThh:00:00.000Z)</code>.
     *
     * @var string
     */
    public $feedDate = null;

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
     * The unique identifier of the feed type.<br /><br /><span class="tablenote"><span
     * style="color:#004680"><strong>Note:</strong></span> Refer to <a
     * href="/api-docs/buy/feed/v1/static/overview.html#feed-types"
     * target="_blank">Supported feed types</a> for additional details.</span>.
     *
     * @var string
     */
    public $feedTypeId = null;

    /**
     * The file's unique identifier. This <b>fileid</b> is used to select the feed file
     * when using the <b>downloadFile</b> method.
     *
     * @var string
     */
    public $fileId = null;

    /**
     * Format of the returned feed file. Currently only TSV is supported. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:FormatEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $format = null;

    /**
     * The eBay marketplace identifier for the marketplace(s) to which the feed
     * applies.<br /><br /><b>Example:</b> <code>EBAY_UK</code>. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Version of the API schema under which the feed was created.
     *
     * @var string
     */
    public $schemaVersion = null;

    /**
     * Size of the feed file in bytes.
     *
     * @var int
     */
    public $size = null;

    /**
     * The time span between feed files that applies to the feed type (e.g., hourly,
     * daily, weekly). This is returned in hours. <br /><br /><b>Possible Values: </b>
     * <code>YEAR</code>, <code>MONTH</code>, <code>DAY</code>, <code>HOUR</code>.
     *
     * @var \Ebay\Buy\Feed\Model\TimeDuration
     */
    public $span = null;
}
