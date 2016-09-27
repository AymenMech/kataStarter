  <?php

  class KataExempleTest extends PHPUnit_Framework_TestCase
  {
      public function testAction()
      {
          $this->assertEquals("0/0 - 0/0 - 30/30", \wcs\KataExemple::action("1212"));
          $this->assertEquals("0/0 - 0/0 - Advantage/40", \wcs\KataExemple::action("1121221"));
          $this->assertEquals("0/0 - 0/0 - 40/40", \wcs\KataExemple::action("121212121212"));
          $this->assertEquals("0/0 - 1/1 - 0/0", \wcs\KataExemple::action("22221111"));
          $this->assertEquals("0/0 - 0/0 - Advantage/40", \wcs\KataExemple::action("1212121"));
          $this->assertEquals("0/0 - 2/3 - 15/15", \wcs\KataExemple::action("1122111122121211222222222212221"));
          $this->assertEquals("0/0 - 0/0 - 15/0", \wcs\KataExemple::action("1"));
          $this->assertEquals("0/0 - 0/0 - 0/15", \wcs\KataExemple::action("2"));
          $this->assertEquals("0/0 - 0/0 - 40/30", \wcs\KataExemple::action("21211"));
          $this->assertEquals("0/0 - 0/0 - 15/40", \wcs\KataExemple::action("2122"));
          $this->assertEquals("0/0 - 0/1 - 0/0", \wcs\KataExemple::action("21222"));
          $this->assertEquals("0/0 - 0/1 - 40/15", \wcs\KataExemple::action("212221121"));
          $this->assertEquals("0/0 - 3/1 - 0/15", \wcs\KataExemple::action("21222112112211112121112"));
          $this->assertEquals("1/0 - 0/0 - 0/0", \wcs\KataExemple::action("111111111111111111111111"));
      }
  }
