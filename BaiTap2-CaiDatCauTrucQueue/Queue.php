<?php

class Queue
{
    protected $front;
    protected $next;

    public function __construct()
    {
        $this->front = null;
        $this->next = null;
    }

    private function readList(): array
    {
        $listData = [];
        $current = $this->front;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function isEmpty()
    {
        return empty($this->readList());
    }

    public function enqueue($data): void
    {
        if (!is_null($this->front)) {
            $node = new Node($data);
            $this->next->next = $node;
            $node->next = null;
            $this->next = $node;
        } else {
            $node = new Node($data);
            $node->next = $this->front;
            $this->front = $node;

            if (is_null($this->next)) {
                $this->next = $node;
            }
        }
    }

    public function dequeue()
    {
        $data = $this->front->readNode();
        $this->front = $this->front->next;
        return $data;
    }
}