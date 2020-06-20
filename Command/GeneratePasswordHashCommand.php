<?php
declare(strict_types=1);

namespace Jadob\Security\Auth\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GeneratePasswordHashCommand
 *
 * @package Jadob\Security\Auth\Command
 * @author  pizzaminded <mikolajczajkowsky@gmail.com>
 * @license MIT
 */
class GeneratePasswordHashCommand extends Command
{

    /**
     * @var string
     */
    protected static string $defaultName = 'security:auth:password-hash';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}