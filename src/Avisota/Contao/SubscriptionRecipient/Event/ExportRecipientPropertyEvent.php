<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-subscription-recipient
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Avisota\Contao\SubscriptionRecipient\Event;

use Avisota\Contao\Entity\Recipient;
use Symfony\Component\EventDispatcher\Event;

class ExportRecipientPropertyEvent extends RecipientAwareEvent
{
	/**
	 * @var string
	 */
	protected $propertyName;

	/**
	 * @var mixed
	 */
	protected $propertyValue;

	/**
	 * @var string
	 */
	protected $string;

	/**
	 * @param Recipient $recipient
	 * @param string    $propertyName
	 * @param mixed     $propertyValue
	 */
	function __construct(Recipient $recipient, $propertyName, $propertyValue = null, $string = null)
	{
		parent::__construct($recipient);
		$this->propertyName  = (string) $propertyName;
		$this->propertyValue = $propertyValue;
		$this->string        = $string === null ? null : (string) $string;
	}

	/**
	 * @return string
	 */
	public function getPropertyName()
	{
		return $this->propertyName;
	}

	/**
	 * @param mixed $propertyValue
	 */
	public function setPropertyValue($propertyValue)
	{
		$this->propertyValue = $propertyValue;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPropertyValue()
	{
		return $this->propertyValue;
	}

	/**
	 * @param string $string
	 */
	public function setString($string)
	{
		$this->string = $string === null ? null : (string) $string;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
}
