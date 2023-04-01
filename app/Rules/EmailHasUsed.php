<?php

namespace App\Rules;

use App\Models\Member;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailHasUsed implements ValidationRule
{
  /**
   * Run the validation rule.
   *
   * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
   */
  public function validate(string $attribute, mixed $value, Closure $fail): void
  {
    // check if email has used 
    $has_used = Member::where('email', $value)->first();
    if ($has_used != null) {
      $fail("email $value sudah digunakan");
    }
  }
}
