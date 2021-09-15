@extends('layout.master')
@section('content')
<div class="wrapper">
    <!--Header ABOUT ME-->
    <div>
        <div style=" letter-spacing: .2rem; position: absolute; top: -2px; left: 458px; font-weight: 800; font-size: 137px; color: #222222">RESUME</div>
        <div style=" position: absolute; top:52px; left: 612px; display: flex; color: white; font-weight: 800; font-size: 64px;">ABOUT <div style="color: #ffb400; font-size: 64px">ME</div></div>
    </div>
    <!--End Header ABOUT ME-->
    <!--Section Infos-->
    <div>
        <div id="personal_infos" style=>
            <h1 id="title_infos" style="">Personal Infos:</h1>
            <div id="inside-infos">
                <div id="first_column_info">
                    <div class="gray_text">First Name : <div class="white_text">Andrei</div></div>
                    <div class="gray_text">Last Name : <div class="white_text">Girnet</div></div>
                    <div class="gray_text">Age : <div class="white_text">24 years</div></div>
                    <div class="gray_text">Nationality : <div class="white_text">Moldavian</div></div>
                    <div class="gray_text">Based : <div class="white_text">In the UK</div></div>
                </div>
                <div id="second_column_info">
                    <div class="gray_text">Address : <div class="white_text"> Dunstable</div></div>
                    <div class="gray_text">Phone : <div class="white_text">+447365365156</div></div>
                    <div class="gray_text">Email : <div class="white_text">andrei.girnet96@gmail.com</div></div>
                    <div class="gray_text">Languages : <div class="white_text">Romanian, English</div></div>
                    <div class="gray_text">Hobbies : <div class="white_text">Sports</div></div>
                </div>
                <div id="experience">
                    <div id="grid">
                        <div class="grid_element">
                            <div class="num">2+</div>
                            <div style="display: flex;">
                                <div><hr style="width: 40px; height: 1px; background-color: white"></div>
                                <div class="experience-description">YEARS OF<br>EXPERIENCE</div>
                            </div>
                        </div>
                        <div class="grid_element">
                            <div class="num">3+</div>
                            <div style="display: flex;">
                                <hr style="width: 40px; height: 1px; background-color: white">
                                <div class="experience-description">YEARS OF<br>LEARNING</div>
                            </div>
                        </div>
                        <div class="grid_element">
                            <div class="num">5+</div>
                            <div style="display: flex;">
                                <hr style="width: 40px; height: 1px; background-color: white">
                                <div class="experience-description">DEV<br>LANGUAGES</div>
                            </div>
                        </div>
                        <div class="grid_element">
                            <div class="num">50+</div>
                            <div style="display: flex;">
                                <hr style="width: 40px; height: 1px; background-color: white">
                                <div class="experience-description">HAPPY <br>CUSTOMERS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="button"  style="margin-top: 50px">
            <div id="overflow"></div>
            <div style="color: white; margin-left: 30px; ">DOWNLOAD CV</div>
            <div id="arrow"><img src="{{asset('assets/icons/arrow.png')}}" alt=""></div>
        </div>

    </div>
    <!--EndSection Infos-->
    <hr style="width: 30%; background-color: gray; height: 1px; border: none; margin-top: 80px; margin-left: 370px ">
    <!--Section MY SKILLS-->
    <div>
        <h1 style="color: white; font-size: 40px; margin-left:441px; margin-top: 40px; margin-bottom: 20px; letter-spacing: .1rem">MY SKILLS</h1>
        <div id="chart">
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="85, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">85%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">HTML</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="85, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">85%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">CSS</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="70, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">70%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">PHP</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="80, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">80%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">LARAVEL</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="70, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">70%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">TAILWIND</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="30, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">30%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">LIVEWIRE</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="40, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">40%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">VUE</div></div>
            </div>
            <div class="grid_chart">
                <svg viewBox="0 0 36 36" class="circular-chart orange">
                    <path class="circle-bg"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                          stroke-dasharray="70, 100"
                          d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage">70%</text>
                </svg>
                <div style="display: flex; justify-content: center"><div class="sub" style="color: white">BOOTSTRAP</div></div>
            </div>
        </div>
    </div>

    <!--ENDSection MY SKILLS-->
    <hr style="width: 30%; background-color: gray; height: 1px; border: none; margin-top: 80px; margin-left: 386px">
    <!--COURSES and STUDIES-->
    <h1 style="color: white; font-size: 40px; margin-left:361px; margin-top: 40px; margin-bottom: 20px; letter-spacing: .1rem">Courses & Education</h1>
    <div id="studies" style="margin-bottom: 200px;">
        <div>
            <div class="courses" style="display: flex">
                <div class="small-circle-icon"><img src="{{asset('assets/icons/briefcase.png')}}" alt=""></div>
                <div>
                    <div class="background-gray-text">
                        <div>2019 - present</div>
                    </div>
                    <div class="course-title" >London Training Center</div>
                    <div class="course-description">- Laravel Advanced Course</div>
                </div>
            </div>
            <div class="courses" style="display: flex">
                <div class="small-circle-icon"><img src="{{asset('assets/icons/briefcase.png')}}" alt=""></div>
                <div>
                    <div class="background-gray-text">
                        <div>2018 - 2019</div>
                    </div>
                    <div class="course-title" >London Training Center</div>
                    <div class="course-description">- PHP Ecommerce Website</div>
                </div>
            </div>
            <div class="courses" style="display: flex">
                <div class="small-circle-icon"><img src="{{asset('assets/icons/briefcase.png')}}" alt=""></div>
                <div>
                    <div class="background-gray-text">
                        <div>2018 - 2019</div>
                    </div>
                    <div class="course-title" >London Training Center</div>
                    <div class="course-description">- Web Design</div>
                </div>
            </div>
        </div>
        <div style="margin-left: 235px;">
            <div>
                <div class="courses" style="display: flex">
                    <div class="small-circle-icon"><img src="{{asset('assets/icons/book.png')}}" alt=""></div>
                    <div>
                        <div class="background-gray-text">
                            <div>2018 - 2019</div>
                        </div>
                        <div class="course-title" >Royal Holloway University of London</div>
                        <div class="course-description">- Msc Digital Marketing</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="courses" style="display: flex">
                    <div class="small-circle-icon"><img src="{{asset('assets/icons/book.png')}}" alt=""></div>
                    <div>
                        <div class="background-gray-text">
                            <div>2018 - 2019</div>
                        </div>
                        <div class="course-title" >Dunarea de Jos Univesity</div>
                        <div class="course-description">- Bsc International Business</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="courses" style="display: flex">
                    <div class="small-circle-icon"><img src="{{asset('assets/icons/book.png')}}" alt=""></div>
                    <div>
                        <div class="background-gray-text">
                            <div>2018 - 2019</div>
                        </div>
                        <div class="course-title" >Minerva High School</div>
                        <div class="course-description">- Graduated with Honors</div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <!--End of experience and studyies-->
</div>
@endsection
