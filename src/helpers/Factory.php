<?php

namespace thepixelage\SharpSpring\helpers;

use thepixelage\SharpSpring\models\Account;
use thepixelage\SharpSpring\models\Address;
use thepixelage\SharpSpring\models\Campaign;
use thepixelage\SharpSpring\models\Event;
use thepixelage\SharpSpring\models\Field;
use thepixelage\SharpSpring\models\Lead;

class Factory
{
    public static function createAccount($props)
    {
        $account = new Account();
        $account->setId($props->id);
        $account->setOwnerId($props->ownerID);
        $account->setAccountName($props->accountName);
        $account->setIndustry($props->industry);
        $account->setPhone($props->phone);
        $account->setAnnualRevenue($props->annualRevenue);
        $account->setNumberOfEmployees($props->numberOfEmployees);
        $account->setWebsite($props->website);
        $account->setYearStarted($props->yearStarted);
        $account->setFax($props->fax);
        $account->setBillingAddress(new Address(
            $props->billingCountry,
            $props->billingCity,
            $props->billingState,
            $props->billingStreetAddress,
            $props->billingPostalCode
        ));
        $account->setShippingAddress(new Address(
            $props->shippingCountry,
            $props->shippingCity,
            $props->shippingState,
            $props->shippingStreetAddress,
            $props->shippingPostalCode
        ));

        return $account;
    }

    public static function createCampaign($props)
    {
        $campaign = new Campaign();
        $campaign->setId($props->id);
        $campaign->setName($props->campaignName);
        $campaign->setType($props->campaignType);
        $campaign->setAlias($props->campaignAlias);
        $campaign->setOrigin($props->campaignOrigin);
        $campaign->setQuantity($props->qty);
        $campaign->setPrice($props->price);
        $campaign->setGoal($props->goal);
        $campaign->setOtherCosts($props->otherCosts);
        $campaign->setStartDate($props->startDate);
        $campaign->setEndDate($props->endDate);
        $campaign->setIsActive($props->isActive);

        return $campaign;
    }

    public static function createEvent($props)
    {
        $event = new Event();
        $event->setid($props->id);
        $event->setleadID($props->leadID);
        $event->seteventName($props->eventName);
        $event->setwhatID($props->whatID);
        $event->setwhatType($props->whatType);
        $event->seteventData($props->eventData);
        $event->seteventSource($props->eventSource);
        $event->setcreateTimestamp($props->createTimestamp);

        return $event;
    }

    public static function createField($props)
    {
        $field = new Field();
        $field->setId($props->id);
        $field->setRelationship($props->relationship);
        $field->setSystemName($props->systemName);
        $field->setLabel($props->label);
        $field->setSource($props->source);
        $field->setDataType($props->dataType);
        $field->setDataLength($props->dataLength);
        $field->setIsRequired($props->isRequired);
        $field->setIsCustom($props->isCustom);
        $field->setIsActive($props->isActive);
        $field->setIsAvailableInContactManager($props->isAvailableInContactManager);
        $field->setIsEditableInContactManager($props->isEditableInContactManager);
        $field->setIsAvailableInForms($props->isAvailableInForms);

        return $field;
    }

    public static function createLead($props)
    {
        $lead = new Lead();
        $lead->setId($props->id);
        $lead->setAccountId($props->accountID);
        $lead->setOwnerId($props->ownerID);
        $lead->setCompanyName($props->companyName);
        $lead->setTitle($props->title);
        $lead->setFirstName($props->firstName);
        $lead->setLastName($props->lastName);

        return $lead;
    }
}