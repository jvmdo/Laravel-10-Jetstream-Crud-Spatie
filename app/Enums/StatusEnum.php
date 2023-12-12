<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self EM_ANALISE()
 * @method static self APROVADO()
 * @method static self REPROVADO()
 */
final class StatusEnum extends Enum
{
  protected $casts = [
    'status' => StatusEnum::class,
  ];

  public function getKey(): string
  {
    return $this->value;
  }
}
