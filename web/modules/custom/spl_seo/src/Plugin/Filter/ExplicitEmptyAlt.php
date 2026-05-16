<?php

namespace Drupal\spl_seo\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Ensures every <img> has an explicit alt attribute.
 *
 * Drupal core's HTML serializer (filter_htmlcorrector / filter_image_lazy_load)
 * minimizes alt="" to a bare valueless `alt`. That is functionally identical
 * for assistive technology, but strict validators/crawlers misreport it as
 * "missing alt". This filter runs last and:
 *  - rewrites a bare valueless `alt` to alt="";
 *  - adds alt="" to any <img> with no alt attribute at all (project rule:
 *    never leave alt absent; decorative is the safe default).
 * Images that already have a non-empty alt are left untouched.
 *
 * @Filter(
 *   id = "spl_explicit_empty_alt",
 *   title = @Translation("Render empty or absent image alt explicitly"),
 *   description = @Translation("Decorative images output an explicit empty alt instead of a bare alt token so validators and crawlers do not misreport them."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE,
 *   weight = 100
 * )
 */
class ExplicitEmptyAlt extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $text = preg_replace_callback('/<img\b[^>]*>/i', static function (array $m): string {
      $tag = $m[0];
      // Leave images that already have any alt="..." (incl. descriptive).
      if (preg_match('/\salt\s*=/i', $tag)) {
        return $tag;
      }
      // Bare valueless alt (e.g. `... alt loading="lazy">`) -> alt="".
      $fixed = preg_replace('/(<img\b[^>]*?)\salt(?=[\s\/>])/i', '$1 alt=""', $tag, 1);
      if ($fixed !== NULL && $fixed !== $tag) {
        return $fixed;
      }
      // No alt attribute at all -> add an empty one (decorative default).
      return preg_replace('/<img\b/i', '<img alt=""', $tag, 1);
    }, $text);

    return new FilterProcessResult($text);
  }

}
