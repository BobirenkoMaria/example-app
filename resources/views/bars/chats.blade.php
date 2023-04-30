<li class="bounceInDown">
    <a href="#" class="clearfix">
    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
    <div class="friend-name">
    <strong>
        @if ($chat->chat_types == 1)
            {{ $user->name }}
        @endif
        
    </strong>
    </div>
    @if (empty($chat->last_message))
        <div class="last-message text-muted">Напишите первым</div>
    @else
        <div class="last-message text-muted">{{ $last_message }}</div>
    @endif
    
    <small class="time text-muted">Just now</small>
    <small class="chat-alert label label-danger">1</small>
    </a>
    </li>