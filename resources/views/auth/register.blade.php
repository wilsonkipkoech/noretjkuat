@extends('layouts.portal')

@section('content')
<div class="container">

     <div class="jumbotron">

      <h1>{{ __('WELCOME TO NORET JKUAT REGISTRATION PORTAL') }}</h1> 
      <div class="row justify-content-center">
     <div class="row" style="margin-top: 20px;">
        
        <div class="col-md-10 col md-offset-1">
            {!! Form::open() !!}

            {{ Form::label('name', "Name") }}
            {{ Form::text('name',null,['class'=>'form-control']) }}

            {{ Form::label('email', "Email") }}
            {{ Form::text('email',null,['class'=>'form-control']) }}

            {{ Form::label('reg_no',"Registration Number")}}
            {{ Form::text('reg_no',null,['class'=>'form-control'])}}

             {{ Form::label('year_study',"Year of Study")}}
              {!!  Form::select('year_study',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6], 
         null,['class' => 'form-control']) 
    !!}

     {{ Form::label('county',"County")}}
              {!!  Form::select('county',['Baringo'=>'Baringo','Nandi'=>'Nandi','Uasin Gishu'=>'Uasin Gishu','EMC'=>'EMC','West Pokot'=>'West Pokot','Turkana'=>'Turkana','Trans-Nzoia'=>'Trans-Nzoia'], 
         null,['class' => 'form-control']) 
    !!}

    {{ Form::label('course',"Course")}}

                                <select class="form-control input-sm" name="course">
                                    <option value="1">Bsc. Agricultural Engineering</option><option value="2">BSc. Actuarial Science</option><option value="3">Agricultural and Biosystems Engineering</option><option value="4">BSc. Agribusiness Economics and Food Industry Management</option><option value="5">BSc. Agricultural Economics and Rural Development</option><option value="6">Bsc Agriculture</option><option value="7">BSc. Agribusiness Management and Enterprise Development</option><option value="8">BSc. Animal Health, Production and Processing</option><option value="9">BSc. Analytical Chemistry</option><option value="10">Animal Health Production and Processing</option><option value="11">Bachelor of Architecture</option><option value="12">Bachelor of Science Biochemistry</option><option value="13">BSc. Biochemistry &amp; Molecular Biology</option><option value="14">Bsc Biomedical Sciences</option><option value="15">BSc. Biomechanical and Process Engineering</option><option value="16">Bsc Biological Sciences</option><option value="17">Bsc Biostatistics</option><option value="18">BSc. Biotechnology</option><option value="19">Bachelor of Business Information Technology</option><option value="20">BSc. Botany</option><option value="21">BSc. Chemistry</option><option value="22">BSc. Civil Engineering</option><option value="23">Clinical Medicine and Surgery</option><option value="24">Bsc Control and Instrumentation</option><option value="25">Bachelor of Commerce</option><option value="26">BSc. Computer Science</option><option value="27">BSc. Computer Technology</option><option value="28">Bachelor of Construction Management</option><option value="29">BSc. Control and Instrumentation</option><option value="30">BSc. Crop Protection</option><option value="31">BSc. Electronic &amp; Computer Engineering</option><option value="32">Bsc Economics</option><option value="33">BSc. Electrical &amp; Electronic Engineering</option><option value="34">BSc. Environmental Horticulture And Landscaping Technology</option><option value="35">Bsc Entrepreneurship</option><option value="36">Bsc Food Science and Technology</option><option value="37">BSc. Financial Engineering</option><option value="38">BSc. Food Science and Nutrition</option><option value="39">BSc. Food Science and Postharvest Technology</option><option value="40">Bsc Geomatics and Geospatial Engineering</option><option value="41">Bsc Genomic Sciences</option><option value="42">BSc. Geomatics Engineering</option><option value="43">Health Information Management &amp; Informatics</option><option value="44">BSc. Human Nutrition and Dietetics</option><option value="45">BSc. Horticulture</option><option value="46">Bsc. Hospitality Management</option><option value="47">Bsc Human Resource</option><option value="48">Bachelor of Science in Industrial Biotechnology</option><option value="49">Bsc Industrial Biotechnology</option><option value="50">BSc. Industrial Chemistry</option><option value="51">BSc. Information Technology</option><option value="52">Bachelor of Landscape Architecture</option><option value="53">BSc. Land Resource Planning and Management</option><option value="54">BSc. Mathematics and Computer Science</option><option value="55">Bsc Marine Engineering</option><option value="56">Bsc Mathematics</option><option value="57">BSc. Mechatronics Engineering</option><option value="58">BSc. Mechanical Engineering</option><option value="59">BSc. Medical Laboratory Sciences</option><option value="60">BSc. Medical Microbiology</option><option value="61">Bsc Medicine and Surgery</option><option value="62">Bsc Mass Communication</option><option value="63">Bsc Mathematics and Chemistry</option><option value="64">Bsc Nursing</option><option value="65">Bsc Physics and Applied Mathematics</option><option value="66">Bsc Pharmacy</option><option value="67">BSc. Physics</option><option value="68">Bsc Physical Science</option><option value="69">Bsc Procurement and Contract</option><option value="70">Bsc Procurement and Logistics</option><option value="71">Bachelor of Purchasing &amp; Supplies Management</option><option value="72">Bsc Public Health</option><option value="73">Bsc Quantity Surveying</option><option value="74">Bachelor Of Radiography</option><option value="75">Bachelor of Science</option><option value="76">Bsc Statistics</option><option value="77">Bsc Supply Chain Management</option><option value="78">BSc. Soil, Water &amp; Environmental Engineering</option><option value="79">BSc. Telecommunication &amp; Information Engineering</option><option value="80">Bridging in Mathematics</option><option value="81">Certificate in HIV/AIDS Management</option><option value="82">Certificate in Information Technology</option><option value="83">Bsc Community Health and Development</option><option value="84">Diploma In Architecture</option><option value="85">Diploma in Business Administration</option><option value="86">Diploma in Business Information Technology</option><option value="87">Diploma in Clinical Medicine</option><option value="88">Bsc Development Studies</option><option value="89">Diploma in Food Technology</option><option value="90">Diploma in HIV/AIDS Management</option><option value="91">Diploma in Information Technology</option><option value="92">Diploma in Purchasing &amp; Supplies Management</option><option value="94">BSc. Mining and Processing Engineering</option><option value="95">BSc. Medical Biochemistry</option><option value="96">BSc. Industrial Biotechnology</option><option value="97">BSc. Bioengineering</option><option value="98">Bsc. Medical Biochemistry</option><option value="99">Bsc Business Innovation Management</option><option value="100">BSc. Business Innovation &amp; Technology Management</option><option value="101">Bsc. Real Estate</option><option value="102">BSc. Industrial Mathematics</option><option value="103">BSc. Development Studies</option><option value="104">BSc Physiotherapy</option><option value="105">BSc Public Administration and Leadership</option><option value="106">development studies</option><option value="107">BSc Zoology</option></select>

                                    
                                </select>
                         



            {{ Form::label('password', "Password") }}
            {{ Form::password('password',array('class' => 'form-control','placeholder')) }}

            {{ Form::label('password_confirmation', "Confirmation Password") }}
             {{ Form::password('password_confirmation',array('class' => 'form-control','placeholder')) }}

           


            {{ Form:: label('gender', "Gender:")}}
             {!!  Form::select('gender',['Male'=>'Male','Female'=>'Female'], 
         null,['class' => 'form-control']) 
    !!}

            
          
           {{ Form::submit('Register',['class'=>'btn   btn-primary btn-block','style'=> 'margin-top:30px;']) }}



            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
</div>

    </div>
</div>
  

    
    
@endsection
