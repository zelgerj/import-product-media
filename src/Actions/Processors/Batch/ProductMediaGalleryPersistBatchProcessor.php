<?php

/**
 * TechDivision\Import\Product\Media\Actions\Processors\Batch\ProductMediaGalleryPersistBatchProcessor
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Product\Bundle\Actions\Processors\Batch;

use TechDivision\Import\Actions\Processors\Batch\AbstractPersistBatchProcessor;

/**
 * The product media gallery persist batch processor implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media
 * @link      http://www.techdivision.com
 */
class ProductMediaGalleryPersistBatchProcessor extends AbstractPersistBatchProcessor
{

    /**
     * The number of placeholders of the prepared statement.
     *
     * @return integer The number of placeholers
     * @see \TechDivision\Import\Actions\Processors\Batch\AbstractBatchBaseProcessor::getNumberOfPlaceholders()
     */
    protected function getNumberOfPlaceholders()
    {
        return 4;
    }

    /**
     * Return's the SQL statement that has to be prepared.
     *
     * @return string The SQL statement
     * @see \TechDivision\Import\Actions\Processors\Batch\AbstractBatchBaseProcessor::getStatement()
     */
    protected function getStatement()
    {
        $utilityClassName = $this->getUtilityClassName();
        return $utilityClassName::CREATE_PRODUCT_MEDIA_GALLERY;
    }

    /**
     * Persist's the passed row.
     *
     * @param array $row The row to persist
     *
     * @return string The last inserted ID
     */
    public function execute($row)
    {
        $this->addToStack($row);
        return (string) $this->getStackSize();
    }
}
