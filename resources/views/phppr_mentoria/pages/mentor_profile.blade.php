@extends('templates.phppr_mentoria.app')

@section('before_close_head')
<link rel="stylesheet" href="{{ asset('phppr_mentoria/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('phppr_mentoria/css/chat.css') }}">
@endsection

@section('content')
{{--  
    Baseado no snippet: https://www.bootdey.com/snippets/view/User-profile-with-friends-and-chat
--}}

@php
//Apenas para a mock //TODO
$mentor = (object) [
    'id'    => 12,
    'first_name'  => 'Mentor',
    'last_name'  => 'Fulano de Tal',
    'alias' => 'Fulaninho',
    'email' => 'mentor@email.com'
];
@endphp

<div class="container bootstrap snippets">
    <div class="row" id="user-profile">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h5>{{ $mentor->first_name .' '.$mentor->last_name }}</h5>
                <h6 class="label text-muted">{{ $mentor->alias }}</h6>
                <div class="profile-status">
                    <i class="fa fa-check-circle"></i> Online
                </div>
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                    class="profile-img img-responsive center-block">
                <div class="profile-label">
                    <span class="label label-danger">{{ $mentor->alias }}</span>
                </div>                

                <div class="profile-since">
                    Member since: Jan 2012
                </div>

                <div class="profile-details">
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-user"></i>Mentorados: <span>4</span></li>
                        <li><i class="fa-li fa fa-comment"></i>Posts: <span>5</span></li>
                        <li><i class="fa-li fa fa-tasks"></i>Testes: <span>5</span></li>
                    </ul>
                </div>

                <div class="profile-message-btn center-block text-center">
                    <a href="#" class="btn btn-info mt-2">
                        <i class="fa fa-book"></i> Solicitar recomendação
                    </a>
                    <a href="#" class="btn btn-primary mt-2">
                        <i class="fa fa-book"></i> Solicitar mentoria
                    </a>
                    <a href="#" class="btn btn-success mt-2">
                        <i class="fa fa-envelope"></i> Enviar menssagem
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>User info</span></h3>
                    <a href="#" class="btn btn-primary edit-profile">
                        <i class="fa fa-pencil-alt fa-lg"></i> Editar perfil
                    </a>
                </div>

                <div class="row profile-user-info">
                    <div class="col-sm-8">
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                First Name
                            </div>
                            <div class="profile-user-details-value">
                                John
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Last Name
                            </div>
                            <div class="profile-user-details-value">
                                Doe
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Address
                            </div>
                            <div class="profile-user-details-value">
                                10880 Malibu Point,
                                <br> Malibu, Calif., 90265
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Email
                            </div>
                            <div class="profile-user-details-value">
                                johndoe@bootdey.com
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Phone number
                            </div>
                            <div class="profile-user-details-value">
                                011 223 344 556 677
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 profile-social">
                        <ul class="fa-ul">
                            <li><i class="fab fa-twitter"></i><a href="#">@scjohansson</a></li>
                            <li><i class="fab fa-linkedin"></i><a href="#">John Doe </a></li>
                            <li><i class="fab fa-facebook"></i><a href="#">John Doe </a></li>
                            <li><i class="fab fa-skype"></i><a href="#">Black_widow</a></li>
                            <li><i class="fab fa-instagram"></i><a href="#">Avenger_Scarlett</a></li>
                            <li><i class="fab fa-telegram-plane"></i><a href="#">Avenger_Scarlett</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tabs-wrapper profile-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#tab-activity" data-toggle="tab">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-friends" data-toggle="tab">Friends</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-skills" data-toggle="tab">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-chat" data-toggle="tab">Chat</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active show" id="tab-activity">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-comment"></i>
                                            </td>
                                            <td>
                                                John Doe posted a comment in <a href="#">Avengers Initiative</a>
                                                project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe changed order status from <span
                                                    class="label label-primary">Pending</span> to <span
                                                    class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe posted a comment in <a href="#">Lost in Translation opening
                                                    scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe posted a comment in <a href="#">Avengers Initiative</a>
                                                project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-heart"></i>
                                            </td>
                                            <td>
                                                John Doe changed order status from <span class="label label-warning">On
                                                    Hold</span> to <span class="label label-danger">Disabled</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe posted a comment in <a href="#">Lost in Translation opening
                                                    scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe changed order status from <span
                                                    class="label label-primary">Pending</span> to <span
                                                    class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe posted a comment in <a href="#">Avengers Initiative</a>
                                                project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-friends">
                            <ul class="widget-users row">
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">John Doe </a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> Last online: 5 minutes ago
                                        </div>
                                        <div class="type">
                                            <span class="label label-danger">Admin</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Robert Downey Jr.</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> Last online: Thursday
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Emma Watson</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> Last online: 1 week ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">George Clooney</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> Last online: 1 month ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            <a href="#" class="btn btn-success pull-right">View all users</a>
                        </div>

                        <div class="tab-pane fade" id="tab-skills">
                            <ul class="widget-users row">
                                @php
                                //Apenas para a mock //TODO
                                $stars = [
                                    'far fa-star',
                                    'fas fa-star-half-alt',
                                ];

                                $count_stars = count($stars) -1;
                                @endphp
                                @for ($i = 1; $i <= 9; $i++)
                                @php( $star = rand(0, $count_stars) )
                                <li class="col-md-6">
                                    <div class="img">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Tech {{ $i }} </a>
                                        </div>
                                        <div class="profile-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            @if ($star === 0)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            @else
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            @endif
                                        </div>
                                    </div>
                                </li>

                                @endfor
                            </ul>
                            <br>
                            <a href="#" class="btn btn-success pull-right">View all users</a>
                        </div>

                        <div class="tab-pane fade" id="tab-chat">
                            <div class="conversation-wrapper">
                                <div class="conversation-content">
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 340px;">
                                        <div class="conversation-inner"
                                            style="overflow: hidden; width: auto; height: 340px;">

                                            <div class="conversation-item item-left clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="img-responsive" alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Ryan Gossling
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 18:28
                                                    </div>
                                                    <div class="text">
                                                        I don't think they tried to market it to the billionaire,
                                                        spelunking, base-jumping crowd.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="img-responsive" alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried
                                                        chicken, but you happen to pull this shit while I'm in a
                                                        transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="img-responsive" alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried
                                                        chicken, but you happen to pull this shit while I'm in a
                                                        transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-left clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="img-responsive" alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Ryan Gossling
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 18:28
                                                    </div>
                                                    <div class="text">
                                                        I don't think they tried to market it to the billionaire,
                                                        spelunking, base-jumping crowd.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-item item-right clearfix">
                                                <div class="conversation-user">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="img-responsive" alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        Mila Kunis
                                                    </div>
                                                    <div class="time hidden-xs">
                                                        September 21, 2013 12:45
                                                    </div>
                                                    <div class="text">
                                                        Normally, both your asses would be dead as fucking fried
                                                        chicken, but you happen to pull this shit while I'm in a
                                                        transitional period so I don't wanna kill you, I wanna help you.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="slimScrollBar"
                                            style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);">
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation-new-message">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="2"
                                                placeholder="Enter your message..."></textarea>
                                        </div>

                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-success pull-right">Send
                                                message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection