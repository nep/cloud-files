<?php

namespace ExpressionEngine\Dependency\Aws\FinSpaceData;

use ExpressionEngine\Dependency\Aws\AwsClient;
use ExpressionEngine\Dependency\Aws\CommandInterface;
use ExpressionEngine\Dependency\Psr\Http\Message\RequestInterface;
/**
 * This client is used to interact with the **FinSpace Public API** service.
 * @method \Aws\Result createChangeset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChangesetAsync(array $args = [])
 * @method \Aws\Result createDataView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataViewAsync(array $args = [])
 * @method \Aws\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \Aws\Result createPermissionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPermissionGroupAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \Aws\Result deletePermissionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePermissionGroupAsync(array $args = [])
 * @method \Aws\Result disableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableUserAsync(array $args = [])
 * @method \Aws\Result enableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableUserAsync(array $args = [])
 * @method \Aws\Result getChangeset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangesetAsync(array $args = [])
 * @method \Aws\Result getDataView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataViewAsync(array $args = [])
 * @method \Aws\Result getDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatasetAsync(array $args = [])
 * @method \Aws\Result getProgrammaticAccessCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProgrammaticAccessCredentialsAsync(array $args = [])
 * @method \Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \Aws\Result getWorkingLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkingLocationAsync(array $args = [])
 * @method \Aws\Result listChangesets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangesetsAsync(array $args = [])
 * @method \Aws\Result listDataViews(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataViewsAsync(array $args = [])
 * @method \Aws\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \Aws\Result listPermissionGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPermissionGroupsAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result resetUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetUserPasswordAsync(array $args = [])
 * @method \Aws\Result updateChangeset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChangesetAsync(array $args = [])
 * @method \Aws\Result updateDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetAsync(array $args = [])
 * @method \Aws\Result updatePermissionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePermissionGroupAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class FinSpaceDataClient extends AwsClient
{
}
