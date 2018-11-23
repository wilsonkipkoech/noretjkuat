@extends('layouts.portal')

@section('content')
<div class="container">



    <div class="jumbotron">

             <div class="row">
        <div class="col-md-10" style="text-align: center;">
    <h2>WELCOME TO NORET JKUAT NOMINATION PORTAL</h2>   
    <br>   
      
      <p  >Noret Nomination is an Annual event that  is done after every spiritual year.<br> Its main aim is to  nominate leaders who are going to steer the family for the next Spiritual year.</p>
        <br>
        <br>
        <p>The are nine elective post in the Noret Family.The Chair, The Vice-Chair, Treasurer, Secretary,Organizing Secretary,Missions Co-ordinator,Prayer Secretary,Family Co-ordinator. Each post has specific roles as outlined in the Noret Jkuat constitution.</p>
</div>
<div class="col-md-4">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
  CHECK ROLES FOR EACH POST
</button>



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ROLES FOR EACH POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>THE CHAIR</h3>
    <p>Shall be the head of the family. He takes charge of all the matters concerning the family.</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>


        <h3>THE VICE-CHAIR</h3>
    <p>Shall stand in when the Chair is not in place</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

        <h3>THE SECRETARY</h3>
    <p>Shall in charge of co-ordinating the family</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

        <h3>THE TREASURER</h3>
    <p>Shall be in charge of money matters of the family</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

        <h3>ORGANZING SECRETARY</h3>
    <p>Takes role in the organizing the whole family</p>
    <h5>Roles</h5>
        <ol>
         <li>Preaparing the venue for conducting Noret FellowShip</li> 
         <li>Organizing for retreat and fundays for the family</li> 
         <li>In Charge of the cleaning the venue of the fellowship</li>
         <li>If male He will be the manifest Head of the family</li>
         <li>Organizing the family during retreats</li>
        </ol>

        <h3>MISSION CO-ORDINATOR</h3>
    <p>Shall deal with the matters of mission</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

        <h3>PRAYER SECRETARY</h3>
    <p>HE/SHE shall be the lead in matter concerning the prayers fo the family.</p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

        <h3>FAMILY CO-ORDINATOR</h3>
    <p>Shall be the head of the small sub-families created to enhance coordination about the family </p>
    <h5>Roles</h5>
        <ol>
         <li>HTML Reference</li> 
         <li>CSS Reference</li> 
         <li>JavaScript Reference</li>
         <li>W3.CSS Reference</li>
         <li>Bootstrap Reference</li>
        </ol>

      </div>
      
    </div>
  </div>
</div>
</div>
</div>
<br>
<br>

<div class="row">
    <div class="col-md-6 col-md-offset-4">

       
         
            {!! Form::open() !!}

      
     {{ Form::label('chair',"ChairMan")}}
     {{ Form::text('chair',null,['class'=>'form-control']) }}
          

     {{ Form::label('vicechair',"Vice Chair")}}
     {{ Form::text('vicechair',null,['class'=>'form-control']) }}
     


     {{ Form::label('treasurer',"Treasurer")}}
     {{ Form::text('treasurer',null,['class'=>'form-control']) }}
        
     {{ Form::label('secretary',"Secretary")}}
     {{ Form::text('secretary',null,['class'=>'form-control']) }}
      

     {{ Form::label('organizingsec',"Organizing Secretary")}}
     {{ Form::text('organizingsec',null,['class'=>'form-control']) }}

     {{ Form::label('missioncordinator',"Mission-Cordinator")}}
     {{ Form::text('missioncordinator',null,['class'=>'form-control']) }}
    
     {{ Form::label('prayersec',"Prayer Secretary")}}
     {{ Form::text('prayersec',null,['class'=>'form-control']) }}
   
   

     {{ Form::label('family-cordinator',"Family Co-ordinator")}}
     {{ Form::text('family-cordinator',null,['class'=>'form-control']) }}


           {{ Form::submit('NOMINATE LEADERS',['class'=>'btn   btn-primary btn-block','style'=> 'margin-top:30px;']) }}


     {!! Form::close() !!}
    </div>

    
       
       
        </div>
     
</div>

</div>
     
  
    
@endsection
