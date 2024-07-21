<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

##[Test]
function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->save(new Todolist("Belajar PHP di PZN"));
    $todolistRepository->save(new Todolist("Belajar Laravel Di PZN"));
    $todolistRepository->save(new Todolist("Belajar Bootstrap di PZN"));

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showToDoList();

    $todolistService->removeToDoList(1);
    $todolistService->showToDoList();

    $todolistService->removeToDoList(3);
    $todolistService->showToDoList();

    $todolistService->removeToDoList(1);
    $todolistService->removeToDoList(1);
    $todolistService->showToDoList();

}

testRemoveTodolist();
