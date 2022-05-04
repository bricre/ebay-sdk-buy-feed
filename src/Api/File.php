<?php

namespace Ebay\Buy\Feed\Api;

use Ebay\Buy\Feed\Model\FileMetadata;
use Ebay\Buy\Feed\Model\FileMetadataSearchResponse;

class File extends AbstractAPI
{
    /**
     * <p>Use the <b>downloadFile</b> method to download a selected TSV_gzip feed
     * file.<p>Use the <b>getFiles</b> methods to obtain the <b>file_id</b> of the
     * specific feed file you require.</p><h3><b>Downloading feed files </b></h3>
     * <p>The feed files are binary gzip files. If the file is larger than 200 MB, the
     * download must be streamed in chunks. You specify the size of the chunks in bytes
     * using the <a href="#range-header">Range</a> request header. The <a
     * href="#content-range">content-range</a> response header indicates where in the
     * full resource this partial chunk of data belongs  and the total number of bytes
     * in the file.       For more information about using these headers, see <a
     * href="/api-docs/buy/static/api-feed.html#retrv-gzip">Retrieving a GZIP feed
     * file</a>.    </p>.
     *
     * @param string $file_id The unique identifier of the feed file that you wish to
     *                        download. Use the <b>getFiles</b> method to obtain the <b>fileId</b> value for
     *                        the desired feed file.
     * @param array  $headers options:
     *                        'Range'	string	Indicates where in the full resource this partial chunk of data
     *                        belongs and the total number of bytes in the file.<br /><br /><b>Example: </b>
     *                        <code>bytes=0-102400</code>.<br /><br />For more information about using this
     *                        header, see <a href="/api-docs/buy/static/api-feed.html#retrv-gzip">Retrieving a
     *                        gzip feed file</a>.
     *                        'X-EBAY-C-MARKETPLACE-ID'	string	This is the ID of the eBay marketplace that the
     *                        feed file belongs to. <br /><br /><b>Example:</b><code>X-EBAY-C-MARKETPLACE-ID:
     *                        EBAY_US</code>.<br /><br />For a list of supported sites and other restrictions,
     *                        see <a href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.
     *
     * @return mixed
     */
    public function download(string $file_id, array $headers = []): mixed
    {
        return $this->request(
        'downloadFile',
        'GET',
        "file/$file_id/download",
        null,
        [],
        $headers
        );
    }

    /**
     * Use the <b>getFile</b> method to fetch the details of a feed file available to
     * download, as specified by the file's <b>file_id</b>.</p><p>Details in the
     * response include: the feed's <b>file_id</b>, the date it became available, eBay
     * categories that support the feed, its frequency (currently only HOURLY is
     * supported), the time span it covers, its feed type, its format (currently only
     * TSV is available), its size in bytes, the schema under which it was pulled, and
     * the marketplaces it applies to.</p>.
     *
     * @param string $file_id Unique identifier of feed file. Feed file IDs can be
     *                        retrieved with the <b>getFiles</b> method.
     * @param array  $headers options:
     *                        'X-EBAY-C-MARKETPLACE-ID'	string	This is the ID of the eBay marketplace on which
     *                        the feed file exists. <br /><br /><b>Example:</b> <code>X-EBAY-C-MARKETPLACE-ID:
     *                        EBAY_US</code>.<br /><br />For a list of supported sites and other restrictions,
     *                        see <a href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.
     *
     * @return FileMetadata
     */
    public function get(string $file_id, array $headers = []): FileMetadata
    {
        return $this->request(
        'getFile',
        'GET',
        "file/$file_id",
        null,
        [],
        $headers
        );
    }

    /**
     * <p>The <b>getFiles</b> method provides a list of the feed files available for
     * download.</p>Details for each feed returned include the date the feed was
     * generated, the frequency with which it is pulled (currently only HOURLY is
     * supported), its feed type, its <b>fileid</b>, its format (currently only TSV is
     * supported), the eBay marketplaces it applies to, the schema version under which
     * it was generated, its size in bytes, and the time span it covers (in
     * hours).</p><p>You can limit your search results by feed type, marketplace,
     * scope, and eBay L1 category.</p><h3><b>Restrictions </b></h3><p>For a list of
     * supported sites and other restrictions, see <a
     * href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.</p>.
     *
     * @param array $queries options:
     *                       'category_ids'	string	This query parameter is used to specify one or more eBay
     *                       L1 category IDs. If this filter is used, only feed files that are supported for
     *                       the specified category (or categories) will be returned in the response. Each
     *                       category ID value must be delimited by a comma.<br /><br /><b>Max:</b> 20 values
     *                       'continuation_token'	string	The server returns this token to the web client when
     *                       the responses received require multiple pages to display. The web client sends
     *                       this token back to the server to get the next page of results.
     *                       'feed_scope'	string	Specifies the frequency with which the feed file is made
     *                       available (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br
     *                       /><br />Currently only <code>DAILY</code> is supported.
     *                       'feed_type_id'	string	The unique identifier for the feed type.<br /><br />Use
     *                       the <b>getFeedTypes</b> method to identify the available feed types.<br /><br
     *                       /><span class="tablenote"><span
     *                       style="color:#004680"><strong>Note:</strong></span> Refer to <a
     *                       href="/api-docs/buy/feed/v1/static/overview.html#feed-types"
     *                       target="_blank">Supported feed types</a> to learn more about the feed types
     *                       supported by the Feed API.</span>
     *                       'limit'	string	The number of records to show in the response.<br /><br
     *                       /><b>Default:</b> 20<br /><br /><b>Minimum:</b> 20<br /><br /><b>Maximum:</b>
     *                       100
     *                       'look_back'	string	How far back from the current time to limit the returned feed
     *                       files. The returned feed files will be those generated between the current time
     *                       and the look-back time.<br /><br /><b>Example:</b> A value of <code>120</code>
     *                       will limit the returned feed files to those generated in the past 2 hours (120
     *                       minutes). If 3 feed files have been generated in the past 2 hours, those 3 files
     *                       will be returned. A feed file generated 4 hours earlier will not be returned.
     * @param array $headers options:
     *                       'X-EBAY-C-MARKETPLACE-ID'	string	This is the ID of the eBay marketplace on which
     *                       to search for feed files.<br /><br /><b>Example:</b>
     *                       <code>X-EBAY-C-MARKETPLACE-ID: EBAY_US</code>.<br /><br /><p>For a list of
     *                       supported sites and other restrictions, see <a
     *                       href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.
     *
     * @return FileMetadataSearchResponse
     */
    public function gets(array $queries = [], array $headers = []): FileMetadataSearchResponse
    {
        return $this->request(
        'getFiles',
        'GET',
        'file',
        null,
        $queries,
        $headers
        );
    }
}
