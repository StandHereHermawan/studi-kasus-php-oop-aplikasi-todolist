<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

##[Test]
function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->addForTesting(new Todolist("Belajar PHP di PZN"));
    $todolistRepository->addForTesting(new Todolist("Belajar Laravel Di PZN"));
    $todolistRepository->addForTesting(new Todolist("Belajar Bootstrap di PZN"));

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showToDoList();
}

testShowTodolist();
