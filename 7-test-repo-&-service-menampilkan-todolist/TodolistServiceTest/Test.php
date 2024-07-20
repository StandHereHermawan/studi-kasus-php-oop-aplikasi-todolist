<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

##[Test]
function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->testAdd("Belajar PHP di PZN");
    $todolistRepository->testAdd("Belajar Laravel Di PZN");
    $todolistRepository->testAdd("Belajar Bootstrap di PZN");

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showToDoList();
}

testShowTodolist();
