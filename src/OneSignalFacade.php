<?php

namespace Berkayk\OneSignal;

use Illuminate\Support\Facades\Facade;

/**
 * Class OneSignalFacade
 * @package Berkayk\OneSignal
 * @method addParams($params = [])
 * @method setParam($key, $value)
 * @method sendNotificationToUser($contents, $userId, $url = null, $data = null, $buttons = null, $schedule = null, $headings = null, $subtitle = null)
 * @method sendNotificationToExternalUser($contents, $userId, $url = null, $data = null, $buttons = null, $schedule = null, $headings = null, $subtitle = null)
 * @method sendNotificationUsingTags($contents, $tags, $url = null, $data = null, $buttons = null, $schedule = null, $headings = null, $subtitle = null)
 * @method sendNotificationToAll($contents, $url = null, $data = null, $buttons = null, $schedule = null, $headings = null, $subtitle = null)
 * @method sendNotificationToSegment($contents, $segment, $url = null, $data = null, $buttons = null, $schedule = null, $headings = null, $subtitle = null)
 * @method deleteNotification($notificationId, $appId = null)
 * @method sendNotificationCustom($parameters = [])
 * @method getNotification($notification_id, $app_id = null)
 * @method getNotifications($app_id = null, $limit = null, $offset = null)
 * @method getApp($app_id = null)
 * @method getApps()
 */
class OneSignalFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'onesignal';
	}

}