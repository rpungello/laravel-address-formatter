<?php

use CommerceGuys\Addressing\Address;
use Rpungello\LaravelAddressing\Facades\AddressFormatter;

it('can format addresses using default format', function () {
    $address = new Address(
        countryCode: 'US',
        administrativeArea: 'TX',
        locality: 'Chillicothe',
        postalCode: 79225,
        addressLine1: '491 Lunetta Street',
        addressLine2: 'Suite 100',
        organization: 'Ideal Garden Management',
        givenName: 'Marie',
        familyName: 'Crews',
    );

    $formatted = AddressFormatter::formatDefault($address);

    expect($formatted)->toBe("Marie Crews\nIdeal Garden Management\n491 Lunetta Street\nSuite 100\nChillicothe, TX 79225\nUnited States");
});

it('can format addresses using postal format', function () {
    $address = new Address(
        countryCode: 'US',
        administrativeArea: 'TX',
        locality: 'Chillicothe',
        postalCode: 79225,
        addressLine1: '491 Lunetta Street',
        addressLine2: 'Suite 100',
        organization: 'Ideal Garden Management',
        givenName: 'Marie',
        familyName: 'Crews',
    );

    $formatted = AddressFormatter::formatPostal($address);

    expect($formatted)->toBe("Marie Crews\nIdeal Garden Management\n491 Lunetta Street\nSuite 100\nCHILLICOTHE, TX 79225");
});

it('can format canadian addresses using postal format', function () {
    $address = new Address(
        countryCode: 'CA',
        administrativeArea: 'QC',
        locality: 'Shawinigan',
        postalCode: 'G9N 3B6',
        addressLine1: '3140 boulevard des Laurentides',
        organization: 'Practi-Plan Mapping',
        givenName: 'Jessica',
        familyName: 'Graham',
    );

    $formatted = AddressFormatter::formatPostal($address);

    expect($formatted)->toBe("JESSICA GRAHAM\nPRACTI-PLAN MAPPING\n3140 BOULEVARD DES LAURENTIDES\nSHAWINIGAN QC G9N 3B6\nCANADA");
});
