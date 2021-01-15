
@extends('layouts.master')

@section('content')
    <div id="nameRow" class="row p-0 nameRow">
        <div class="col-12 container-fluid m-0">
            <div class="row mt-1">
                <div class="col-6 nameText adjustForIcons">
                    Jeremiah Heck's
                </div>
                <div class="col-6 iconRow d-flex flex-row-reverse  appear">
                    <a href="https://github.com/heckwithu2?tab=projects" target="_blank">
                        <img class="socialIcon icon " stye="min-width: 25px;" src="https://jeremiahheck.tech/public/images/github.png">
                    </a>
                    <a href="https://www.linkedin.com/in/jeremiah-heck-498b1a184/" target="_blank">
                        <img class="socialIcon icon " src="https://jeremiahheck.tech/public/images/linkedin2.png">
                    </a>
                    <a href="mailto: jeremiah.heck7@gmail.com">
                        <img class="socialIcon icon " src="https://jeremiahheck.tech/public/images/gmail.png">
                    </a>
                </div>
            </div>
        </div>           
    </div>
            
    @php
    $makeMenu = new App\Classes\MegaMenu;
    $makeMenu->menuCreation();
    @endphp

    <div id='mission' class='row p-0 missionStatement'>
        <div class='col-12 missionStatementText '>
           
        </div>
        </div>
    </div>

@endsection
