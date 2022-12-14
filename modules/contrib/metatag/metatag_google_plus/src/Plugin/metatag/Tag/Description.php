<?php

namespace Drupal\metatag_google_plus\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaItempropBase;

/**
 * The GooglePlus "Description" meta tag.
 *
 * @MetatagTag(
 *   id = "google_plus_description",
 *   label = @Translation("Description"),
 *   description = @Translation("Content description less than 200 characters."),
 *   name = "description",
 *   group = "google_plus",
 *   weight = 2,
 *   type = "label",
 *   secure = FALSE,
 *   multiple = FALSE,
 *   trimmable = TRUE
 * )
 *
 * @deprecated in metatag:8.x-1.22 and is removed from metatag:2.0.0. No replacement is provided.
 *
 * @see https://www.drupal.org/project/metatag/issues/3065441
 */
class Description extends MetaItempropBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
