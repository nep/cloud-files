<?php

namespace ExpressionEngine\Dependency\Aws\LookoutMetrics;

use ExpressionEngine\Dependency\Aws\AwsClient;
use ExpressionEngine\Dependency\Aws\CommandInterface;
use ExpressionEngine\Dependency\Psr\Http\Message\RequestInterface;
/**
 * This client is used to interact with the **Amazon Lookout for Metrics** service.
 * @method \Aws\Result activateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result backTestAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise backTestAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result createAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlertAsync(array $args = [])
 * @method \Aws\Result createAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result createMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMetricSetAsync(array $args = [])
 * @method \Aws\Result deactivateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result deleteAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlertAsync(array $args = [])
 * @method \Aws\Result deleteAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result describeAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlertAsync(array $args = [])
 * @method \Aws\Result describeAnomalyDetectionExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyDetectionExecutionsAsync(array $args = [])
 * @method \Aws\Result describeAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result describeMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricSetAsync(array $args = [])
 * @method \Aws\Result detectMetricSetConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectMetricSetConfigAsync(array $args = [])
 * @method \Aws\Result getAnomalyGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAnomalyGroupAsync(array $args = [])
 * @method \Aws\Result getFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFeedbackAsync(array $args = [])
 * @method \Aws\Result getSampleData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSampleDataAsync(array $args = [])
 * @method \Aws\Result listAlerts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAlertsAsync(array $args = [])
 * @method \Aws\Result listAnomalyDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyDetectorsAsync(array $args = [])
 * @method \Aws\Result listAnomalyGroupRelatedMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupRelatedMetricsAsync(array $args = [])
 * @method \Aws\Result listAnomalyGroupSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupSummariesAsync(array $args = [])
 * @method \Aws\Result listAnomalyGroupTimeSeries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupTimeSeriesAsync(array $args = [])
 * @method \Aws\Result listMetricSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricSetsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result updateMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMetricSetAsync(array $args = [])
 */
class LookoutMetricsClient extends AwsClient
{
}
