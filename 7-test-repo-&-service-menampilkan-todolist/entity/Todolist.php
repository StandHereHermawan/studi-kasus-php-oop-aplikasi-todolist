<?php

namespace Entity {

    class Todolist
    {

        private string $todolist;


        public function __construct(string $todolist = "")
        {
            $this->todolist = $todolist;
        }

        public function getTodolist(): string
        {
            return $this->todolist;
        }

        public function setTodoolist(string $todolist): void
        {
            $this->todolist = $todolist;
        }
    }
}
