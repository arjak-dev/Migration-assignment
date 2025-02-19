<?php

declare(strict_types=1);

namespace Drupal\city;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a city entity type.
 */
interface CityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
