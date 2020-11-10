
@extends('layouts.master')

@section('content')
   <div id="nameRow" class="row p-0 nameRow">
        <div class="col-12 nameText text-center">
            JEREMIAH HECK
        </div>
    </div>
            
    @php
    $makeMenu = new App\Classes\MegaMenu;
    $makeMenu->menuCreation();
    @endphp

    <div id='mission' class='row p-0 missionStatement'>
        <div class='col-12 missionStatementText '>
            My name is Jeremiah Heck, I'm a Software Developer with experience in Game Development and Full-stack Development.
        </div>
        </div>
    </div>

@endsection
