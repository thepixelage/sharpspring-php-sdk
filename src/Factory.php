<?php

namespace thepixelage\SharpSpring;


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