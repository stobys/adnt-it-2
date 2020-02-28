<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // -- The attributes that are mass assignable.
    protected $fillable = [
        'username', 'password', 'email', 'family_name', 'given_name',
    ];

    // -- user exposed observable events
    // protected $observables = ['hashing', 'login', 'logout'];

    // -- The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'last_login_at', 'email_verified_at', 'password_changed_at'];

    // -- The attributes that should be cast to native types.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // -- error message bag
    protected $errors;

    // -- validator instance
    protected $validator;

    // -- custom validation messages
    protected $messages = [];

    // -- create a new Eloquent model instance.
    // public function __construct(array $attributes = [], Validator $validator = null)
    // {
    //     parent::__construct($attributes);

    //     $this -> validator = $validator ?: app()->make('validator');

    //     // -- jezeli jest, uruchamiamy metode inicjujaca
    //     if (method_exists($this, 'init')) {
    //         $this -> init();
    //     }
    // }

    // -- boot model
    // protected static function boot()
    // {
    //     parent::boot();

    //     // -- handle creating event
    //     static::creating(function ($model) {
    //         if (method_exists($model, 'onCreating')) {
    //             $model->onCreating();
    //         }
    //     });

    //     // -- handle created event
    //     static::created(function ($model) {
    //         if (method_exists($model, 'onCreated')) {
    //             $model->onCreated();
    //         }
    //     });

    //     static::saving(function ($model) {
    //         if (method_exists($model, 'onSaving')) {
    //             $model->onSaving();

    //             return $model->validate();
    //         }
    //     });

    //     static::saved(function ($model) {
    //         if (method_exists($model, 'onSaved')) {
    //             $model->onSaved();
    //         }
    //     });

    //     static::updating(function ($model) {
    //         if (method_exists($model, 'onUpdating')) {
    //             $model->onUpdating();
    //         }
    //     });

    //     static::updated(function ($model) {
    //         if (method_exists($model, 'onUpdated')) {
    //             $model->onUpdated();
    //         }
    //     });

    //     static::deleting(function ($model) {
    //         if (method_exists($model, 'onDeleting')) {
    //             $model->onDeleting();
    //         }
    //     });

    //     static::deleted(function ($model) {
    //         if (method_exists($model, 'onDeleted')) {
    //             $model->onDeleted();
    //         }
    //     });

    //     static::restoring(function ($model) {
    //         if (method_exists($model, 'onRestoring')) {
    //             $model->onRestoring();
    //         }
    //     });

    //     static::restored(function ($model) {
    //         if (method_exists($model, 'onRestored')) {
    //             $model->onRestored();
    //         }
    //     });
    // }

    // public static function restoring($callback)
    // {
    //     static::registerModelEvent('restoring', $callback);
    // }

    // public static function restored($callback)
    // {
    //     static::registerModelEvent('restored', $callback);
    // }

    // protected function rules()
    // {
    //     return [];
    // }

    // // -- validates current attributes against rules
    // public function validate()
    // {
    //     $v = $this->validator->make($this->attributes, $this->rules(), $this->messages);

    //     if ($v->passes()) {
    //         return true;
    //     }

    //     $this->setErrors($v->messages());

    //     return false;
    // }

    // // -- set error message bag
    // protected function setErrors($errors)
    // {
    //     $this->errors = $errors;
    // }

    // // -- retrieve error message bag
    // public function getErrors()
    // {
    //     return $this->errors;
    // }

    // // -- inverse of wasSaved
    // public function hasErrors()
    // {
    //     return ! empty($this->errors);
    // }

    // public function fireEvent($event)
    // {
    //     $this -> fireModelEvent($event);
    // }

    /**
     * Hash password by default, if empty do nothing.
     *
     * @param  string  $value
     * @return void
     */
    // public function setPasswordAttribute($value)
    // {
    //     if (! empty($value)) {
    //         $this->attributes['password'] = Hash::make($value);

    //         $this -> fireModelEvent('hashing');
    //     }
    // }

    // public function setPassword($password)
    // {
    //     $this -> password = $password;
    //     $this -> password_changed_at = carbon();

    //     if ($this -> save()) {
    //         // -- fire UserPasswordChanged event
    //         event(new UserPasswordChanged($this, auth()->user()));
    //     }
    // }

    // public function scopeFilter($query)
    // {
    //     session()->forget('usersFiltered');

    //     if (request()->isMethod('POST')) {
    //         // -- check "username"
    //         if (request()->has('username') && trim(request()->get('username')) !== '') {
    //             session()->put('usersUsername', request()->get('username'));
    //         } else {
    //             session()->forget('usersUsername');
    //         }

    //         // -- check "*_name"
    //         if (request()->has('name') && trim(request()->get('name')) !== '') {
    //             session()->put('usersName', request()->get('name'));
    //         } else {
    //             session()->forget('usersName');
    //         }

    //         // -- check "email"
    //         if (request()->has('email') && trim(request()->get('email')) !== '') {
    //             session()->put('usersEmail', request()->get('email'));
    //         } else {
    //             session()->forget('usersEmail');
    //         }
    //     }


    //     // -- collection filtering
    //     if (session()->has('usersUsername')) {
    //         $query -> where('username', 'LIKE', '%'. session()->get('usersUsername') .'%');
    //         session()->put('usersFiltered', true);
    //     }

    //     if (session()->has('usersName')) {
    //         $query -> where(function ($q) {
    //             $q
    //                 -> where('given_name', 'LIKE', '%'. session()->get('usersName') .'%')
    //                 -> orWhere('family_name', 'LIKE', '%'. session()->get('usersName') .'%');
    //         });

    //         session()->put('usersFiltered', true);
    //     }

    //     if (session()->has('usersEmail')) {
    //         $query -> where('email', 'LIKE', '%'. session()->get('usersEmail') .'%');
    //         session()->put('usersFiltered', true);
    //     }

    //     return $query;
    // }

    public function deletable($user_id = null)
    {
        // return auth() -> check() && ! $this -> trashed() && user($user_id) -> hasPermissionTo('users-delete');
        return auth() -> check() && ! $this -> trashed();
    }

    public function restorable($user_id = null)
    {
        // return auth() -> check() && $this -> trashed() && user($user_id) -> hasPermissionTo('users-restore');
        return auth() -> check() && $this -> trashed();
    }

    public function editable($user_id = null)
    {
        // return auth() -> check() && $this -> is_human_account && user($user_id) -> hasPermissionTo('users-edit');
        return auth() -> check();
    }

    public function viewable($user_id = null)
    {
        // return auth() -> check() && user($user_id) -> hasPermissionTo('users-show');
        return auth() -> check();
    }
}
