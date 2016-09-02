<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
        The codes are free, but we require linking to our web site.
        Why to Link?
        A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
        Where to Put the Link?
        home, about, credits... or in a good page that you want
        THANK YOU MY FRIEND!
    -->
    <title>messages chat widget - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <style type="text/css" ></style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="col-md-12 col-lg-6">
        <div class="panel">
            <!--Heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Available</a></li>
                            <li><a href="#">Busy</a></li>
                            <li><a href="#">Away</a></li>
                            <li class="divider"></li>
                            <li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
                            <li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a></li>
                        </ul>
                    </div>
                </div>
                <h3 class="panel-title">Chat</h3>
            </div>
    
            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">
                <div class="nano has-scrollbar" style="height:380px">
                    <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                        <ul class="list-unstyled media-block">
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading">John Doe</a>
                                        <p>Hello Lucy, how can I help you today ?</p>
                                        <p class="speech-time">
                                        <i class="fa fa-clock-o fa-fw"></i>09:23AM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-right">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading">Lucy Doe</a>
                                        <p>Hi, I want to buy a new shoes.</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:23AM
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading">John Doe</a>
                                        <p>Shipment is free. You\'ll get your shoes tomorrow!</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:25
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-right">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading">Lucy Doe</a>
                                        <p>Wow, that\'s great!</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:27
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-right">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading">Lucy Doe</a>
                                        <p>Ok. Thanks for the answer. Appreciated.</p>
                                        <p class="speech-time">
                                        <i class="fa fa-clock-o fa-fw"></i> 09:28
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading">John Doe</a>
                                        <p>You are welcome! <br> Is there anything else I can do for you today?</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:30
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-right">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading">Lucy Doe</a>
                                        <p>Nope, That\'s it.</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:31
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading">John Doe</a>
                                        <p>Thank you for contacting us today</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:32
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>
    
                <!--Widget footer-->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9">
                            <input type="text" placeholder="Enter your text" class="form-control chat-input">
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-primary btn-block" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
    
</script>
</body>
</html>