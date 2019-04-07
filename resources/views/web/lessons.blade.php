
@extends('web.base-layout')


@section('content')
<main>
            <div class="container">
                    <div class="sidebar_opener">
                        <i class="fas fa-angle-double-left"></i>
                        <i class="fas fa-angle-double-right"></i>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="course-intro">
                                <div class="float-left imgdiv">
                                    <img src="{{ url('/') }}/assets/images/binary-code.png" />
                                </div>
                                <div class="float-left contentdiv">
                                    <h1>Learn Porgaramming</h1>
                                    <p>
                                            Learn The Basics of any programming language very easy by follow these steps Learn The Basics of any programming language very easy by follow these steps Learn The Basics of any programming language very easy by follow these steps Learn The Basics of any programming language very easy by follow these steps 
                                            Learn The Basics of any programming language very easy by follow these steps Learn The Basics of any programming language very easy by follow these steps 
                                    </p>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col-3">
                            <div class="sidebar">
                                <div class="info-item">
                                    <img class="float-left" src="{{ url('/') }}/assets/images/programming.png" />
                                    <h3>Chapters</h3>
                                    <p>{{count($chapters)}}</p>
                                </div>
                                <div class="info-item">
                                    <img class="float-left" src="{{ url('/') }}/assets/images/blueprint.png" />
                                    <h3>Lessons</h3>
                                    <p>{{$lessons_count}}</p>
                                </div>
                                <div class="info-item">
                                    <img class="float-left" src="{{ url('/') }}/assets/images/lightbulb.png" />
                                    <h3>Questions</h3>
                                    <p>{{$questions_count}}</p>
                                </div>
                                <div class="info-item">
                                    <img class="float-left" src="{{ url('/') }}/assets/images/artificial-intelligence.png" />
                                    <h3>Quizes</h3>
                                    <p>{{count($chapters)}}</p>
                                </div>

                                <div class="info-label">
                                    <h5>Learners</h5>
                                    <h5>488,332</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="lessons-cont">
                                <div class="lessons-cont-header">
                                    <h3 class="float-left algo-default-font">
                                        Lessons: <span class="algo-main-color">92</span>
                                    </h3>
                                    <h3 class="float-right algo-default-font">
                                        <span class="algo-main-color">67</span> Questions
                                    </h3>
                                </div>

                               
                                <div class="lessons-list">

                                
                                    @foreach ($chapters as $chapter)
                                    <div class="item chapter">
                                        <h2 class="float-left title">Chapitre 1: {{$chapter->title}}</h2>
                                        <div class="float-right">
                                            <h2>Lessons: <span class="algo-main-color">{{count($chapter->lessons)}}</span></h2>
                                        </div>
                                    </div>
                                        <?php $x = 1; ?>
                                        @foreach ($chapter->lessons as $lesson) 

                                        @if ($lesson['chapter_id'] == $chapter['id'])
                                        
                                        <div class="item lesson">
                                        <h2 class="float-left title">{{$x}}. {{$lesson->title}}</h2>
                                            <div class="float-right">
                                                <label class="algo-checkbox-cont">
                                                    <input type="checkbox" checked="checked" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <?php $x++; ?>
                                        @endif
                                      
                                        @endforeach
                                    

                                    <div class="item quiz">
                                        <h2 class="float-left title">{{$x}}. {{$chapter->quiz->title}}</h2>
                                        <div class="float-right">
                                            <div class="info">
                                                <span class="algo-secondary-color">?</span> 
                                                4
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    
                                 
                                   
                                  
                                   

                 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        
        </main>
@endsection