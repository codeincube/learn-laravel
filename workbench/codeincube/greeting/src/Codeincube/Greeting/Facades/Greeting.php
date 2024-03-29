<?php  namespace Codeincube\Greeting\Facades;

use Illuminate\Support\Facades\Facade;

class Greeting extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'greeting'; }

}
