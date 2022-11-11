<?php

    declare(strict_types = 1);

    spl_autoload_register(static function(string $fqcn): void {
        $path = str_replace(['App', '\\'], ['back', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Topics\TopicsManage;

    function readingTopic(): array
    {
        $reading = new TopicsManage;
        $reading_topic = $reading->readTopic();

        return $reading_topic;
    }