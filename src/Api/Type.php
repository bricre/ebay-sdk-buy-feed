<?php

namespace Ebay\Buy\Feed\Api;

use Ebay\Buy\Feed\Model\FeedType;
use Ebay\Buy\Feed\Model\FeedTypeSearchResponse;

class Type extends AbstractAPI
{
    /**
     * Use the <b>getFeedType</b> method to obtain the details about a particular feed
     * type to determine its applicability to your needs.<br /><br />With the response,
     * you can compare the eBay marketplaces and categories with the eBay marketplaces
     * and categories that your application is enabled to access. By making these
     * comparisons, you can avoid attempting to download feed files that you do not
     * have access to.<br /><br /><span class="tablenote"><span
     * style="color:#004680"><strong>Note:</strong></span> For a list of supported
     * sites and other restrictions, see <a
     * href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.</span>.
     *
     * @param string $feed_type_id The unique identifier for the feed type to be used
     *                             as a search filter.<br /><br />Use the <b>getFeedTypes</b> method to identify
     *                             the available feed types.<br /><br /><span class="tablenote"><span
     *                             style="color:#004680"><strong>Note:</strong></span> Refer to <a
     *                             href="/api-docs/buy/feed/v1/static/overview.html#feed-types"
     *                             target="_blank">Supported feed types</a> to learn more about the feed types
     *                             supported by the Feed API.</span>
     *
     * @return FeedType
     */
    public function get(string $feed_type_id): FeedType
    {
        return $this->request(
        'getFeedType',
        'GET',
        "feed_type/$feed_type_id",
        null,
        [],
        []
        );
    }

    /**
     * <p>Use the <b>getFeedTypes</b> method to obtain the details about one or more
     * feed types that are available to be downloaded. If no query parameters are used,
     * all possible feed types are returned.</p>You can filter your search by adding
     * <b>feed_scope</b> and/or <b>marketplace_ids</b> parameters to the URI.</p><p>For
     * instance, a call using <code>GET
     * https://api.ebay.com/buy/feed/v1/feed_type</code> will return all available feed
     * files. A call using <code> GET
     * https://api.ebay.com/buy/feed/v1/feed_type?feed_scope=DAILY&marketplace_ids=EBAY_US</code>
     * will limit the returned list to daily feed files available from the  US
     * marketplace.</p><h3><b>Restrictions </b></h3><p>For a list of supported sites
     * and other restrictions, see <a
     * href="/api-docs/buy/feed/v1/overview.html#API">API Restrictions</a>.</p>.
     *
     * @param array $queries options:
     *                       'continuation_token'	string	The server returns this token to the web client when
     *                       the responses received require multiple pages to display. The web client sends
     *                       this token back to the server to get the next page of results.
     *                       'feed_scope'	string	Specifies the frequency with which the feed file is made
     *                       available (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br
     *                       /><br />Currently only <code>DAILY</code> is supported.
     *                       'limit'	string	The number of records to show in the current response.<br /><br
     *                       /><b>Default:</b> 20<br /><b>Minimum:</b> 20<br /><b>Maximum:</b> 100
     *                       'marketplace_ids'	string	Use this parameter to limit marketplaces you want to
     *                       see. To search for multiple marketplaces at once, list them in the URI separated
     *                       by commas.<br /><br /><b>Example:</b> <code>GET
     *                       https://api.ebay.com/buy/feed/v1/feedtype?marketplaceids=EBAY_FR,EBAY_AU</code>.<br
     *                       /><br />See <a href="/api-docs/buy/feed/v1/overview.html#API">API
     *                       Restrictions</a> for information on supported sites.
     *
     * @return FeedTypeSearchResponse
     */
    public function gets(array $queries = []): FeedTypeSearchResponse
    {
        return $this->request(
        'getFeedTypes',
        'GET',
        'feed_type',
        null,
        $queries,
        []
        );
    }
}
