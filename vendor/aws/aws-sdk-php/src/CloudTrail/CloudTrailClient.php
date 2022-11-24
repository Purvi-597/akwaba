<?php
namespace Aws\CloudTrail;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CloudTrail** service.
 *
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result cancelQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelQueryAsync(array $args = [])
 * @method \Aws\Result createEventDataStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventDataStoreAsync(array $args = [])
 * @method \Aws\Result createTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrailAsync(array $args = [])
 * @method \Aws\Result deleteEventDataStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventDataStoreAsync(array $args = [])
 * @method \Aws\Result deleteTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrailAsync(array $args = [])
 * @method \Aws\Result deregisterOrganizationDelegatedAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterOrganizationDelegatedAdminAsync(array $args = [])
 * @method \Aws\Result describeQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQueryAsync(array $args = [])
 * @method \Aws\Result describeTrails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrailsAsync(array $args = [])
 * @method \Aws\Result getEventDataStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventDataStoreAsync(array $args = [])
 * @method \Aws\Result getEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSelectorsAsync(array $args = [])
 * @method \Aws\Result getInsightSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInsightSelectorsAsync(array $args = [])
 * @method \Aws\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \Aws\Result getTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrailAsync(array $args = [])
 * @method \Aws\Result getTrailStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrailStatusAsync(array $args = [])
 * @method \Aws\Result listEventDataStores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventDataStoresAsync(array $args = [])
 * @method \Aws\Result listPublicKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPublicKeysAsync(array $args = [])
 * @method \Aws\Result listQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueriesAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result listTrails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrailsAsync(array $args = [])
 * @method \Aws\Result lookupEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupEventsAsync(array $args = [])
 * @method \Aws\Result putEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventSelectorsAsync(array $args = [])
 * @method \Aws\Result putInsightSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInsightSelectorsAsync(array $args = [])
 * @method \Aws\Result registerOrganizationDelegatedAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerOrganizationDelegatedAdminAsync(array $args = [])
 * @method \Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws\Result restoreEventDataStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreEventDataStoreAsync(array $args = [])
 * @method \Aws\Result startLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoggingAsync(array $args = [])
 * @method \Aws\Result startQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryAsync(array $args = [])
 * @method \Aws\Result stopLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLoggingAsync(array $args = [])
 * @method \Aws\Result updateEventDataStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventDataStoreAsync(array $args = [])
 * @method \Aws\Result updateTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrailAsync(array $args = [])
 */
class CloudTrailClient extends AwsClient {}
