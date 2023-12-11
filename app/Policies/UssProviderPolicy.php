<?php

namespace App\Policies;

use App\Models\UssProvider;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UssProviderPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any USS provider.
   */
  public function viewAny(User $user): bool
  {
    return $user->hasPermissionTo('list uss-providers');
  }

  /**
   * Determine whether the user can view the USS provider.
   */
  public function view(User $user, UssProvider $model): bool
  {
    return $user->hasPermissionTo('view uss-providers');
  }

  /**
   * Determine whether the user can create USS providers.
   */
  public function create(User $user): bool
  {
    return $user->hasPermissionTo('create uss-providers');
  }

  /**
   * Determine whether the user can update the USS provider.
   */
  public function update(User $user, UssProvider $model): bool
  {
    return $user->hasPermissionTo('update uss-providers');
  }

  /**
   * Determine whether the user can delete the USS provider.
   */
  public function delete(User $user, UssProvider $model): bool
  {
    return $user->hasPermissionTo('delete uss-providers');
  }

  /**
   * Determine whether the user can delete multiple instances of the USS provider.
   */
  public function deleteAny(User $user): bool
  {
    return $user->hasPermissionTo('delete uss-providers');
  }

  /**
   * Determine whether the user can restore the USS provider.
   */
  public function restore(User $user, UssProvider $model): bool
  {
    return false;
  }

  /**
   * Determine whether the user can permanently delete the USS provider.
   */
  public function forceDelete(User $user, UssProvider $model): bool
  {
    return false;
  }
}
