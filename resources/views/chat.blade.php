@extends('layouts.app')

@section('header')
@include('sub_panels.menu')
@include('sub_panels.header')
@endsection

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
<div class="col-md-4 bg-white ">
<div class=" row border-bottom padding-sm" style="height: 40px;">
Member

</div>
<ul class="friend-list">
    @foreach ($chats as $chat)
        @include('bars.chats', ['chat' => $chat])
    @endforeach
</ul>
</div>


<div class="col-md-8 bg-white ">
<div class="chat-message">
<ul class="chat">
<li class="left clearfix">
<span class="chat-img pull-left">
<img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">John Doe</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
</div>
</li>
<li class="right clearfix">
<span class="chat-img pull-right">
<img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">Sarah</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
</p>
</div>
</li>
<li class="left clearfix">
<span class="chat-img pull-left">
<img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">John Doe</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
</div>
</li>
<li class="right clearfix">
<span class="chat-img pull-right">
<img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">Sarah</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
</p>
</div>
</li>
<li class="left clearfix">
<span class="chat-img pull-left">
<img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">John Doe</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
</div>
</li>
<li class="right clearfix">
<span class="chat-img pull-right">
<img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">Sarah</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
</p>
</div>
</li>
<li class="right clearfix">
<span class="chat-img pull-right">
<img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
</span>
<div class="chat-body clearfix">
<div class="header">
<strong class="primary-font">Sarah</strong>
<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
</p>
</div>
</li>
</ul>
</div>
<div class="chat-box bg-white">
<div class="input-group">
<input class="form-control border no-shadow no-rounded" placeholder="Type your message here">
<span class="input-group-btn">
<button class="btn btn-success no-rounded" type="button">Send</button>
</span>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
@endsection