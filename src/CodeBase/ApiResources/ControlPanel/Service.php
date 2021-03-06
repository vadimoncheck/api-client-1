<?php


namespace ItlabStudio\ApiClient\CodeBase\ApiResources\ControlPanel;

/**
 * Class Service
 *
 * @package ItlabStudio\ApiClient\CodeBase\ApiResources\ControlPanel
 */
class Service extends ApiResource
{
    /**
     * @param int $id
     *
     * @return mixed|void
     */
    public function getById(int $id)
    {
        return $this->makeRequest(
            $this->request()->withUrl('api/private/services/' . $id)
        );
    }

    /**
     * @return mixed|void
     */
    public function getAll()
    {
        return $this->makeRequest(
            $this->request()->withUrl('api/private/services')
        );
    }
}
