<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CmsStorefrontApi\Api;

use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Command to load pages by specified identifier. Allows filter fields.
 * @api
 */
interface GetPagesInterface
{
    /**
     * @param array $identifiers
     * @param array $fieldsFilter
     * @throws NoSuchEntityException
     * @return string[][]
     */
    public function execute(array $identifiers, array $fieldsFilter): array;
}
