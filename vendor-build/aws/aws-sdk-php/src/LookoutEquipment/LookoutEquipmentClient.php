<?php

namespace ExpressionEngine\Dependency\Aws\LookoutEquipment;

use ExpressionEngine\Dependency\Aws\AwsClient;
/**
 * This client is used to interact with the **Amazon Lookout for Equipment** service.
 * @method \Aws\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \Aws\Result createInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInferenceSchedulerAsync(array $args = [])
 * @method \Aws\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \Aws\Result deleteInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInferenceSchedulerAsync(array $args = [])
 * @method \Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws\Result describeDataIngestionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataIngestionJobAsync(array $args = [])
 * @method \Aws\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \Aws\Result describeInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInferenceSchedulerAsync(array $args = [])
 * @method \Aws\Result describeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelAsync(array $args = [])
 * @method \Aws\Result listDataIngestionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataIngestionJobsAsync(array $args = [])
 * @method \Aws\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \Aws\Result listInferenceExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInferenceExecutionsAsync(array $args = [])
 * @method \Aws\Result listInferenceSchedulers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInferenceSchedulersAsync(array $args = [])
 * @method \Aws\Result listModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelsAsync(array $args = [])
 * @method \Aws\Result listSensorStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSensorStatisticsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startDataIngestionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataIngestionJobAsync(array $args = [])
 * @method \Aws\Result startInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInferenceSchedulerAsync(array $args = [])
 * @method \Aws\Result stopInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInferenceSchedulerAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateInferenceScheduler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInferenceSchedulerAsync(array $args = [])
 */
class LookoutEquipmentClient extends AwsClient
{
}
