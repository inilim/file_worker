<?php

namespace Inilim\FileWorker;

class Manager
{
    const DIR_MAIN = __DIR__ . '/tasks';
    const DIR_AT_WORK = self::DIR_MAIN . '/at_work';
    const DIR_EMPLOYEE_TASKS = self::DIR_MAIN . '/employee_tasks';

    public function __invoke(): void
    {
    }
}
