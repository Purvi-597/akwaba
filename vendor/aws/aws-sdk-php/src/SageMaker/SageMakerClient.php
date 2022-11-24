<?php
namespace Aws\SageMaker;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker Service** service.
 * @method \Aws\Result addAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addAssociationAsync(array $args = [])
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result associateTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTrialComponentAsync(array $args = [])
 * @method \Aws\Result batchDescribeModelPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeModelPackageAsync(array $args = [])
 * @method \Aws\Result createAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActionAsync(array $args = [])
 * @method \Aws\Result createAlgorithm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlgorithmAsync(array $args = [])
 * @method \Aws\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \Aws\Result createAppImageConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppImageConfigAsync(array $args = [])
 * @method \Aws\Result createArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createArtifactAsync(array $args = [])
 * @method \Aws\Result createAutoMLJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAutoMLJobAsync(array $args = [])
 * @method \Aws\Result createCodeRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeRepositoryAsync(array $args = [])
 * @method \Aws\Result createCompilationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCompilationJobAsync(array $args = [])
 * @method \Aws\Result createContext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContextAsync(array $args = [])
 * @method \Aws\Result createDataQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result createDeviceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceFleetAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createEdgePackagingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEdgePackagingJobAsync(array $args = [])
 * @method \Aws\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \Aws\Result createEndpointConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointConfigAsync(array $args = [])
 * @method \Aws\Result createExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExperimentAsync(array $args = [])
 * @method \Aws\Result createFeatureGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFeatureGroupAsync(array $args = [])
 * @method \Aws\Result createFlowDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlowDefinitionAsync(array $args = [])
 * @method \Aws\Result createHumanTaskUi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHumanTaskUiAsync(array $args = [])
 * @method \Aws\Result createHyperParameterTuningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHyperParameterTuningJobAsync(array $args = [])
 * @method \Aws\Result createImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageAsync(array $args = [])
 * @method \Aws\Result createImageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageVersionAsync(array $args = [])
 * @method \Aws\Result createInferenceRecommendationsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInferenceRecommendationsJobAsync(array $args = [])
 * @method \Aws\Result createLabelingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLabelingJobAsync(array $args = [])
 * @method \Aws\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws\Result createModelBiasJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelBiasJobDefinitionAsync(array $args = [])
 * @method \Aws\Result createModelExplainabilityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelExplainabilityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result createModelPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelPackageAsync(array $args = [])
 * @method \Aws\Result createModelPackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelPackageGroupAsync(array $args = [])
 * @method \Aws\Result createModelQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result createMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result createNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result createNotebookInstanceLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \Aws\Result createPresignedDomainUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresignedDomainUrlAsync(array $args = [])
 * @method \Aws\Result createPresignedNotebookInstanceUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresignedNotebookInstanceUrlAsync(array $args = [])
 * @method \Aws\Result createProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProcessingJobAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result createStudioLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStudioLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result createTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrainingJobAsync(array $args = [])
 * @method \Aws\Result createTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTransformJobAsync(array $args = [])
 * @method \Aws\Result createTrial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrialAsync(array $args = [])
 * @method \Aws\Result createTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrialComponentAsync(array $args = [])
 * @method \Aws\Result createUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserProfileAsync(array $args = [])
 * @method \Aws\Result createWorkforce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkforceAsync(array $args = [])
 * @method \Aws\Result createWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkteamAsync(array $args = [])
 * @method \Aws\Result deleteAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActionAsync(array $args = [])
 * @method \Aws\Result deleteAlgorithm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlgorithmAsync(array $args = [])
 * @method \Aws\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \Aws\Result deleteAppImageConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppImageConfigAsync(array $args = [])
 * @method \Aws\Result deleteArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteArtifactAsync(array $args = [])
 * @method \Aws\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \Aws\Result deleteCodeRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCodeRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteContext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContextAsync(array $args = [])
 * @method \Aws\Result deleteDataQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteDeviceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceFleetAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \Aws\Result deleteEndpointConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointConfigAsync(array $args = [])
 * @method \Aws\Result deleteExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExperimentAsync(array $args = [])
 * @method \Aws\Result deleteFeatureGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFeatureGroupAsync(array $args = [])
 * @method \Aws\Result deleteFlowDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFlowDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteHumanTaskUi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHumanTaskUiAsync(array $args = [])
 * @method \Aws\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Aws\Result deleteImageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageVersionAsync(array $args = [])
 * @method \Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws\Result deleteModelBiasJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelBiasJobDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteModelExplainabilityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelExplainabilityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteModelPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelPackageAsync(array $args = [])
 * @method \Aws\Result deleteModelPackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelPackageGroupAsync(array $args = [])
 * @method \Aws\Result deleteModelPackageGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelPackageGroupPolicyAsync(array $args = [])
 * @method \Aws\Result deleteModelQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result deleteNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result deleteNotebookInstanceLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws\Result deleteStudioLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStudioLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result deleteTrial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrialAsync(array $args = [])
 * @method \Aws\Result deleteTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrialComponentAsync(array $args = [])
 * @method \Aws\Result deleteUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserProfileAsync(array $args = [])
 * @method \Aws\Result deleteWorkforce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkforceAsync(array $args = [])
 * @method \Aws\Result deleteWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkteamAsync(array $args = [])
 * @method \Aws\Result deregisterDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterDevicesAsync(array $args = [])
 * @method \Aws\Result describeAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActionAsync(array $args = [])
 * @method \Aws\Result describeAlgorithm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlgorithmAsync(array $args = [])
 * @method \Aws\Result describeApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppAsync(array $args = [])
 * @method \Aws\Result describeAppImageConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppImageConfigAsync(array $args = [])
 * @method \Aws\Result describeArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeArtifactAsync(array $args = [])
 * @method \Aws\Result describeAutoMLJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoMLJobAsync(array $args = [])
 * @method \Aws\Result describeCodeRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeRepositoryAsync(array $args = [])
 * @method \Aws\Result describeCompilationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCompilationJobAsync(array $args = [])
 * @method \Aws\Result describeContext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContextAsync(array $args = [])
 * @method \Aws\Result describeDataQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Aws\Result describeDeviceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceFleetAsync(array $args = [])
 * @method \Aws\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \Aws\Result describeEdgePackagingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEdgePackagingJobAsync(array $args = [])
 * @method \Aws\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \Aws\Result describeEndpointConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointConfigAsync(array $args = [])
 * @method \Aws\Result describeExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExperimentAsync(array $args = [])
 * @method \Aws\Result describeFeatureGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFeatureGroupAsync(array $args = [])
 * @method \Aws\Result describeFlowDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlowDefinitionAsync(array $args = [])
 * @method \Aws\Result describeHumanTaskUi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHumanTaskUiAsync(array $args = [])
 * @method \Aws\Result describeHyperParameterTuningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHyperParameterTuningJobAsync(array $args = [])
 * @method \Aws\Result describeImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageAsync(array $args = [])
 * @method \Aws\Result describeImageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageVersionAsync(array $args = [])
 * @method \Aws\Result describeInferenceRecommendationsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInferenceRecommendationsJobAsync(array $args = [])
 * @method \Aws\Result describeLabelingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLabelingJobAsync(array $args = [])
 * @method \Aws\Result describeLineageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLineageGroupAsync(array $args = [])
 * @method \Aws\Result describeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelAsync(array $args = [])
 * @method \Aws\Result describeModelBiasJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelBiasJobDefinitionAsync(array $args = [])
 * @method \Aws\Result describeModelExplainabilityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelExplainabilityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result describeModelPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelPackageAsync(array $args = [])
 * @method \Aws\Result describeModelPackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelPackageGroupAsync(array $args = [])
 * @method \Aws\Result describeModelQualityJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeModelQualityJobDefinitionAsync(array $args = [])
 * @method \Aws\Result describeMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result describeNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result describeNotebookInstanceLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result describePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelineAsync(array $args = [])
 * @method \Aws\Result describePipelineDefinitionForExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelineDefinitionForExecutionAsync(array $args = [])
 * @method \Aws\Result describePipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelineExecutionAsync(array $args = [])
 * @method \Aws\Result describeProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProcessingJobAsync(array $args = [])
 * @method \Aws\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \Aws\Result describeStudioLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStudioLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result describeSubscribedWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribedWorkteamAsync(array $args = [])
 * @method \Aws\Result describeTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrainingJobAsync(array $args = [])
 * @method \Aws\Result describeTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTransformJobAsync(array $args = [])
 * @method \Aws\Result describeTrial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrialAsync(array $args = [])
 * @method \Aws\Result describeTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrialComponentAsync(array $args = [])
 * @method \Aws\Result describeUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserProfileAsync(array $args = [])
 * @method \Aws\Result describeWorkforce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkforceAsync(array $args = [])
 * @method \Aws\Result describeWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkteamAsync(array $args = [])
 * @method \Aws\Result disableSagemakerServicecatalogPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableSagemakerServicecatalogPortfolioAsync(array $args = [])
 * @method \Aws\Result disassociateTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTrialComponentAsync(array $args = [])
 * @method \Aws\Result enableSagemakerServicecatalogPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSagemakerServicecatalogPortfolioAsync(array $args = [])
 * @method \Aws\Result getDeviceFleetReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceFleetReportAsync(array $args = [])
 * @method \Aws\Result getLineageGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLineageGroupPolicyAsync(array $args = [])
 * @method \Aws\Result getModelPackageGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelPackageGroupPolicyAsync(array $args = [])
 * @method \Aws\Result getSagemakerServicecatalogPortfolioStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSagemakerServicecatalogPortfolioStatusAsync(array $args = [])
 * @method \Aws\Result getSearchSuggestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSearchSuggestionsAsync(array $args = [])
 * @method \Aws\Result listActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionsAsync(array $args = [])
 * @method \Aws\Result listAlgorithms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAlgorithmsAsync(array $args = [])
 * @method \Aws\Result listAppImageConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppImageConfigsAsync(array $args = [])
 * @method \Aws\Result listApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppsAsync(array $args = [])
 * @method \Aws\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \Aws\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \Aws\Result listAutoMLJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAutoMLJobsAsync(array $args = [])
 * @method \Aws\Result listCandidatesForAutoMLJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCandidatesForAutoMLJobAsync(array $args = [])
 * @method \Aws\Result listCodeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCodeRepositoriesAsync(array $args = [])
 * @method \Aws\Result listCompilationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCompilationJobsAsync(array $args = [])
 * @method \Aws\Result listContexts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContextsAsync(array $args = [])
 * @method \Aws\Result listDataQualityJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataQualityJobDefinitionsAsync(array $args = [])
 * @method \Aws\Result listDeviceFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceFleetsAsync(array $args = [])
 * @method \Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listEdgePackagingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEdgePackagingJobsAsync(array $args = [])
 * @method \Aws\Result listEndpointConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointConfigsAsync(array $args = [])
 * @method \Aws\Result listEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointsAsync(array $args = [])
 * @method \Aws\Result listExperiments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperimentsAsync(array $args = [])
 * @method \Aws\Result listFeatureGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFeatureGroupsAsync(array $args = [])
 * @method \Aws\Result listFlowDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFlowDefinitionsAsync(array $args = [])
 * @method \Aws\Result listHumanTaskUis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHumanTaskUisAsync(array $args = [])
 * @method \Aws\Result listHyperParameterTuningJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHyperParameterTuningJobsAsync(array $args = [])
 * @method \Aws\Result listImageVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageVersionsAsync(array $args = [])
 * @method \Aws\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \Aws\Result listInferenceRecommendationsJobSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInferenceRecommendationsJobStepsAsync(array $args = [])
 * @method \Aws\Result listInferenceRecommendationsJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInferenceRecommendationsJobsAsync(array $args = [])
 * @method \Aws\Result listLabelingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLabelingJobsAsync(array $args = [])
 * @method \Aws\Result listLabelingJobsForWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLabelingJobsForWorkteamAsync(array $args = [])
 * @method \Aws\Result listLineageGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLineageGroupsAsync(array $args = [])
 * @method \Aws\Result listModelBiasJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelBiasJobDefinitionsAsync(array $args = [])
 * @method \Aws\Result listModelExplainabilityJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelExplainabilityJobDefinitionsAsync(array $args = [])
 * @method \Aws\Result listModelMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelMetadataAsync(array $args = [])
 * @method \Aws\Result listModelPackageGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelPackageGroupsAsync(array $args = [])
 * @method \Aws\Result listModelPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelPackagesAsync(array $args = [])
 * @method \Aws\Result listModelQualityJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelQualityJobDefinitionsAsync(array $args = [])
 * @method \Aws\Result listModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelsAsync(array $args = [])
 * @method \Aws\Result listMonitoringExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMonitoringExecutionsAsync(array $args = [])
 * @method \Aws\Result listMonitoringSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMonitoringSchedulesAsync(array $args = [])
 * @method \Aws\Result listNotebookInstanceLifecycleConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotebookInstanceLifecycleConfigsAsync(array $args = [])
 * @method \Aws\Result listNotebookInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotebookInstancesAsync(array $args = [])
 * @method \Aws\Result listPipelineExecutionSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelineExecutionStepsAsync(array $args = [])
 * @method \Aws\Result listPipelineExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelineExecutionsAsync(array $args = [])
 * @method \Aws\Result listPipelineParametersForExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelineParametersForExecutionAsync(array $args = [])
 * @method \Aws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \Aws\Result listProcessingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProcessingJobsAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listStudioLifecycleConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStudioLifecycleConfigsAsync(array $args = [])
 * @method \Aws\Result listSubscribedWorkteams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscribedWorkteamsAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result listTrainingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrainingJobsAsync(array $args = [])
 * @method \Aws\Result listTrainingJobsForHyperParameterTuningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrainingJobsForHyperParameterTuningJobAsync(array $args = [])
 * @method \Aws\Result listTransformJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTransformJobsAsync(array $args = [])
 * @method \Aws\Result listTrialComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrialComponentsAsync(array $args = [])
 * @method \Aws\Result listTrials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrialsAsync(array $args = [])
 * @method \Aws\Result listUserProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserProfilesAsync(array $args = [])
 * @method \Aws\Result listWorkforces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkforcesAsync(array $args = [])
 * @method \Aws\Result listWorkteams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkteamsAsync(array $args = [])
 * @method \Aws\Result putModelPackageGroupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putModelPackageGroupPolicyAsync(array $args = [])
 * @method \Aws\Result queryLineage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLineageAsync(array $args = [])
 * @method \Aws\Result registerDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDevicesAsync(array $args = [])
 * @method \Aws\Result renderUiTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renderUiTemplateAsync(array $args = [])
 * @method \Aws\Result retryPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryPipelineExecutionAsync(array $args = [])
 * @method \Aws\Result search(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAsync(array $args = [])
 * @method \Aws\Result sendPipelineExecutionStepFailure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendPipelineExecutionStepFailureAsync(array $args = [])
 * @method \Aws\Result sendPipelineExecutionStepSuccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendPipelineExecutionStepSuccessAsync(array $args = [])
 * @method \Aws\Result startMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result startNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result startPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineExecutionAsync(array $args = [])
 * @method \Aws\Result stopAutoMLJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAutoMLJobAsync(array $args = [])
 * @method \Aws\Result stopCompilationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopCompilationJobAsync(array $args = [])
 * @method \Aws\Result stopEdgePackagingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopEdgePackagingJobAsync(array $args = [])
 * @method \Aws\Result stopHyperParameterTuningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopHyperParameterTuningJobAsync(array $args = [])
 * @method \Aws\Result stopInferenceRecommendationsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInferenceRecommendationsJobAsync(array $args = [])
 * @method \Aws\Result stopLabelingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLabelingJobAsync(array $args = [])
 * @method \Aws\Result stopMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result stopNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result stopPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPipelineExecutionAsync(array $args = [])
 * @method \Aws\Result stopProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopProcessingJobAsync(array $args = [])
 * @method \Aws\Result stopTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTrainingJobAsync(array $args = [])
 * @method \Aws\Result stopTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTransformJobAsync(array $args = [])
 * @method \Aws\Result updateAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateActionAsync(array $args = [])
 * @method \Aws\Result updateAppImageConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppImageConfigAsync(array $args = [])
 * @method \Aws\Result updateArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateArtifactAsync(array $args = [])
 * @method \Aws\Result updateCodeRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCodeRepositoryAsync(array $args = [])
 * @method \Aws\Result updateContext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContextAsync(array $args = [])
 * @method \Aws\Result updateDeviceFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceFleetAsync(array $args = [])
 * @method \Aws\Result updateDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicesAsync(array $args = [])
 * @method \Aws\Result updateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAsync(array $args = [])
 * @method \Aws\Result updateEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointAsync(array $args = [])
 * @method \Aws\Result updateEndpointWeightsAndCapacities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointWeightsAndCapacitiesAsync(array $args = [])
 * @method \Aws\Result updateExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExperimentAsync(array $args = [])
 * @method \Aws\Result updateImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateImageAsync(array $args = [])
 * @method \Aws\Result updateModelPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelPackageAsync(array $args = [])
 * @method \Aws\Result updateMonitoringSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMonitoringScheduleAsync(array $args = [])
 * @method \Aws\Result updateNotebookInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotebookInstanceAsync(array $args = [])
 * @method \Aws\Result updateNotebookInstanceLifecycleConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method \Aws\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \Aws\Result updatePipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineExecutionAsync(array $args = [])
 * @method \Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \Aws\Result updateTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrainingJobAsync(array $args = [])
 * @method \Aws\Result updateTrial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrialAsync(array $args = [])
 * @method \Aws\Result updateTrialComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrialComponentAsync(array $args = [])
 * @method \Aws\Result updateUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserProfileAsync(array $args = [])
 * @method \Aws\Result updateWorkforce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkforceAsync(array $args = [])
 * @method \Aws\Result updateWorkteam(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkteamAsync(array $args = [])
 */
class SageMakerClient extends AwsClient {}
