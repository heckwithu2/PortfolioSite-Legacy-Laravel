
@extends('layouts.master')

    @section('content')

                <div id="portfolioClient" class="row">
                    <div id="portfolioHeader" class="row portfolioHeader m-0 p-0 ">
                        <div class="p-0 col ">
                            <div class=" iconRow d-flex justify-content-start">
                                <a id="home" href="https://jeremiahheck.tech">
                                    <img class="homeIcon icon mt-1" src="https://jeremiahheck.tech/public/images/Home.png">
                                </a>
                                <div id="hideButton" class="footerText" onClick="hideList()">
                                    <img class="homeIcon icon mt-1" src="https://jeremiahheck.tech/public/images/menu.png">
                                    Hide Menu
                                </div>
                            
                            </div>
                        </div>          
                        <div class="p-0 col">         
                            <div class=" iconRow d-flex justify-content-end">
                                <a id="git" href="https://github.com/heckwithu2?tab=projects" target="_blank">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/github.png">
                                </a>
                                <a id="li" href="https://www.linkedin.com/in/jeremiah-heck-498b1a184/" target="_blank">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/linkedin2.png"> 
                                </a>
                                <a id="mail" href="mailto: jheck10@kent.edu">
                                    <img class="socialIcon icon mt-1" src="https://jeremiahheck.tech/public/images/gmail.png">
                                </a>
                            </div>                  
                        </div>
                    </div>


                    @php
                        $makeProjectViewer = new App\Classes\projectViewer;
                        $makeProjectViewer->makeProjectViewer();
                    @endphp

                    <div id='projectViewer' class='projectViewer'>
                        <div class='container-fluid p-0'>
                            <div class='row projectTitleBox'>
                                <div style='text-transform: uppercase;' id='titleProject' class='col-12 text-center projectBox'>
                        
                                </div>
                            </div>
                            <div class='row projectDetailsBox'>
                                <div style='border-right: solid 1px #c3c7d5;' id='techProject' class='col-3 text-center projectBox'>
                                </div>
                                <div style='border-right: solid 1px #c3c7d5;' id='descProject' class='col-6 text-center projectBox'>

                                </div>
                                <div class='col-3 text-center projectBox'>
                                    <a class='githubLink' id='gitDownProject' href='' target='_blank'> Github Link </a>
                                </div>
                            </div>
                            <div class='row projectPictureBox'>
                            </div>
                            <div id='picProject' class='col-12 text-center projectBox'>
                            </div>
                            <div class='row projectFooterBox' >
                            
                            </div>
                        </div>
                    </div>
                </div>

            
    @endsection



 