# notifier-interface
Standard interface for objects that send notifications.

## Install
```
composer require rumd3x/notifier-interface
```

## Usage
```php
<?php
class MyNotification implements Rumd3x\Standards\NotificationInterface
{
  // Implementation
}

class MyNotifier implements Rumd3x\Standards\NotifierInterface
{
  public function notify(Rumd3x\Standards\NotificationInterface $notification)
  {
    // Implementation
  }
}

$notification = new MyNotification();
$notifier = new MyNotifier();
$notifier->notify($notification);
```
