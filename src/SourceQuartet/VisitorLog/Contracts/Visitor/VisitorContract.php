<?php namespace SourceQuartet\VisitorLog\Contracts\Visitor;

use Carbon\Carbon;
use SourceQuartet\VisitorLog\Useragent;
use SourceQuartet\VisitorLog\Visitor;

interface VisitorContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

    /**
     * @param array $attributes
     * @return static
     */
    public function updateOrCreate(array $attributes);

    /**
     * @param null $time
     * @param Carbon $carbon
     * @return mixed
     */
    public function clear($time = null, Carbon $carbon);

    /**
     * @return mixed
     */
    public function loggedIn();

    /**
     * @return mixed
     */
    public function guests();

    /**
     * @param $id
     * @return mixed
     */
    public function findUser($id);

    /**
     * @param $ip
     * @return mixed
     */
    public function findByIp($ip);

    /**
     * @return bool
     */
    public function isUser();

    /**
     * @return bool
     */
    public function isGuest();

    /**
     * @param $value
     */
    public function setSidAttribute($value);

    /**
     * @param null $id
     * @return mixed
     */
    public function getUseragent($id = null);
}