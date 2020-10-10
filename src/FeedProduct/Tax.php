<?php

namespace Marshmallow\Feeds\GoogleShopping\FeedProduct;

use Marshmallow\Feeds\GoogleShopping\HasProperties;

class Tax
{
    use HasProperties;

    public function setCountry($countryCode)
    {
        $this->setAttribute('country', $countryCode, false);

        return $this;
    }

    public function setRate($rate)
    {
        $this->setAttribute('rate', $rate, false);

        return $this;
    }
}
