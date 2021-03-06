<?php

/**
 * TechDivision\Import\Product\Media\Utils\SqlStatements
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

namespace TechDivision\Import\Product\Media\Utils;

/**
 * A SSB providing process registry functionality.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-media
 * @link      http://www.techdivision.com
 */
class SqlStatements
{

    /**
     * This is a utility class, so protect it against direct
     * instantiation.
     */
    private function __construct()
    {
    }

    /**
     * This is a utility class, so protect it against cloning.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * The SQL statement to load an existing product media gallery by attribute ID + value.
     *
     * @var string
     */
    const PRODUCT_MEDIA_GALLERY = 'SELECT *
                                     FROM catalog_product_entity_media_gallery
                                    WHERE attribute_id = :attribute_id
                                      AND value = :value';

    /**
     * The SQL statement to load an existing product media gallery by value/store/entity ID.
     *
     * @var string
     */
    const PRODUCT_MEDIA_GALLERY_VALUE = 'SELECT *
                                           FROM catalog_product_entity_media_gallery_value
                                          WHERE value_id = :value_id
                                            AND store_id = :store_id
                                            AND entity_id = :entity_id';

    /**
     * The SQL statement to load an existing product media gallery value to entity by value/entity ID.
     *
     * @var string
     */
    const PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY = 'SELECT *
                                                     FROM catalog_product_entity_media_gallery_value_to_entity
                                                    WHERE value_id = :value_id
                                                      AND entity_id = :entity_id';

    /**
     * The SQL statement to create a new product media gallery entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY = 'INSERT
                                            INTO catalog_product_entity_media_gallery (
                                                     attribute_id,
                                                     value,
                                                     media_type,
                                                     disabled
                                                   )
                                            VALUES (:attribute_id,
                                                    :value,
                                                    :media_type,
                                                    :disabled)';

    /**
     * The SQL statement to update an existing product media gallery entry.
     *
     * @var string
     */
    const UPDATE_PRODUCT_MEDIA_GALLERY = 'UPDATE catalog_product_entity_media_gallery
                                             SET attribute_id = :attribute_id,
                                                 value = :value,
                                                 media_type = :media_type,
                                                 disabled = :disabled
                                           WHERE value_id = :value_id';

    /**
     * The SQL statement to create a new product media gallery value entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE = 'INSERT
                                                  INTO catalog_product_entity_media_gallery_value (
                                                           value_id,
                                                           store_id,
                                                           entity_id,
                                                           label,
                                                           position,
                                                           disabled
                                                       )
                                                VALUES (:value_id,
                                                        :store_id,
                                                        :entity_id,
                                                        :label,
                                                        :position,
                                                        :disabled)';

    /**
     * The SQL statement to update an existing product media gallery value entry.
     *
     * @var string
     */
    const UPDATE_PRODUCT_MEDIA_GALLERY_VALUE = 'UPDATE catalog_product_entity_media_gallery_value
                                                   SET value_id = :value_id,
                                                       store_id = :store_id,
                                                       entity_id = :entity_id,
                                                       label = :label,
                                                       position = :position,
                                                       disabled = :disabled
                                                 WHERE record_id = :record_id';

    /**
     * The SQL statement to create a new product media gallery value to entity entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE_TO_ENTITY = 'INSERT
                                                            INTO catalog_product_entity_media_gallery_value_to_entity (
                                                                   value_id,
                                                                   entity_id
                                                                 )
                                                          VALUES (:value_id,
                                                                  :entity_id)';

    /**
     * The SQL statement to create a new product media gallery value vidoe entry.
     *
     * @var string
     */
    const CREATE_PRODUCT_MEDIA_GALLERY_VALUE_VIDEO = 'INSERT
                                                        INTO catalog_product_entity_media_gallery_value_video (
                                                                 value_id,
                                                                 store_id,
                                                                 provider,
                                                                 url,
                                                                 title,
                                                                 description,
                                                                 metadata
                                                             )
                                                      VALUES (:value_id,
                                                              :store_id,
                                                              :provider,
                                                              :url,
                                                              :title,
                                                              :description,
                                                              :metadata)';
}
