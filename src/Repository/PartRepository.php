<?php 

namespace App\Repository;

use App\Model\Part;
use Psr\Log\LoggerInterface;

class PartRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll()
    {
        $this->logger->info('Finding all parts');
        return [
            new Part(
                1,
                'laser',
                '20.99',
                'weapon',
                true
            ),
            new Part(
                2,
                'thruster',
                '48.76',
                'engine',
                false
            ),
            new Part(
                3,
                'shield',
                '400.88',
                'defense',
                true
            ),
            new Part(
                4,
                'hollodeck',
                '9999.99',
                'simulation',
                true
            )
        ];
    }

    public function findOne(int $id): ?Part
    {
        $parts = $this->findAll();

        foreach ($parts as $part) {
            if ($part->getId() === $id) {
                $this->logger->info("Found part: $id");
                return $part;
            }
        }

        return null;
    }
}