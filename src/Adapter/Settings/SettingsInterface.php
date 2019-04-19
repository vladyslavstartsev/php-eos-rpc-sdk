<?php

namespace BlockMatrix\EosRpc\Adapter\Settings;

interface SettingsInterface
{
    /**
     * Fetch the RPC Node
     *
     * @return string
     */
    public function rpcNode(): string;

    /**
     * Fetch the RPC of keosd
     *
     * @return string
     */
    public function rpcKeosd(): string;
}
