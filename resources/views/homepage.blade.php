
@extends('layouts.master')

@section('content')
    <div id="nameRow" class="row p-0 nameRow">
        <div class="col-12 container-fluid m-0">
            <div class="row mt-1">
                <div class="col-6 nameText adjustForIcons">
                    Jeremiah Heck
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
    </div>
        <div id="mission" class="row m-0 pt-5 container-fluid">
            <div class="row justify-contnet-center mt-5">
                <div class="col-md-4 missionBox mt-5">
                    <button id="toDoListUserGuide" class="innerMissionBox " onclick="addOntoUrl(this.id)">  
                        <h2 class="title" >Iphone To-do List</h2>
                        <a href="https://github.com/heckwithu2/iosPlannerApp" target="_blank" class="missionStatementText  m-0 p-0">Github Link</a>
                        <img class="mt-2 img-fluid" src="public/images/userGuideSnipPIC.png">
                    </button>
                </div>

                <div class="col-md-4 missionBox mt-5">
                    <button class="innerMissionBox" onclick="takeMeHere('https://gandacksu.jeremiahheck.tech/Homepage.html')">    
                        <h2 class="title">Front End Work</h2>
                        <a href="https://github.com/heckwithu2/gandacksu" target="_blank" class="missionStatementText  m-0 p-0">Github Link</a>
                        <img class="mt-2 img-fluid" src="public/images/gandacksuPic.png">
                    </button>
                </div>

                <div class="col-md-4 missionBox mt-5">
                        <button class="innerMissionBox " onclick="takeMeHere('https://jeremiahheck.tech/Portfolio#ComputerScienceProjects')">  
                            <h2 class="title" >Advanced Computer Science</h2>
                            <a href="https://jeremiahheck.tech/Portfolio#ComputerScienceProjects" target="_blank" class="missionStatementText  m-0 p-0">View all of my CS projects.</a>
                            <img class="mt-2 img-fluid" src="public/images/stackPic.png">
                        </button>
                </div>
            </div>
        </div>
    

@endsection
