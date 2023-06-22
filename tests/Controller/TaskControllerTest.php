<?php

namespace App\Test\Controller;

// class TaskControllerTest extends WebTestCase
// {
//     /** @var KernelBrowser */
//     private $client;
//     /** @var TaskRepository */
//     private $repository;
//     private $path = '/task/';

//     protected function setUp(): void
//     {
//         $this->client = static::createClient();
//         $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Task::class);

//         foreach ($this->repository->findAll() as $object) {
//             $this->repository->remove($object, true);
//         }
//     }

//     public function testIndex(): void
//     {
//         $crawler = $this->client->request('GET', $this->path);

//         self::assertResponseStatusCodeSame(200);
//         self::assertPageTitleContains('Task index');

//         // Use the $crawler to perform additional assertions e.g.
//         // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
//     }

//     public function testNew(): void
//     {
//         $originalNumObjectsInRepository = count($this->repository->findAll());

//         $this->markTestIncomplete();
//         $this->client->request('GET', sprintf('%snew', $this->path));

//         self::assertResponseStatusCodeSame(200);

//         $this->client->submitForm('Save', [
//             'task[title]' => 'Testing',
//             'task[createdAt]' => 'Testing',
//             'task[content]' => 'Testing',
//             'task[isDone]' => 'Testing',
//             'task[user]' => 'Testing',
//         ]);

//         self::assertResponseRedirects('/task/');

//         self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
//     }

//     public function testShow(): void
//     {
//         $this->markTestIncomplete();
//         $fixture = new Task();
//         $fixture->setTitle('My Title');
//         $fixture->setCreatedAt('My Title');
//         $fixture->setContent('My Title');
//         $fixture->setIsDone('My Title');
//         $fixture->setUser('My Title');

//         $this->repository->add($fixture, true);

//         $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

//         self::assertResponseStatusCodeSame(200);
//         self::assertPageTitleContains('Task');

//         // Use assertions to check that the properties are properly displayed.
//     }

//     public function testEdit(): void
//     {
//         $this->markTestIncomplete();
//         $fixture = new Task();
//         $fixture->setTitle('My Title');
//         $fixture->setCreatedAt('My Title');
//         $fixture->setContent('My Title');
//         $fixture->setIsDone('My Title');
//         $fixture->setUser('My Title');

//         $this->repository->add($fixture, true);

//         $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

//         $this->client->submitForm('Update', [
//             'task[title]' => 'Something New',
//             'task[createdAt]' => 'Something New',
//             'task[content]' => 'Something New',
//             'task[isDone]' => 'Something New',
//             'task[user]' => 'Something New',
//         ]);

//         self::assertResponseRedirects('/task/');

//         $fixture = $this->repository->findAll();

//         self::assertSame('Something New', $fixture[0]->getTitle());
//         self::assertSame('Something New', $fixture[0]->getCreatedAt());
//         self::assertSame('Something New', $fixture[0]->getContent());
//         self::assertSame('Something New', $fixture[0]->getIsDone());
//         self::assertSame('Something New', $fixture[0]->getUser());
//     }

//     public function testRemove(): void
//     {
//         $this->markTestIncomplete();

//         $originalNumObjectsInRepository = count($this->repository->findAll());

//         $fixture = new Task();
//         $fixture->setTitle('My Title');
//         $fixture->setCreatedAt('My Title');
//         $fixture->setContent('My Title');
//         $fixture->setIsDone('My Title');
//         $fixture->setUser('My Title');

//         $this->repository->add($fixture, true);

//         self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

//         $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
//         $this->client->submitForm('Delete');

//         self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
//         self::assertResponseRedirects('/task/');
//     }
// }
