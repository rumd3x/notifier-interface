<?php
namespace Rumd3x\Standards;

interface NotifierInterface
{
    /**
     * @param NotificationInterface
     * @return mixed
     */
    public function notify(NotificationInterface $notification);
}
