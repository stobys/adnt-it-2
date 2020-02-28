<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


use Validator;

class Model extends Eloquent
{

    // -- the database table used by the model.
    protected $table = 'generic';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // -- the attributes that are not mass assignable.
    // protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    // -- error message bag
    protected $errors;

    // -- validator instance
    protected $validator;

    // -- custom validation messages
    protected $messages = [];

    // -- create a new Eloquent model instance.
    public function __construct(array $attributes = [], Validator $validator = null)
    {
        parent::__construct($attributes);

        $this -> validator = $validator ?: app()->make('validator');
    }

    // -- return users login field name username/email or so
    public function username()
    {
        return 'username';
    }

    // -- boot model
    protected static function boot()
    {
        parent::boot();

        // -- handle retrieved event
        static::retrieved(function ($model) {
            // -- if exists call init method
            // if (method_exists($model, 'init')) {
            //     $this -> init();
            // }

            if (method_exists($model, 'onRetrieved')) {
                $model -> onRetrieved();
            }
        });

        // -- handle creating event
        static::creating(function ($model) {
            if (method_exists($model, 'onCreating')) {
                $model->onCreating();
            }
        });

        // -- handle created event
        static::created(function ($model) {
            if (method_exists($model, 'onCreated')) {
                $model->onCreated();
            }
        });

        static::saving(function ($model) {
            if (method_exists($model, 'onSaving')) {
                $model->onSaving();

                return $model->validate();
            }
        });

        static::saved(function ($model) {
            if (method_exists($model, 'onSaved')) {
                $model->onSaved();
            }
        });

        static::updating(function ($model) {
            if (method_exists($model, 'onUpdating')) {
                $model->onUpdating();
            }
        });

        static::updated(function ($model) {
            if (method_exists($model, 'onUpdated')) {
                $model->onUpdated();
            }
        });

        static::deleting(function ($model) {
            if (method_exists($model, 'onDeleting')) {
                $model->onDeleting();
            }
        });

        static::deleted(function ($model) {
            if (method_exists($model, 'onDeleted')) {
                $model->onDeleted();
            }
        });

        static::restoring(function ($model) {
            if (method_exists($model, 'onRestoring')) {
                $model->onRestoring();
            }
        });

        static::restored(function ($model) {
            if (method_exists($model, 'onRestored')) {
                $model->onRestored();
            }
        });
    }

    // public static function restoring($callback)
    // {
    //     static::registerModelEvent('restoring', $callback);
    // }

    // public static function restored($callback)
    // {
    //     static::registerModelEvent('restored', $callback);
    // }

    protected function rules()
    {
        return [];
    }

    // -- validates current attributes against rules
    public function validate()
    {
        $v = $this->validator->make($this->attributes, $this->rules(), $this->messages);

        if ($v->passes()) {
            return true;
        }

        $this->setErrors($v->messages());

        return false;
    }

    // -- set error message bag
    protected function setErrors($errors)
    {
        $this->errors = $errors;
    }

    // -- retrieve error message bag
    public function getErrors()
    {
        return $this->errors;
    }

    // -- inverse of wasSaved
    public function hasErrors()
    {
        return ! empty($this->errors);
    }

    public function scopeFilter($query)
    {
        return $query;
    }

    public function fireEvent($event)
    {
        $this -> fireModelEvent($event);
    }

    public function deletable($user_id = null)
    {
        return false;
    }

    public function restorable($user_id = null)
    {
        return false;
    }

    public function editable($user_id = null)
    {
        return false;
    }

    public function viewable($user_id = null)
    {
        return false;
    }
}
