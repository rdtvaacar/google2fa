<?php

namespace Rdtvaacar\Google2FA\Exceptions;

use Exception;
use Rdtvaacar\Google2FA\Exceptions\Contracts\Google2FA as Google2FAExceptionContract;
use Rdtvaacar\Google2FA\Exceptions\Contracts\InvalidAlgorithm as InvalidAlgorithmExceptionContract;

class InvalidAlgorithmException extends Google2FAException implements Google2FAExceptionContract, InvalidAlgorithmExceptionContract
{
    protected $message = 'Invalid HMAC algorithm.';
}
