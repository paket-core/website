<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\UserEvent;

class UserEventService
{
    /**
     * @param User $user
     * @param integer $event_id
     * @param null $details
     * @param null $author_id
     * @return mixed
     * @throws WebException
     */
    public static function add_event(User $user, $event_id, $details = null, $author_id = null)
    {

        $author_id = $author_id ? $author_id : \Auth::id();

        $user_event = new UserEvent();
        $user_event->user_id = $user->id;
        $user_event->event_id = $event_id;
        if ($author_id && User::find($author_id)) {
            $user_event->author_id = $author_id;
        }
        if ($details) {
            $user_event->details = json_encode($details);
        }
        if (!$user_event->save()) {
            throw new WebException(trans('airdrop.user_save_error'));
        }
        return $user_event;
    }

    /**
     * @param $event_id
     * @return mixed
     */
    public static function get_event_name($event_id)
    {
        return trans('airdrop.' . StaticArray::EVENTS_LIST[$event_id]);
    }

    /**
     * @param UserEvent $event
     * @return mixed
     */
    public static function get_details(UserEvent $event)
    {
        $details = null;
        $event_id = $event->event_id;
        if ($event_id === StaticArray::USER_EVENT_USER_DELETED) {
            $data = json_decode($event->details);
            $details = $data->email;
        }
        return $details;
    }

    /**
     * @param $event_name
     * @return array
     */
    public static function search_events($event_name)
    {
        $input = preg_quote($event_name, '~'); // don't forget to quote input string!
        $result = preg_grep('~' . $input . '~', StaticArray::EVENTS_LIST);
        return array_keys($result);
    }

    /**
     * @param $event_id
     * @return mixed
     */
    public static function get_event_kind($event_id)
    {
        if (in_array($event_id, [
            StaticArray::USER_EVENT_PASSWORD_RESET_EMAIL_SUCCESS
        ])) {
            return 'success';
        } else if (in_array($event_id, [
            StaticArray::USER_EVENT_PASSWORD_RESET_EMAIL_FAIL
        ])) {
            return 'danger';
        } else if (in_array($event_id, [

        ])) {
            return 'warning';
        }
        return 'info';
    }

}