<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CmsStorefrontApi\Api;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Command to delete pages by identifiers.
 * @api
 */
interface DeletePagesInterface
{
    /**
     * @param array $identifiers
     * @throws NoSuchEntityException
     * @throws CouldNotSaveException
     * @return void
     */
    public function execute(array $identifiers): void;
}
