<?php

namespace Drupal\http_kernel_test\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * A test controller.
 */
class TestController {

  /**
   * Return an empty response.
   */
  public function get() {
    return new Response();
  }

}
