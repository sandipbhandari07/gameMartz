<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/account_budget_proposal_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class AccountBudgetProposalStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v8/enums/account_budget_proposal_status.protogoogle.ads.googleads.v8.enums"�
AccountBudgetProposalStatusEnum"�
AccountBudgetProposalStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED_HELD
APPROVED
	CANCELLED
REJECTEDB�
!com.google.ads.googleads.v8.enumsB AccountBudgetProposalStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

