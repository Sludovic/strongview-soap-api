<?php

namespace Selligent\MessageStudio;

class MailingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetSingleSignOnURLRequest' => 'Selligent\\MessageStudio\\GetSingleSignOnURLRequest',
      'GetSingleSignOnURLResponse' => 'Selligent\\MessageStudio\\GetSingleSignOnURLResponse',
      'DataSourceId' => 'Selligent\\MessageStudio\\DataSourceId',
      'InternalDataSourceId' => 'Selligent\\MessageStudio\\InternalDataSourceId',
      'ExternalDataSourceId' => 'Selligent\\MessageStudio\\ExternalDataSourceId',
      'InternalDataSourceExtnId' => 'Selligent\\MessageStudio\\InternalDataSourceExtnId',
      'ProgramDataSourceId' => 'Selligent\\MessageStudio\\ProgramDataSourceId',
      'ExtensionId' => 'Selligent\\MessageStudio\\ExtensionId',
      'CatalogId' => 'Selligent\\MessageStudio\\CatalogId',
      'DataSource' => 'Selligent\\MessageStudio\\DataSource',
      'InternalDataSource' => 'Selligent\\MessageStudio\\InternalDataSource',
      'Extension' => 'Selligent\\MessageStudio\\Extension',
      'Catalog' => 'Selligent\\MessageStudio\\Catalog',
      'CatalogField' => 'Selligent\\MessageStudio\\CatalogField',
      'InternalDataSourceExtn' => 'Selligent\\MessageStudio\\InternalDataSourceExtn',
      'ExternalDataSource' => 'Selligent\\MessageStudio\\ExternalDataSource',
      'connectionParameters' => 'Selligent\\MessageStudio\\connectionParameters',
      'jdbcParameters' => 'Selligent\\MessageStudio\\jdbcParameters',
      'hourlyRefresh' => 'Selligent\\MessageStudio\\hourlyRefresh',
      'dailyRefresh' => 'Selligent\\MessageStudio\\dailyRefresh',
      'weeklyRefresh' => 'Selligent\\MessageStudio\\weeklyRefresh',
      'DataSourceField' => 'Selligent\\MessageStudio\\DataSourceField',
      'DataSourceRecord' => 'Selligent\\MessageStudio\\DataSourceRecord',
      'JsonDataField' => 'Selligent\\MessageStudio\\JsonDataField',
      'MultiVariableDataField' => 'Selligent\\MessageStudio\\MultiVariableDataField',
      'DelimitedDataField' => 'Selligent\\MessageStudio\\DelimitedDataField',
      'DataSourceFilter' => 'Selligent\\MessageStudio\\DataSourceFilter',
      'AddDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\AddDataSourceRecordsRequest',
      'UpsertDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\UpsertDataSourceRecordsRequest',
      'ImportFtpFileRequest' => 'Selligent\\MessageStudio\\ImportFtpFileRequest',
      'GetDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\GetDataSourceRecordsRequest',
      'GetDataSourceRecordsResponse' => 'Selligent\\MessageStudio\\GetDataSourceRecordsResponse',
      'InteractionField' => 'Selligent\\MessageStudio\\InteractionField',
      'GetISFieldsRequest' => 'Selligent\\MessageStudio\\GetISFieldsRequest',
      'GetISFieldsResponse' => 'Selligent\\MessageStudio\\GetISFieldsResponse',
      'RemoveDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\RemoveDataSourceRecordsRequest',
      'DeleteDataSourceRecordRequest' => 'Selligent\\MessageStudio\\DeleteDataSourceRecordRequest',
      'ExportDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\ExportDataSourceRecordsRequest',
      'CopyDataSourceRequest' => 'Selligent\\MessageStudio\\CopyDataSourceRequest',
      'DedupeDataSourceRecordsRequest' => 'Selligent\\MessageStudio\\DedupeDataSourceRecordsRequest',
      'DedupeRecordsResponse' => 'Selligent\\MessageStudio\\DedupeRecordsResponse',
      'GetDataSourceStatisticsRequest' => 'Selligent\\MessageStudio\\GetDataSourceStatisticsRequest',
      'GetDataSourceStatisticsResponse' => 'Selligent\\MessageStudio\\GetDataSourceStatisticsResponse',
      'RefreshRecordsRequest' => 'Selligent\\MessageStudio\\RefreshRecordsRequest',
      'RefreshRecordsResponse' => 'Selligent\\MessageStudio\\RefreshRecordsResponse',
      'CancelRefreshRecordsRequest' => 'Selligent\\MessageStudio\\CancelRefreshRecordsRequest',
      'CancelRefreshRecordsResponse' => 'Selligent\\MessageStudio\\CancelRefreshRecordsResponse',
      'RecurringImportResult' => 'Selligent\\MessageStudio\\RecurringImportResult',
      'RecurringImportId' => 'Selligent\\MessageStudio\\RecurringImportId',
      'FtpImportId' => 'Selligent\\MessageStudio\\FtpImportId',
      'DatabaseImportId' => 'Selligent\\MessageStudio\\DatabaseImportId',
      'RecurringImport' => 'Selligent\\MessageStudio\\RecurringImport',
      'DatabaseImport' => 'Selligent\\MessageStudio\\DatabaseImport',
      'FtpImport' => 'Selligent\\MessageStudio\\FtpImport',
      'StartRecurringImportRequest' => 'Selligent\\MessageStudio\\StartRecurringImportRequest',
      'StartRecurringImportResponse' => 'Selligent\\MessageStudio\\StartRecurringImportResponse',
      'GetRecurringImportStatusRequest' => 'Selligent\\MessageStudio\\GetRecurringImportStatusRequest',
      'GetRecurringImportStatusResponse' => 'Selligent\\MessageStudio\\GetRecurringImportStatusResponse',
      'FindRecurringImportRequest' => 'Selligent\\MessageStudio\\FindRecurringImportRequest',
      'FindRecurringImportResponse' => 'Selligent\\MessageStudio\\FindRecurringImportResponse',
      'GetRecurringImportRequest' => 'Selligent\\MessageStudio\\GetRecurringImportRequest',
      'GetRecurringImportResponse' => 'Selligent\\MessageStudio\\GetRecurringImportResponse',
      'TargetId' => 'Selligent\\MessageStudio\\TargetId',
      'Target' => 'Selligent\\MessageStudio\\Target',
      'TargetFilter' => 'Selligent\\MessageStudio\\TargetFilter',
      'CopyTargetRequest' => 'Selligent\\MessageStudio\\CopyTargetRequest',
      'ExportTargetRecordsRequest' => 'Selligent\\MessageStudio\\ExportTargetRecordsRequest',
      'SuppressionListId' => 'Selligent\\MessageStudio\\SuppressionListId',
      'SuppressionList' => 'Selligent\\MessageStudio\\SuppressionList',
      'SuppressionFilter' => 'Selligent\\MessageStudio\\SuppressionFilter',
      'AddSuppressionListRecordsRequest' => 'Selligent\\MessageStudio\\AddSuppressionListRecordsRequest',
      'CopySuppressionListRequest' => 'Selligent\\MessageStudio\\CopySuppressionListRequest',
      'ExportSuppressionListRecordsRequest' => 'Selligent\\MessageStudio\\ExportSuppressionListRecordsRequest',
      'RemoveSuppressionListRecordsRequest' => 'Selligent\\MessageStudio\\RemoveSuppressionListRecordsRequest',
      'SeedListId' => 'Selligent\\MessageStudio\\SeedListId',
      'SeedList' => 'Selligent\\MessageStudio\\SeedList',
      'SeedFilter' => 'Selligent\\MessageStudio\\SeedFilter',
      'AddSeedListRecordsRequest' => 'Selligent\\MessageStudio\\AddSeedListRecordsRequest',
      'CopySeedListRequest' => 'Selligent\\MessageStudio\\CopySeedListRequest',
      'ExportSeedListRecordsRequest' => 'Selligent\\MessageStudio\\ExportSeedListRecordsRequest',
      'RemoveSeedListRecordsRequest' => 'Selligent\\MessageStudio\\RemoveSeedListRecordsRequest',
      'BaseTemplateId' => 'Selligent\\MessageStudio\\BaseTemplateId',
      'TemplateId' => 'Selligent\\MessageStudio\\TemplateId',
      'ChannelTemplateId' => 'Selligent\\MessageStudio\\ChannelTemplateId',
      'BaseTemplate' => 'Selligent\\MessageStudio\\BaseTemplate',
      'Template' => 'Selligent\\MessageStudio\\Template',
      'ChannelTemplate' => 'Selligent\\MessageStudio\\ChannelTemplate',
      'NamedLink' => 'Selligent\\MessageStudio\\NamedLink',
      'MessagePart' => 'Selligent\\MessageStudio\\MessagePart',
      'TemplateFilter' => 'Selligent\\MessageStudio\\TemplateFilter',
      'ChannelTemplateFilter' => 'Selligent\\MessageStudio\\ChannelTemplateFilter',
      'CopyTemplateRequest' => 'Selligent\\MessageStudio\\CopyTemplateRequest',
      'ImportMessagePartRequest' => 'Selligent\\MessageStudio\\ImportMessagePartRequest',
      'ImportMessagePartResponse' => 'Selligent\\MessageStudio\\ImportMessagePartResponse',
      'TestTemplateRequest' => 'Selligent\\MessageStudio\\TestTemplateRequest',
      'ValidateXslRequest' => 'Selligent\\MessageStudio\\ValidateXslRequest',
      'ValidateXslResponse' => 'Selligent\\MessageStudio\\ValidateXslResponse',
      'FetchLinksRequest' => 'Selligent\\MessageStudio\\FetchLinksRequest',
      'FetchLinkResponse' => 'Selligent\\MessageStudio\\FetchLinkResponse',
      'FetchLinksResponse' => 'Selligent\\MessageStudio\\FetchLinksResponse',
      'FetchLinksTemplateRequest' => 'Selligent\\MessageStudio\\FetchLinksTemplateRequest',
      'PersonalizeRequest' => 'Selligent\\MessageStudio\\PersonalizeRequest',
      'PersonalizeTemplateRequest' => 'Selligent\\MessageStudio\\PersonalizeTemplateRequest',
      'PersonalizeMailingRequest' => 'Selligent\\MessageStudio\\PersonalizeMailingRequest',
      'PersonalizeResponse' => 'Selligent\\MessageStudio\\PersonalizeResponse',
      'ContentBlockId' => 'Selligent\\MessageStudio\\ContentBlockId',
      'ContentBlock' => 'Selligent\\MessageStudio\\ContentBlock',
      'ContentBlockToken' => 'Selligent\\MessageStudio\\ContentBlockToken',
      'ContentBlockFilter' => 'Selligent\\MessageStudio\\ContentBlockFilter',
      'CopyContentBlockRequest' => 'Selligent\\MessageStudio\\CopyContentBlockRequest',
      'FetchLinksContentBlockRequest' => 'Selligent\\MessageStudio\\FetchLinksContentBlockRequest',
      'AttachmentId' => 'Selligent\\MessageStudio\\AttachmentId',
      'Attachment' => 'Selligent\\MessageStudio\\Attachment',
      'AttachmentFilter' => 'Selligent\\MessageStudio\\AttachmentFilter',
      'ImportAttachmentContentRequest' => 'Selligent\\MessageStudio\\ImportAttachmentContentRequest',
      'RuleId' => 'Selligent\\MessageStudio\\RuleId',
      'Rule' => 'Selligent\\MessageStudio\\Rule',
      'RuleValue' => 'Selligent\\MessageStudio\\RuleValue',
      'ColumnRuleValue' => 'Selligent\\MessageStudio\\ColumnRuleValue',
      'ContentBlockTokenRuleValue' => 'Selligent\\MessageStudio\\ContentBlockTokenRuleValue',
      'TextRuleValue' => 'Selligent\\MessageStudio\\TextRuleValue',
      'NestedRuleRuleValue' => 'Selligent\\MessageStudio\\NestedRuleRuleValue',
      'RuleIfPartCondition' => 'Selligent\\MessageStudio\\RuleIfPartCondition',
      'RuleIfPart' => 'Selligent\\MessageStudio\\RuleIfPart',
      'RuleThenPart' => 'Selligent\\MessageStudio\\RuleThenPart',
      'RuleElsePart' => 'Selligent\\MessageStudio\\RuleElsePart',
      'RuleFilter' => 'Selligent\\MessageStudio\\RuleFilter',
      'CopyRuleRequest' => 'Selligent\\MessageStudio\\CopyRuleRequest',
      'MailingId' => 'Selligent\\MessageStudio\\MailingId',
      'BaseStandardMailingId' => 'Selligent\\MessageStudio\\BaseStandardMailingId',
      'BaseTransactionalMailingId' => 'Selligent\\MessageStudio\\BaseTransactionalMailingId',
      'StandardMailingId' => 'Selligent\\MessageStudio\\StandardMailingId',
      'TransactionalMailingId' => 'Selligent\\MessageStudio\\TransactionalMailingId',
      'ChannelStandardMailingId' => 'Selligent\\MessageStudio\\ChannelStandardMailingId',
      'ChannelTransactionalMailingId' => 'Selligent\\MessageStudio\\ChannelTransactionalMailingId',
      'MailingNotification' => 'Selligent\\MessageStudio\\MailingNotification',
      'StandardMailingNotification' => 'Selligent\\MessageStudio\\StandardMailingNotification',
      'Mailing' => 'Selligent\\MessageStudio\\Mailing',
      'SchedulableMailing' => 'Selligent\\MessageStudio\\SchedulableMailing',
      'schedule' => 'Selligent\\MessageStudio\\schedule',
      'recurrence' => 'Selligent\\MessageStudio\\recurrence',
      'minutelyRecurrence' => 'Selligent\\MessageStudio\\minutelyRecurrence',
      'hourlyRecurrence' => 'Selligent\\MessageStudio\\hourlyRecurrence',
      'dailyRecurrence' => 'Selligent\\MessageStudio\\dailyRecurrence',
      'weeklyRecurrence' => 'Selligent\\MessageStudio\\weeklyRecurrence',
      'monthlyByDateRecurrence' => 'Selligent\\MessageStudio\\monthlyByDateRecurrence',
      'monthlyByDayRecurrence' => 'Selligent\\MessageStudio\\monthlyByDayRecurrence',
      'yearlyByDateRecurrence' => 'Selligent\\MessageStudio\\yearlyByDateRecurrence',
      'yearlyByDayRecurrence' => 'Selligent\\MessageStudio\\yearlyByDayRecurrence',
      'BaseStandardMailing' => 'Selligent\\MessageStudio\\BaseStandardMailing',
      'StandardMailing' => 'Selligent\\MessageStudio\\StandardMailing',
      'TargetField' => 'Selligent\\MessageStudio\\TargetField',
      'IncludedTargetField' => 'Selligent\\MessageStudio\\IncludedTargetField',
      'ChannelStandardMailing' => 'Selligent\\MessageStudio\\ChannelStandardMailing',
      'BaseTransactionalMailing' => 'Selligent\\MessageStudio\\BaseTransactionalMailing',
      'TransactionalMailing' => 'Selligent\\MessageStudio\\TransactionalMailing',
      'ChannelTransactionalMailing' => 'Selligent\\MessageStudio\\ChannelTransactionalMailing',
      'MailingFilter' => 'Selligent\\MessageStudio\\MailingFilter',
      'ChannelMailingFilter' => 'Selligent\\MessageStudio\\ChannelMailingFilter',
      'CopyMailingRequest' => 'Selligent\\MessageStudio\\CopyMailingRequest',
      'CancelRequest' => 'Selligent\\MessageStudio\\CancelRequest',
      'CancelResponse' => 'Selligent\\MessageStudio\\CancelResponse',
      'CloseRequest' => 'Selligent\\MessageStudio\\CloseRequest',
      'CloseResponse' => 'Selligent\\MessageStudio\\CloseResponse',
      'ArchiveRequest' => 'Selligent\\MessageStudio\\ArchiveRequest',
      'ArchiveResponse' => 'Selligent\\MessageStudio\\ArchiveResponse',
      'GetMailingStatisticsRequest' => 'Selligent\\MessageStudio\\GetMailingStatisticsRequest',
      'GetMailingStatisticsResponse' => 'Selligent\\MessageStudio\\GetMailingStatisticsResponse',
      'LaunchRequest' => 'Selligent\\MessageStudio\\LaunchRequest',
      'LaunchResponse' => 'Selligent\\MessageStudio\\LaunchResponse',
      'LoadRequest' => 'Selligent\\MessageStudio\\LoadRequest',
      'LoadResponse' => 'Selligent\\MessageStudio\\LoadResponse',
      'PauseRequest' => 'Selligent\\MessageStudio\\PauseRequest',
      'PauseResponse' => 'Selligent\\MessageStudio\\PauseResponse',
      'ResumeRequest' => 'Selligent\\MessageStudio\\ResumeRequest',
      'ResumeResponse' => 'Selligent\\MessageStudio\\ResumeResponse',
      'ScheduleRequest' => 'Selligent\\MessageStudio\\ScheduleRequest',
      'ScheduleResponse' => 'Selligent\\MessageStudio\\ScheduleResponse',
      'SendRecord' => 'Selligent\\MessageStudio\\SendRecord',
      'GetTxnMailingHandleRequest' => 'Selligent\\MessageStudio\\GetTxnMailingHandleRequest',
      'GetTxnMailingHandleResponse' => 'Selligent\\MessageStudio\\GetTxnMailingHandleResponse',
      'TxnSendRequest' => 'Selligent\\MessageStudio\\TxnSendRequest',
      'TxnSendResponse' => 'Selligent\\MessageStudio\\TxnSendResponse',
      'GetTxnEasInfoRequest' => 'Selligent\\MessageStudio\\GetTxnEasInfoRequest',
      'GetTxnEasInfoResponse' => 'Selligent\\MessageStudio\\GetTxnEasInfoResponse',
      'GetAllEasByMailingIdRequest' => 'Selligent\\MessageStudio\\GetAllEasByMailingIdRequest',
      'GetAllEasListByMailingIdResponse' => 'Selligent\\MessageStudio\\GetAllEasListByMailingIdResponse',
      'GetAllEasByMailingIdResponse' => 'Selligent\\MessageStudio\\GetAllEasByMailingIdResponse',
      'TestMailingRequest' => 'Selligent\\MessageStudio\\TestMailingRequest',
      'ProgramId' => 'Selligent\\MessageStudio\\ProgramId',
      'ProgramNodeId' => 'Selligent\\MessageStudio\\ProgramNodeId',
      'ProgramContactRecord' => 'Selligent\\MessageStudio\\ProgramContactRecord',
      'AddProgramContactRecordsRequest' => 'Selligent\\MessageStudio\\AddProgramContactRecordsRequest',
      'AddProgramContactRecordsResponse' => 'Selligent\\MessageStudio\\AddProgramContactRecordsResponse',
      'Program' => 'Selligent\\MessageStudio\\Program',
      'ProgramNode' => 'Selligent\\MessageStudio\\ProgramNode',
      'ProgramFilter' => 'Selligent\\MessageStudio\\ProgramFilter',
      'GetProgramNodesRequest' => 'Selligent\\MessageStudio\\GetProgramNodesRequest',
      'GetProgramNodesResponse' => 'Selligent\\MessageStudio\\GetProgramNodesResponse',
      'OrganizationId' => 'Selligent\\MessageStudio\\OrganizationId',
      'Organization' => 'Selligent\\MessageStudio\\Organization',
      'OrganizationFilter' => 'Selligent\\MessageStudio\\OrganizationFilter',
      'UserId' => 'Selligent\\MessageStudio\\UserId',
      'User' => 'Selligent\\MessageStudio\\User',
      'access' => 'Selligent\\MessageStudio\\access',
      'UserFilter' => 'Selligent\\MessageStudio\\UserFilter',
      'RolePermissions' => 'Selligent\\MessageStudio\\RolePermissions',
      'Permissions' => 'Selligent\\MessageStudio\\Permissions',
      'RoleId' => 'Selligent\\MessageStudio\\RoleId',
      'Role' => 'Selligent\\MessageStudio\\Role',
      'RoleFilter' => 'Selligent\\MessageStudio\\RoleFilter',
      'AssignedRoleId' => 'Selligent\\MessageStudio\\AssignedRoleId',
      'AssignedRole' => 'Selligent\\MessageStudio\\AssignedRole',
      'AssignedRoleFilter' => 'Selligent\\MessageStudio\\AssignedRoleFilter',
      'SystemAddressId' => 'Selligent\\MessageStudio\\SystemAddressId',
      'SystemAddress' => 'Selligent\\MessageStudio\\SystemAddress',
      'SystemAddressFilter' => 'Selligent\\MessageStudio\\SystemAddressFilter',
      'CampaignId' => 'Selligent\\MessageStudio\\CampaignId',
      'Campaign' => 'Selligent\\MessageStudio\\Campaign',
      'CampaignFilter' => 'Selligent\\MessageStudio\\CampaignFilter',
      'MediaServerId' => 'Selligent\\MessageStudio\\MediaServerId',
      'MediaServer' => 'Selligent\\MessageStudio\\MediaServer',
      'server' => 'Selligent\\MessageStudio\\server',
      'MediaServerFilter' => 'Selligent\\MessageStudio\\MediaServerFilter',
      'WebAnalyticsId' => 'Selligent\\MessageStudio\\WebAnalyticsId',
      'WebAnalytics' => 'Selligent\\MessageStudio\\WebAnalytics',
      'WebAnalyticsFilter' => 'Selligent\\MessageStudio\\WebAnalyticsFilter',
      'MailingClassId' => 'Selligent\\MessageStudio\\MailingClassId',
      'MailingClass' => 'Selligent\\MessageStudio\\MailingClass',
      'MailingClassFilter' => 'Selligent\\MessageStudio\\MailingClassFilter',
      'StrongtoolId' => 'Selligent\\MessageStudio\\StrongtoolId',
      'Strongtool' => 'Selligent\\MessageStudio\\Strongtool',
      'StrongtoolFilter' => 'Selligent\\MessageStudio\\StrongtoolFilter',
      'GlobalUndeliverableRequest' => 'Selligent\\MessageStudio\\GlobalUndeliverableRequest',
      'GlobalUndeliverableResponse' => 'Selligent\\MessageStudio\\GlobalUndeliverableResponse',
      'ReactivateGlobalUndeliverableRequest' => 'Selligent\\MessageStudio\\ReactivateGlobalUndeliverableRequest',
      'ReactivateGlobalUndeliverableResponse' => 'Selligent\\MessageStudio\\ReactivateGlobalUndeliverableResponse',
      'AddGlobalUndeliverableRequest' => 'Selligent\\MessageStudio\\AddGlobalUndeliverableRequest',
      'AddGlobalUndeliverableResponse' => 'Selligent\\MessageStudio\\AddGlobalUndeliverableResponse',
      'GlobalUndeliverableInfo' => 'Selligent\\MessageStudio\\GlobalUndeliverableInfo',
      'AddGlobalUndeliverableInfo' => 'Selligent\\MessageStudio\\AddGlobalUndeliverableInfo',
      'ChannelId' => 'Selligent\\MessageStudio\\ChannelId',
      'Channel' => 'Selligent\\MessageStudio\\Channel',
      'ChannelHeader' => 'Selligent\\MessageStudio\\ChannelHeader',
      'ChannelFilter' => 'Selligent\\MessageStudio\\ChannelFilter',
      'TagId' => 'Selligent\\MessageStudio\\TagId',
      'TagValueId' => 'Selligent\\MessageStudio\\TagValueId',
      'Tag' => 'Selligent\\MessageStudio\\Tag',
      'TagValue' => 'Selligent\\MessageStudio\\TagValue',
      'TagFilter' => 'Selligent\\MessageStudio\\TagFilter',
      'OrganizationToken' => 'Selligent\\MessageStudio\\OrganizationToken',
      'IsSSO' => 'Selligent\\MessageStudio\\IsSSO',
      'DeepLink' => 'Selligent\\MessageStudio\\DeepLink',
      'ObjectId' => 'Selligent\\MessageStudio\\ObjectId',
      'BaseObject' => 'Selligent\\MessageStudio\\BaseObject',
      'DedupeRecordsRequest' => 'Selligent\\MessageStudio\\DedupeRecordsRequest',
      'NameValuePair' => 'Selligent\\MessageStudio\\NameValuePair',
      'BaseFilter' => 'Selligent\\MessageStudio\\BaseFilter',
      'FilterCondition' => 'Selligent\\MessageStudio\\FilterCondition',
      'BooleanFilterCondition' => 'Selligent\\MessageStudio\\BooleanFilterCondition',
      'ScalarBooleanFilterCondition' => 'Selligent\\MessageStudio\\ScalarBooleanFilterCondition',
      'IntegerFilterCondition' => 'Selligent\\MessageStudio\\IntegerFilterCondition',
      'ScalarIntegerFilterCondition' => 'Selligent\\MessageStudio\\ScalarIntegerFilterCondition',
      'ArrayIntegerFilterCondition' => 'Selligent\\MessageStudio\\ArrayIntegerFilterCondition',
      'IdFilterCondition' => 'Selligent\\MessageStudio\\IdFilterCondition',
      'ScalarIdFilterCondition' => 'Selligent\\MessageStudio\\ScalarIdFilterCondition',
      'ArrayIdFilterCondition' => 'Selligent\\MessageStudio\\ArrayIdFilterCondition',
      'StringFilterCondition' => 'Selligent\\MessageStudio\\StringFilterCondition',
      'ScalarStringFilterCondition' => 'Selligent\\MessageStudio\\ScalarStringFilterCondition',
      'ArrayStringFilterCondition' => 'Selligent\\MessageStudio\\ArrayStringFilterCondition',
      'AddRecordsRequest' => 'Selligent\\MessageStudio\\AddRecordsRequest',
      'UpsertRecordsRequest' => 'Selligent\\MessageStudio\\UpsertRecordsRequest',
      'DeleteRecordRequest' => 'Selligent\\MessageStudio\\DeleteRecordRequest',
      'DeleteRecordResponse' => 'Selligent\\MessageStudio\\DeleteRecordResponse',
      'GetRecordsRequest' => 'Selligent\\MessageStudio\\GetRecordsRequest',
      'AddRecordsResponse' => 'Selligent\\MessageStudio\\AddRecordsResponse',
      'UpsertRecordsResponse' => 'Selligent\\MessageStudio\\UpsertRecordsResponse',
      'ImportFtpFileResponse' => 'Selligent\\MessageStudio\\ImportFtpFileResponse',
      'GetRecordsResponse' => 'Selligent\\MessageStudio\\GetRecordsResponse',
      'CopyRequest' => 'Selligent\\MessageStudio\\CopyRequest',
      'CopyResponse' => 'Selligent\\MessageStudio\\CopyResponse',
      'CreateRequest' => 'Selligent\\MessageStudio\\CreateRequest',
      'BatchCreateResponse' => 'Selligent\\MessageStudio\\BatchCreateResponse',
      'CreateResponse' => 'Selligent\\MessageStudio\\CreateResponse',
      'ExportRecordsRequest' => 'Selligent\\MessageStudio\\ExportRecordsRequest',
      'ExportRecordsResponse' => 'Selligent\\MessageStudio\\ExportRecordsResponse',
      'DeleteRequest' => 'Selligent\\MessageStudio\\DeleteRequest',
      'BatchDeleteResponse' => 'Selligent\\MessageStudio\\BatchDeleteResponse',
      'DeleteResponse' => 'Selligent\\MessageStudio\\DeleteResponse',
      'GetRequest' => 'Selligent\\MessageStudio\\GetRequest',
      'BatchGetResponse' => 'Selligent\\MessageStudio\\BatchGetResponse',
      'GetResponse' => 'Selligent\\MessageStudio\\GetResponse',
      'Response' => 'Selligent\\MessageStudio\\Response',
      'BatchResponse' => 'Selligent\\MessageStudio\\BatchResponse',
      'BatchUpdateResponse' => 'Selligent\\MessageStudio\\BatchUpdateResponse',
      'GetStatisticsRequest' => 'Selligent\\MessageStudio\\GetStatisticsRequest',
      'GetStatisticsResponse' => 'Selligent\\MessageStudio\\GetStatisticsResponse',
      'ImportContentRequest' => 'Selligent\\MessageStudio\\ImportContentRequest',
      'ImportContentResponse' => 'Selligent\\MessageStudio\\ImportContentResponse',
      'ListRequest' => 'Selligent\\MessageStudio\\ListRequest',
      'ListResponse' => 'Selligent\\MessageStudio\\ListResponse',
      'RemoveRecordsRequest' => 'Selligent\\MessageStudio\\RemoveRecordsRequest',
      'RemoveRecordsResponse' => 'Selligent\\MessageStudio\\RemoveRecordsResponse',
      'TestRequest' => 'Selligent\\MessageStudio\\TestRequest',
      'TestResponse' => 'Selligent\\MessageStudio\\TestResponse',
      'UpdateRequest' => 'Selligent\\MessageStudio\\UpdateRequest',
      'UpdateResponse' => 'Selligent\\MessageStudio\\UpdateResponse',
      'FaultDetail' => 'Selligent\\MessageStudio\\FaultDetail',
      'AuthorizationFaultDetail' => 'Selligent\\MessageStudio\\AuthorizationFaultDetail',
      'ConcurrentModificationFaultDetail' => 'Selligent\\MessageStudio\\ConcurrentModificationFaultDetail',
      'InvalidObjectFaultDetail' => 'Selligent\\MessageStudio\\InvalidObjectFaultDetail',
      'ObjectNotFoundFaultDetail' => 'Selligent\\MessageStudio\\ObjectNotFoundFaultDetail',
      'StaleObjectFaultDetail' => 'Selligent\\MessageStudio\\StaleObjectFaultDetail',
      'UnexpectedFaultDetail' => 'Selligent\\MessageStudio\\UnexpectedFaultDetail',
      'UnrecognizedObjectTypeFaultDetail' => 'Selligent\\MessageStudio\\UnrecognizedObjectTypeFaultDetail',
      'BadHandleFaultDetail' => 'Selligent\\MessageStudio\\BadHandleFaultDetail',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array('features' => 1), $options);

        if (is_null($wsdl)) {
            $options['location'] = '';
            $options['uri'] = '';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param AddRecordsRequest $addRecords
     * @return AddRecordsResponse
     */
    public function addRecords(AddRecordsRequest $addRecords)
    {
      return $this->__soapCall('addRecords', array($addRecords));
    }

    /**
     * @param GetProgramNodesRequest $getProgramNodes
     * @return GetProgramNodesResponse
     */
    public function getProgramNodes(GetProgramNodesRequest $getProgramNodes)
    {
      return $this->__soapCall('getProgramNodes', array($getProgramNodes));
    }

    /**
     * @param ArchiveRequest $archive
     * @return ArchiveResponse
     */
    public function archive(ArchiveRequest $archive)
    {
      return $this->__soapCall('archive', array($archive));
    }

    /**
     * @param CancelRequest $cancel
     * @return CancelResponse
     */
    public function cancel(CancelRequest $cancel)
    {
      return $this->__soapCall('cancel', array($cancel));
    }

    /**
     * @param CancelRefreshRecordsRequest $cancelRefreshRecords
     * @return CancelRefreshRecordsResponse
     */
    public function cancelRefreshRecords(CancelRefreshRecordsRequest $cancelRefreshRecords)
    {
      return $this->__soapCall('cancelRefreshRecords', array($cancelRefreshRecords));
    }

    /**
     * @param CloseRequest $close
     * @return CloseResponse
     */
    public function close(CloseRequest $close)
    {
      return $this->__soapCall('close', array($close));
    }

    /**
     * @param CopyRequest $copy
     * @return CopyResponse
     */
    public function copy(CopyRequest $copy)
    {
      return $this->__soapCall('copy', array($copy));
    }

    /**
     * @param CreateRequest $create
     * @return BatchCreateResponse
     */
    public function create(CreateRequest $create)
    {
      return $this->__soapCall('create', array($create));
    }

    /**
     * @param DedupeRecordsRequest $dedupeRecords
     * @return DedupeRecordsResponse
     */
    public function dedupeRecords(DedupeRecordsRequest $dedupeRecords)
    {
      return $this->__soapCall('dedupeRecords', array($dedupeRecords));
    }

    /**
     * @param DeleteRequest $delete
     * @return BatchDeleteResponse
     */
    public function delete(DeleteRequest $delete)
    {
      return $this->__soapCall('delete', array($delete));
    }

    /**
     * @param ExportRecordsRequest $exportRecords
     * @return ExportRecordsResponse
     */
    public function exportRecords(ExportRecordsRequest $exportRecords)
    {
      return $this->__soapCall('exportRecords', array($exportRecords));
    }

    /**
     * @param GetRequest $get
     * @return BatchGetResponse
     */
    public function get(GetRequest $get)
    {
      return $this->__soapCall('get', array($get));
    }

    /**
     * @param GetStatisticsRequest $getStatistics
     * @return GetStatisticsResponse
     */
    public function getStatistics(GetStatisticsRequest $getStatistics)
    {
      return $this->__soapCall('getStatistics', array($getStatistics));
    }

    /**
     * @param ImportContentRequest $importContent
     * @return ImportContentResponse
     */
    public function importContent(ImportContentRequest $importContent)
    {
      return $this->__soapCall('importContent', array($importContent));
    }

    /**
     * @param ImportMessagePartRequest $importMessagePart
     * @return ImportMessagePartResponse
     */
    public function importMessagePart(ImportMessagePartRequest $importMessagePart)
    {
      return $this->__soapCall('importMessagePart', array($importMessagePart));
    }

    /**
     * @param LaunchRequest $launch
     * @return LaunchResponse
     */
    public function launch(LaunchRequest $launch)
    {
      return $this->__soapCall('launch', array($launch));
    }

    /**
     * @param ListRequest $list
     * @return ListResponse
     */
    public function aList(ListRequest $list)
    {
      return $this->__soapCall('list', array($list));
    }

    /**
     * @param LoadRequest $load
     * @return LoadResponse
     */
    public function load(LoadRequest $load)
    {
      return $this->__soapCall('load', array($load));
    }

    /**
     * @param PauseRequest $pause
     * @return PauseResponse
     */
    public function pause(PauseRequest $pause)
    {
      return $this->__soapCall('pause', array($pause));
    }

    /**
     * @param ResumeRequest $resume
     * @return ResumeResponse
     */
    public function resume(ResumeRequest $resume)
    {
      return $this->__soapCall('resume', array($resume));
    }

    /**
     * @param ScheduleRequest $schedule
     * @return ScheduleResponse
     */
    public function schedule(ScheduleRequest $schedule)
    {
      return $this->__soapCall('schedule', array($schedule));
    }

    /**
     * @param GetTxnMailingHandleRequest $getTxnMailingHandle
     * @return GetTxnMailingHandleResponse
     */
    public function getTxnMailingHandle(GetTxnMailingHandleRequest $getTxnMailingHandle)
    {
      return $this->__soapCall('getTxnMailingHandle', array($getTxnMailingHandle));
    }

    /**
     * @param GetTxnEasInfoRequest $getTxnEasInfo
     * @return GetTxnEasInfoResponse
     */
    public function getTxnEasInfo(GetTxnEasInfoRequest $getTxnEasInfo)
    {
      return $this->__soapCall('getTxnEasInfo', array($getTxnEasInfo));
    }

    /**
     * @param TxnSendRequest $txnSend
     * @return TxnSendResponse
     */
    public function txnSend(TxnSendRequest $txnSend)
    {
      return $this->__soapCall('txnSend', array($txnSend));
    }

    /**
     * @param TestRequest $test
     * @return TestResponse
     */
    public function test(TestRequest $test)
    {
      return $this->__soapCall('test', array($test));
    }

    /**
     * @param UpdateRequest $update
     * @return BatchUpdateResponse
     */
    public function update(UpdateRequest $update)
    {
      return $this->__soapCall('update', array($update));
    }

    /**
     * @param DeleteRecordRequest $deleteRecord
     * @return DeleteRecordResponse
     */
    public function deleteRecord(DeleteRecordRequest $deleteRecord)
    {
      return $this->__soapCall('deleteRecord', array($deleteRecord));
    }

    /**
     * @param UpsertRecordsRequest $upsertRecords
     * @return UpsertRecordsResponse
     */
    public function upsertRecord(UpsertRecordsRequest $upsertRecords)
    {
      return $this->__soapCall('upsertRecord', array($upsertRecords));
    }

    /**
     * @param ImportFtpFileRequest $importFtpFile
     * @return ImportFtpFileResponse
     */
    public function importFtpFile(ImportFtpFileRequest $importFtpFile)
    {
      return $this->__soapCall('importFtpFile', array($importFtpFile));
    }

    /**
     * @param GetRecordsRequest $getRecords
     * @return GetRecordsResponse
     */
    public function getRecords(GetRecordsRequest $getRecords)
    {
      return $this->__soapCall('getRecords', array($getRecords));
    }

    /**
     * @param RefreshRecordsRequest $refreshRecords
     * @return RefreshRecordsResponse
     */
    public function refreshRecords(RefreshRecordsRequest $refreshRecords)
    {
      return $this->__soapCall('refreshRecords', array($refreshRecords));
    }

    /**
     * @param RemoveRecordsRequest $removeRecords
     * @return RemoveRecordsResponse
     */
    public function removeRecords(RemoveRecordsRequest $removeRecords)
    {
      return $this->__soapCall('removeRecords', array($removeRecords));
    }

    /**
     * @param ValidateXslRequest $validateXsl
     * @return ValidateXslResponse
     */
    public function validateXsl(ValidateXslRequest $validateXsl)
    {
      return $this->__soapCall('validateXsl', array($validateXsl));
    }

    /**
     * @param FetchLinksRequest $fetchLinks
     * @return FetchLinksResponse
     */
    public function fetchLinks(FetchLinksRequest $fetchLinks)
    {
      return $this->__soapCall('fetchLinks', array($fetchLinks));
    }

    /**
     * @param PersonalizeRequest $personalize
     * @return PersonalizeResponse
     */
    public function personalize(PersonalizeRequest $personalize)
    {
      return $this->__soapCall('personalize', array($personalize));
    }

    /**
     * @param GetSingleSignOnURLRequest $getSingleSignOnURL
     * @return GetSingleSignOnURLResponse
     */
    public function getSingleSignOnURL(GetSingleSignOnURLRequest $getSingleSignOnURL)
    {
      return $this->__soapCall('getSingleSignOnURL', array($getSingleSignOnURL));
    }

    /**
     * @param GetAllEasByMailingIdRequest $GetAllEasByMailingId
     * @return GetAllEasListByMailingIdResponse
     */
    public function GetAllEasByMailingId(GetAllEasByMailingIdRequest $GetAllEasByMailingId)
    {
      return $this->__soapCall('GetAllEasByMailingId', array($GetAllEasByMailingId));
    }

    /**
     * @param StartRecurringImportRequest $startImport
     * @return StartRecurringImportResponse
     */
    public function startImport(StartRecurringImportRequest $startImport)
    {
      return $this->__soapCall('startImport', array($startImport));
    }

    /**
     * @param GetRecurringImportStatusRequest $getImportStatus
     * @return GetRecurringImportStatusResponse
     */
    public function getImportStatus(GetRecurringImportStatusRequest $getImportStatus)
    {
      return $this->__soapCall('getImportStatus', array($getImportStatus));
    }

    /**
     * @param FindRecurringImportRequest $findImport
     * @return FindRecurringImportResponse
     */
    public function findImport(FindRecurringImportRequest $findImport)
    {
      return $this->__soapCall('findImport', array($findImport));
    }

    /**
     * @param GetRecurringImportRequest $getImportDetails
     * @return GetRecurringImportResponse
     */
    public function getImportDetails(GetRecurringImportRequest $getImportDetails)
    {
      return $this->__soapCall('getImportDetails', array($getImportDetails));
    }

    /**
     * @param GlobalUndeliverableRequest $getGlobalUndeliverable
     * @return GlobalUndeliverableResponse
     */
    public function getGlobalUndeliverable(GlobalUndeliverableRequest $getGlobalUndeliverable)
    {
      return $this->__soapCall('getGlobalUndeliverable', array($getGlobalUndeliverable));
    }

    /**
     * @param ReactivateGlobalUndeliverableRequest $reactivateGlobalUndeliverable
     * @return ReactivateGlobalUndeliverableResponse
     */
    public function reactivateGlobalUndeliverable(ReactivateGlobalUndeliverableRequest $reactivateGlobalUndeliverable)
    {
      return $this->__soapCall('reactivateGlobalUndeliverable', array($reactivateGlobalUndeliverable));
    }

    /**
     * @param AddGlobalUndeliverableRequest $addGlobalUndeliverable
     * @return AddGlobalUndeliverableResponse
     */
    public function addGlobalUndeliverable(AddGlobalUndeliverableRequest $addGlobalUndeliverable)
    {
      return $this->__soapCall('addGlobalUndeliverable', array($addGlobalUndeliverable));
    }

}
