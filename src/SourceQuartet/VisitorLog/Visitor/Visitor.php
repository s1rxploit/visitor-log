<?php namespace SourceQuartet\VisitorLog\Visitor;

use Carbon\Carbon;
use SourceQuartet\Exception\InvalidArgumentException;
use SourceQuartet\VisitorLog\Useragent;

interface Visitor
{
    /**
     * @param null $id
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function find($id = null);

    /**
     * @param array $attributes
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function create(array $attributes);

    /**
     * @param array $attributes
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function updateOrCreate(array $attributes);

    /**
     * @param $id
     * @return bool
     */
    public function checkOnline($id);

    /**
     * @return bool
     */
    public function findCurrent();

    /**
     * @param null $time
     * @param Carbon $carbon
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function clear(Carbon $carbon, $time = null);

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
     * @throws InvalidArgumentException
     */
    public function findUser($id);

    /**
     * @param $ip
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function findByIp($ip);

    /**
     * @return bool
     */
    public function isUser();
    /**
     * @param null $value
     * @throws InvalidArgumentException
     */
    public function setSidAttribute($value = null);

    /**
     * Set Agent Detector
     */
    public function setAgentDetector();

    /**
     * @return bool
     */
    public function getUseragent();
}