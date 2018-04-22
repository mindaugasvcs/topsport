<?php

namespace AppBundle\Command;

use AppBundle\Entity\ApiItems;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class AppLoadUsersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:load-users')

            // the short description shown while running "php bin/console list"
            ->setDescription('Loads users from API to DB.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to load users...')

            ->addArgument('url', InputArgument::REQUIRED, 'API address to load users from')

            ->addOption('limit', null, InputOption::VALUE_OPTIONAL, 'Limit how many users to load')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $input->getArgument('url'));
        $data = $res->getBody();

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new ArrayDenormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $result = $serializer->deserialize($data, ApiItems::class, 'json');
        $items = ($result) ? $result->getItems() : [];

        $limit = (is_int($input->getOption('limit'))) ? $input->getOption('limit') : 500;
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $em->getConnection()->prepare('TRUNCATE TABLE api_user')->execute();

        for ($i = 0; $i < count($items) && $i < $limit; $i++) {
            $em->persist($items[$i]);
        }
        $em->flush();

        $output->writeln($i . ' ApiUser entity records created.');
    }
}
