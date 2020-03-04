<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Like extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "like";
    const HEAD_LABELS = "likes";
    const TAIL_LABEL = "liker";
    const TAIL_LABELS = "likers";
    
    const TAIL_CALLABLE_LABEL = "";
    const TAIL_CALLABLE_LABELS = "";
    const HEAD_CALLABLE_LABEL = "";
    const HEAD_CALLABLE_LABELS = "";

    const FEED_SIMPLE_LABEL = "";
    const FEED_AGGREGATED_LABEL = "";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    


}

/* Predicate to load as a partial */
class LikePredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class LikeNotification extends Foundation\ActorOut\SubscribeNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1575
 * Compilation Time: 9
 * 715645194cde61beecf98e3c1d961f9d
 ******************************************************/