<?php

namespace TokenChef\IcoTemplate\Models\Validatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;

/**
 * TokenChef\IcoTemplate\Models\Validatable\ValidModel
 *
 * @mixin \Illuminate\Database\Eloquent\Model
 */
class ValidModel extends Model
{

    protected $rules = [];
    /**
     * @var MessageBag
     */
    protected $errors;
    protected $messages = [];

    public function validate()
    {
        $v = Validator::make($this->attributes, $this->rules, $this->messages);
        if ($v->fails()) {
            $this->errors = $v->errors();
            return false;
        }
        return true;
    }

    /**
     * @return MessageBag
     */
    public function errors()
    {
        return $this->errors;
    }

    /**
     * Update rule
     *
     * @param $key string key
     * @param $value string
     */
    public function updateRule($key, $value)
    {
        $this->rules[$key] = $value;
    }

    /**
     * Update rule
     *
     * @param $key string key
     * @param $value string
     */
    public function fill_data($attributes, $rules = null, $messages = null)
    {
        $this->attributes = $attributes;
        if ($rules) $this->rules = $rules;
        if ($messages) $this->messages = $messages;
    }

}