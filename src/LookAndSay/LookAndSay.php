<?php

namespace LookAndSay;

use Exception;

class LookAndSay
{
  /**
   * @param string $input
   * @param int    $iteration
   *
   * @return int
   * @throws Exception
   */
  public function run($input, $iteration = 40)
  {
    $lookString = "";
    $lookCount  = 0;
    $sayString  = "";

    if (!is_numeric($input)) {
      throw new Exception("Please enter only numeric values");
    }

    if ($iteration-- > 0) {
      for ($i = 0; $i < strlen($input); $i++) {
        if (empty($lookString)) {
          $lookString = $input[$i];
          $lookCount++;
          continue;
        }

        if ($input[$i] === $lookString) {
          $lookCount++;
        } else {
          $sayString .= $lookCount . $lookString;
          $lookString = $input[$i];
          $lookCount  = 1;
        }
      }

      // Finish remaining
      $sayString .= $lookCount . $lookString;

      return $this->run($sayString, $iteration);
    }

    return $input;
  }
}