<?php

namespace Rpungello\LaravelAddressing;

use CommerceGuys\Addressing\AddressFormat\AddressFormatRepository;
use CommerceGuys\Addressing\AddressFormat\AddressFormatRepositoryInterface;
use CommerceGuys\Addressing\AddressInterface;
use CommerceGuys\Addressing\Country\CountryRepository;
use CommerceGuys\Addressing\Country\CountryRepositoryInterface;
use CommerceGuys\Addressing\Formatter\DefaultFormatter;
use CommerceGuys\Addressing\Formatter\FormatterInterface;
use CommerceGuys\Addressing\Formatter\PostalLabelFormatter;
use CommerceGuys\Addressing\Subdivision\SubdivisionRepository;
use CommerceGuys\Addressing\Subdivision\SubdivisionRepositoryInterface;

class AddressFormatter
{
    protected AddressFormatRepositoryInterface $formatRepository;

    protected CountryRepositoryInterface $countryRepository;

    protected SubdivisionRepositoryInterface $subdivisionRepository;

    protected FormatterInterface $defaultFormatter;

    protected FormatterInterface $postalFormatter;

    public function __construct()
    {
        $this->formatRepository = new AddressFormatRepository();
        $this->countryRepository = new CountryRepository();
        $this->subdivisionRepository = new SubdivisionRepository();

        $this->defaultFormatter = new DefaultFormatter($this->formatRepository, $this->countryRepository, $this->subdivisionRepository, [
            'html' => false,
        ]);
        $this->postalFormatter = new PostalLabelFormatter($this->formatRepository, $this->countryRepository, $this->subdivisionRepository, [
            'html' => false,
            'origin_country' => config('address-formatter.default_origin_country'),
        ]);
    }

    public function formatDefault(AddressInterface $address, array $options = []): string
    {
        return $this->format($address, $this->defaultFormatter, $options);
    }

    public function format(AddressInterface $address, FormatterInterface $formatter, array $options = []): string
    {
        return $formatter->format($address, $options);
    }

    public function formatPostal(AddressInterface $address, array $options = []): string
    {
        return $this->format($address, $this->postalFormatter, $options);
    }
}
