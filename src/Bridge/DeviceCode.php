<?php

namespace Laravel\Passport\Bridge;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\DeviceCodeTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
use League\OAuth2\Server\Entities\DeviceCodeEntityInterface;

class DeviceCode implements DeviceCodeEntityInterface
{
    use DeviceCodeTrait, EntityTrait, TokenEntityTrait;
}