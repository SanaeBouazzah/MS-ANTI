<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Profile;
use App\Models\publication;
use Illuminate\Auth\GenericUser;
use Illuminate\Auth\Access\Response;

class PublicationPolicy
{
    public function viewAny(User $user): bool
    {
        //
    }
    public function view(User $user, publication $publication): bool
    {
        //
    }
    public function create(User $user): bool
    {
      //
    }
    public function update(Profile  $user, publication $publication): bool
    {
      return $user->id === $publication->profile_id;
    }
    public function delete(User $user, publication $publication)
    {
        //
    }
    public function restore(User $user, publication $publication): bool
    {
        //
    }
    public function forceDelete(User $user, publication $publication): bool
    {
        //
    }
}
