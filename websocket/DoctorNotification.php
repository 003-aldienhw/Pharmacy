<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;

class WebSocketServer implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn)
    {
        echo "Client connected\n";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        echo "Message: $msg\n";

        $from->send($msg);
    }

    public function onClose(ConnectionInterface $conn)
    {
        echo "Client disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Error: {$e->getMessage()}\n";

        $conn->close();
    }
}

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WebSocketServer()
        )
    ),
    8080
);

echo "WebSocket server running on ws://localhost:8080\n";

$server->run();