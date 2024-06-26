<?php

namespace App\Http\Requests\Api\Application\Nodes;

use App\Models\Node;
use App\Services\Acl\Api\AdminAcl;
use App\Http\Requests\Api\Application\ApplicationApiRequest;

class StoreNodeRequest extends ApplicationApiRequest
{
    protected ?string $resource = AdminAcl::RESOURCE_NODES;

    protected int $permission = AdminAcl::WRITE;

    /**
     * Validation rules to apply to this request.
     */
    public function rules(array $rules = null): array
    {
        return collect($rules ?? Node::getRules())->only([
            'public',
            'name',
            'fqdn',
            'scheme',
            'behind_proxy',
            'maintenance_mode',
            'memory',
            'memory_overallocate',
            'disk',
            'disk_overallocate',
            'upload_size',
            'daemon_listen',
            'daemon_sftp',
            'daemon_base',
        ])->mapWithKeys(function ($value, $key) {
            $key = ($key === 'daemon_sftp') ? 'daemon_sftp' : $key;

            return [snake_case($key) => $value];
        })->toArray();
    }

    /**
     * Fields to rename for clarity in the API response.
     */
    public function attributes(): array
    {
        return [
            'daemon_base' => 'Daemon Base Path',
            'upload_size' => 'File Upload Size Limit',
            'public' => 'Node Visibility',
        ];
    }

    /**
     * Change the formatting of some data keys in the validated response data
     * to match what the application expects in the services.
     */
    public function validated($key = null, $default = null): array
    {
        $response = parent::validated();
        $response['daemon_listen'] = $response['daemon_listen'];
        $response['daemon_sftp'] = $response['daemon_sftp'];
        $response['daemon_base'] = $response['daemon_base'] ?? (new Node())->getAttribute('daemon_base');

        unset($response['daemon_base'], $response['daemon_listen'], $response['daemon_sftp']);

        return $response;
    }
}
