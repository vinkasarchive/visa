<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EmailToken extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id', 'email', 'token',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'email_tokens';

  /**
   * Get the user record associated with the email token.
   */
  public function user()
  {
    return $this->hasOne('App\User');
  }
}
