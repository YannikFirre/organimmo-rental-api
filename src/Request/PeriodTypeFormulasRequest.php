<?php
/*
 * This file is part of the fw4/organimmo-rental-api library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Organimmo\Rental\Request;

use Organimmo\Rental\ApiAdapter\ApiAdapter;

class PeriodTypeFormulasRequest extends CollectionRequest
{
    const ENDPOINT = 'periodtypes';
    
    protected $id;
    
    public function __construct(int $id, ApiAdapter $adapter)
    {
        $this->id = $id;
        parent::__construct($adapter);
    }

    public function getEndpoint(): string
    {
        return static::ENDPOINT . '/' . $this->id . '/formulas';
    }
}
