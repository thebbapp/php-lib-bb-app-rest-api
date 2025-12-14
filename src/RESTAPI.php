<?php

declare(strict_types=1);

namespace BbApp\RestAPI;

/**
 * Base class for REST API implementations.
 */
abstract class RESTAPI
{
	/**
	 * Initializes REST API.
	 */
	abstract public function init(): void;

	/**
	 * Registers REST API hooks and filters.
	 */
	abstract public function register(): void;
}
