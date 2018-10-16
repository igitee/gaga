
<div class="wrapper-mask" id="wrapper-mask"></div>
<div class="wrapper" id="wrapper" >
    <div class="layout-left" >
        <div class="left-sidebar" style="position: relative;">
                <div style="position: relative;height: 100%;">
                    <div class="l-sb-item" style="border: none;" >
                        <img class="useravatar selfInfo info-avatar-<?php echo $user_id;?>"  src="../../public/img/msg/default_user.png" style="background-color: #c9c9c9;" />
                    </div>
                    <div class="hint--right" style="width: 7.5rem;" aria-label="消息" data-local="aria-label:chatSessionTip">
                        <div class="l-sb-item l-sb-item-active" data="chatSession" >
                            <img src="../../public/img/msg/chatsession.png" data="select" class="chatSession-select item-img "/>
                            <img src="../../public/img/msg/chatsession_unselect.png" data="unselect" class="chatSession-unselect  item-img" style="display: none;"/>
                            <div style="display: none" class="room-list-msg-unread unread-num"></div>
                            <div style="display: none"  class="room-list-msg-unread-mute unread-num-mute"></div>
                        </div>
                    </div>

                    <div class=" hint--right" style="width: 7.5rem;" aria-label="群聊" data-local="aria-label:groupTip">
                        <div class="l-sb-item "  data="group" >
                            <img src="../../public/img/msg/group_chat_unselect.png" data="unselect" class="group-unselect item-img" />
                            <img src="../../public/img/msg/group_chat.png" data="select" class="group-select item-img" style="display: none;"/>
                        </div>
                    </div>
                    <div class=" hint--right" style="width: 7.5rem;" aria-label="好友" data-local="aria-label:friendTip">
                        <div class="l-sb-item"  data="friend" >
                            <img src="../../public/img/msg/friend_unselect.png" data="unselect" class="friend-unselect item-img" />
                            <img src="../../public/img/msg/friend.png" data="select" class="friend-select item-img" style="display: none;"/>
                            <div style="display: none" class="apply-friend-list apply_friend_list_num" style="display: none;"></div>
                        </div>
                    </div>

                    <div class=" hint--right" style="width: 7.5rem;bottom: 1rem;position: absolute;display: block;left:0rem;right:0rem;" aria-label="更多" data-local="aria-label:moreTip">
                        <div class="l-sb-item"  data="more" >
                            <img src="../../public/img/msg/more_unselect.png" data="unselect" class="more-unselect item-img" />
                            <img src="../../public/img/msg/more.png" data="select" class="more-select item-img" style="display: none;"/>
                        </div>
                    </div>
                </div>
        </div>

        <div class="left-body">
            <div class="left-body-container">
                <div class="left-body-chatsession chatsession-lists" style="position: relative;">
                </div>

                <div class="left-body-groups group-lists group-list"  style="display: none;position: relative;">
                        <div style="width: 100%;">
                            <div class="pw-contact-row create-group" >
                                <div class="pw-contact-row-image" style="position: relative;">
                                    <img src="../../public/img/msg/create_group.png" />
                                </div>
                                <div class="pw-contact-row-name" data-local-value="createGroupTip">创建群聊</div>
                            </div>
                            <div class="group-list-div" data-local-value="groupListTip">群聊列表</div>
                        </div>
                        <div style="position: absolute;width: 100%;overflow-y: scroll;height:100%;">
                            <div class="group-list-contact-row">
                            </div>
                        </div>
                </div>

                <div class="left-body-friends friend-lists friend-list left-body-groups group-lists group-list" style="display: none;position: relative;height: 100%;">

                    <div style="width: 100%;">
                        <div class="pw-contact-row  search-user" >
                            <div class="pw-contact-row-image" style="position: relative;">
                                <img src="../../public/img/msg/search_add_friend.png" />
                            </div>
                            <div class="pw-contact-row-name" data-local-value="searchTip">添加好友</div>
                        </div>

                        <div class="pw-contact-row  apply-friend-list" >
                            <div class="pw-contact-row-image" style="position: relative;">
                                <img src="../../public/img/msg/apply_list.png" />
                                <div  class="apply-friend-list apply_friend_num" style="display: none;" ></div>
                            </div>
                            <div class="pw-contact-row-name new-friends-apply" data-local-value="newFriendsTip">新朋友</div>
                        </div>
                        <div class="friend-list-div" data-local-value="friendListTip">好友列表</div>
                    </div>
                    <div style="position: absolute;width: 100%;overflow-y: scroll;height:100%;">
                        <div class="friend-list-contact-row" >
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

