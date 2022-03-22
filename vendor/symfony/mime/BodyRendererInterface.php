<?php


namespace Symfony\Component\Mime;

/**
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
interface BodyRendererInterface
{
    public function render(Message $message): void;
}
