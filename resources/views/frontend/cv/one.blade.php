<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&family=Roboto:wght@100&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            -webkit-print-color-adjust: exact !important;   /* Chrome, Safari 6 – 15.3, Edge */
            color-adjust: exact !important;                 /* Firefox 48 – 96 */
            print-color-adjust: exact !important;           /* Firefox 97+, Safari 15.4+ */
        }

        body{
            /* background-color: lightblue; */
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            position: absolute;
            width: 100%;
            margin: 10px;
            max-width: 1000px;
            min-height: 100px;
            background: #fff;
            display: grid;
            grid-template-columns: 1fr 2fr;
            border: 1px solid #003147;
        }
        .container .left-side {
            background-color: #003147;
            position: relative;
            padding: 40px
        }
        .container .right-side {
            background-color: #fff;
            position: relative;
            padding: 40px
        }
        .profile-text {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .profile-text .img-box {
            position: relative;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;

        }

        .profile-text .img-box img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-text h3 {
            color: #fff;
            /* font-size: 1.5em; */
            margin-top: 20px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 400;
            line-height: 1.4em;
        }
        .profile-text h3 span {
            font-size: 0.8em;
            font-weight: 300;
        }
        .contact-info {
            padding-top: 40px;
        }
        .title {
            color: #fff;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1px;
            margin-bottom: 20px;
            padding-bottom: 5px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .contact-info ul {
            position: relative;
        }

        .contact-info ul li {
            position: relative;
            list-style: none;
            margin: 10px 0;
            cursor: pointer;
        }
        .contact-info ul li .icon {
            display: inline-block;
            width: 30px;
            font-size: 18px;
            color: #03a9f4;
        }
        .contact-info ul li .text {
            color: #fff;
            font-weight: 300;
        }

        .contact-info.education li {
            margin-bottom: 15px;
        }
        .contact-info.education h5 {
            color: #03a9f4;
            font-weight: 500;
        }
        .contact-info.education h4:nth-child(2) {
            color: #fff;
            font-weight: 500;
        }
        .contact-info.education h4 {
            color: #fff;
            font-weight: 300;
        }
        .contact-info.languages .percent {
            position: relative;
            width: 100%;
            height: 6px;
            background-color: #081921;
            display: block;
            margin-top: 5px
        }
        .contact-info.languages .percent div {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #03a9f4;
        }
        .right-side {
            position: relative;
            background-color: #fff;
            padding: 40px;
        }

        .about {
            margin-bottom: 50px;
        }
        .about:last-child {
            margin-bottom: 0;
        }

        .about .title {
            color: #003147;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
            border-bottom: 1px solid #003147;
        }
        /* p {
            color: #333;
        } */
        .about .box {
            display: flex;
            flex-direction: row;
            margin: 20px 0;
        }
        .about .box .year-range {
            min-width: 150px;
        }
        .about .box .year-range h5{
            text-transform: uppercase;
            /* color: #848c90; */
            font-weight: 500;
        }
        .about .box .year-range h4 {
            text-transform: uppercase;
            /* color: #2a7da2; */
            font-size: 16px;
        }
        .about .box .text h4{
            font-weight: 500;
        }
        .about p {
            font-weight: 380;
        }
        .skills .box {
            position: relative;
            width: 100%;
            display: grid;
            grid-template-columns: 150px 1fr;
            justify-content: center;
            align-items: center;
        }
        .skills .box h4 {
            text-transform: uppercase;
            color: #003147;
            font-weight: 400;
        }
        .skills .box .percent{
            position: relative;
            width: 100%;
            height: 10px;
            background: #f0f0f0;
        }
        .skills .box .percent div {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #03a9f4;
        }

        @media (max-width: 1000px){
            body {
                zoom: 80%;
            }

            .container {
                margin: 15px;
                /* grid-template-columns: repeat(1,1fr) */
            }
            .about .box {
                flex-direction: column;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="profile-text">
                <div class="img-box">
                    <img src="{{ $imageUrl }}" alt="">
                </div>
                <h3>{{ $data->full_name }}  <br> <span>{{ $data->position }}</span></h3>
            </div>
            <div class="contact-info">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <span class="text">{{ $data->phone }}</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span class="text">{{ $data->email }}</span>
                    </li>
                    @if($data->website)
                    <li>
                        <span class="icon"><i class="fas fa-globe"></i></span>
                        <span class="text">{{ $data->website }}</span>
                    </li>
                    @endif
                    @if($data->linkedin_url)
                    <li>
                        <span class="icon"><i class="fas fa-linkedin"></i></span>
                        <span class="text">{{ $data->linkedin_url }}</span>
                    </li>
                    @endif
                    <li>
                        <span class="icon"><i class="fas fa-location-dot"></i></span>
                        <span class="text">{{ $data->present_address }}</span>
                    </li>
                </ul>
            </div>
            <div class="contact-info education">
                <h3 class="title">Education</h3>
                <ul>
                    @foreach($data->education as $edu)
                    <li>
                        <h5>{{ data_get($edu, 'start_date') }} - {{ data_get($edu, 'end_date') }}</h5>
                        <h4>{{ data_get($edu, 'course_name') }}</h4>
                        <h4>{{ data_get($edu, 'institute_name') }}</h4>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="contact-info languages">
                <h3 class="title">Languages</h3>
                <ul>
                    @foreach($data->language as $edu)
                    <li>
                        <span class="text">{{ data_get($edu, 'language_name') }}</span>
                        <span class="percent">
                            <div style="width: {{ data_get($edu, 'lang_percentage') }}%"></div>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="right-side">
            <div class="about">
                <h2 class="title">About Me</h2>
                <p>{{ $data->about_me }}</p>
            </div>
            <div class="about">
                <h2 class="title">Experience</h2>
                @foreach ($data->experience as $experience)
                <div class="box">
                    <div class="year-range">
                        <h4>{{ data_get($experience, 'start_date') }} - {{ data_get($experience, 'end_date') }}</h4>
                        <h5>{{ data_get($experience, 'company_name') }}</h5>
                    </div>
                    <div class="text">
                        <h4>{{ data_get($experience, 'position') }}</h4>
                        <p>
                            {{ data_get($experience, 'description') }}
                        </p>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="about skills">
                <h2 class="title">Professional Skills</h2>
                @foreach ($data->skills as $skill)
                <div class="box">
                    <h4>{{ data_get($skill,'skill_name') }}</h4>
                    <div class="percent">
                        <div style="width: {{ data_get($skill, 'skill_percentage') }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
