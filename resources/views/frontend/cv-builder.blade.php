<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Builder - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}" />
</head>
<body>
    <div class="container bg-white">
        <h1 class="text-center p-4 border-bottom">CV Builder - {{ config('app.name') }}</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('preview.cv') }}" method="POST" id="form" enctype="multipart/form-data">
                    @csrf
                    <!-- Personal Info -->
                    <h3>Personal Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter your position">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label" for="about_me">About Yourself</label>
                        <textarea id="about_me" name="about_me" class="form-control" placeholder="Write about yourself" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="picture">Picture</label>
                                    <input type="file" class="form-control" id="picture" name="picture">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Contact Info -->
                    <h3>Contact Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone Number" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="website">Your Website URL (optional)</label>
                                    <input type="url" class="form-control" id="website" name="website" placeholder="Enter your website" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="linkedin_url">LinkedIn Profile URL (optional)</label>
                                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="Enter your linkedin profile" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="present_address">Present Address</label>
                                    <input type="text" class="form-control" id="present_address" name="present_address" placeholder="Enter your present address" />
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Education -->
                    <h3>Education</h3>
                    <section>
                        <div class="education-info">
                            <div data-repeater-list="education">
                                <div data-repeater-item class="row">
                                    <div  class="mb-3 col-lg-6">
                                        <label class="form-label" for="start_date">Start Date</label>
                                        <input type="text" id="start_date" name="start_date" class="form-control" placeholder="Enter your start date" />
                                        <div class="form-text">Ex. Jan 2015</div>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input type="text" id="end_date" name="end_date" class="form-control" placeholder="Enter your end date" />
                                        <div class="form-text">Ex. Jan 2020, or Present</div>
                                    </div>
                                    <div  class="mb-3 col-lg-5">
                                        <label class="form-label" for="course_name">Course Name</label>
                                        <input type="text" id="course_name" name="course_name" class="form-control" placeholder="Enter your course name" />
                                    </div>
                                    <div  class="mb-3 col-lg-5">
                                        <label class="form-label" for="institute_name">Instiute Name</label>
                                        <input type="text" id="institute_name" name="institute_name" class="form-control" placeholder="Enter your instiute name" />
                                    </div>
                                    <div class="col-lg-2 align-self-center">
                                        <div class="d-grid">
                                            <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                        </div>
                    </section>

                    <!-- Languages -->
                    <h3>Languages</h3>
                    <section>
                        <div class="language">
                            <div data-repeater-list="language">
                                <div data-repeater-item class="row">
                                    <div  class="mb-3 col-lg-5">
                                        <label class="form-label" for="language_name">Language Name</label>
                                        <input type="text" id="language_name" name="language_name" class="form-control" placeholder="Enter your language name" />
                                    </div>
                                    <div class="mb-3 col-lg-5">
                                        <label class="form-label" for="lang_percentage">Percentage(%) <small>(Optional)</small></label>
                                        <input type="number" id="lang_percentage" name="lang_percentage" class="form-control" placeholder="Percentage" />
                                    </div>
                                    <div class="col-lg-2 align-self-center">
                                        <div class="d-grid">
                                            <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                        </div>
                    </section>

                    <!-- Experience -->
                    <h3>Experience</h3>
                    <section>
                        <div class="experience-info">
                            <div data-repeater-list="experience">
                                <div data-repeater-item class="row">
                                    <div  class="mb-3 col-lg-4">
                                        <label class="form-label" for="start_date">Start Date</label>
                                        <input type="text" id="start_date" name="start_date" class="form-control" placeholder="Enter your start date" />
                                        <div class="form-text">Ex. Jan 2015</div>
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input type="text" id="end_date" name="end_date" class="form-control" placeholder="Enter your end date" />
                                        <div class="form-text">Ex. Jan 2020, or Present</div>
                                    </div>
                                    <div  class="mb-3 col-lg-4">
                                        <label class="form-label" for="company_name">Company Name</label>
                                        <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Enter your Company name" />
                                    </div>
                                    <div  class="mb-3 col-lg-5">
                                        <label class="form-label" for="position">Position</label>
                                        <input type="text" id="position" name="position" class="form-control" placeholder="Enter your position" />
                                    </div>
                                    <div class="mb-3 col-lg-5">
                                        <label class="form-label" for="description">Description (Optional)</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Write description" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-2 align-self-center">
                                        <div class="d-grid">
                                            <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                        </div>
                    </section>

                    <!-- Skills -->
                    <h3>Skills</h3>
                    <section>
                        <div class="skills">
                            <div data-repeater-list="skills">
                                <div data-repeater-item class="row">
                                    <div  class="mb-3 col-lg-5">
                                        <label class="form-label" for="skill_name">Skill Name</label>
                                        <input type="text" id="skill_name" name="skill_name" class="form-control" placeholder="Enter your skill name" />
                                    </div>
                                    <div class="mb-3 col-lg-5">
                                        <label class="form-label" for="skill_percentage">Percentage(%) <small>(Optional)</small></label>
                                        <input type="number" id="skill_percentage" name="skill_percentage" class="form-control" placeholder="Percentage" />
                                    </div>
                                    <div class="col-lg-2 align-self-center">
                                        <div class="d-grid">
                                            <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                        </div>
                    </section>
                </form>

            </div>
            <!-- end card body -->
        </div>
    </div>
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"> </script>
    <script>
        $("#form").steps({
            headerTag:"h3",
            bodyTag:"section",
            transitionEffect:"slide",
            onFinished: function (event, currentIndex) {
                $("form").submit();
            }
        });

        $(".education-info").repeater({
            show: function() {
                $(this).slideDown()
            },
            hide: function(e) {
                confirm("Are you sure you want to delete?") && $(this).slideUp(e)
            },
            ready: function(e) {}
        }), window.outerRepeater = $(".outer-repeater").repeater({
            show: function() {
                console.log("outer show"), $(this).slideDown()
            },
            hide: function(e) {
                console.log("outer delete"), $(this).slideUp(e)
            },
            repeaters: [{
                show: function() {
                    $(this).slideDown()
                },
                hide: function(e) {
                   $(this).slideUp(e)
                }
            }]
        });

        $(".language").repeater({
            show: function() {
                $(this).slideDown()
            },
            hide: function(e) {
                confirm("Are you sure you want to delete?") && $(this).slideUp(e)
            },
            ready: function(e) {}
        }), window.outerRepeater = $(".outer-repeater").repeater({
            show: function() {
                console.log("outer show"), $(this).slideDown()
            },
            hide: function(e) {
                console.log("outer delete"), $(this).slideUp(e)
            },
            repeaters: [{
                show: function() {
                    $(this).slideDown()
                },
                hide: function(e) {
                   $(this).slideUp(e)
                }
            }]
        });

        $(".experience-info").repeater({
            show: function() {
                $(this).slideDown()
            },
            hide: function(e) {
                confirm("Are you sure you want to delete?") && $(this).slideUp(e)
            },
            ready: function(e) {}
        }), window.outerRepeater = $(".outer-repeater").repeater({
            show: function() {
                console.log("outer show"), $(this).slideDown()
            },
            hide: function(e) {
                console.log("outer delete"), $(this).slideUp(e)
            },
            repeaters: [{
                show: function() {
                    $(this).slideDown()
                },
                hide: function(e) {
                   $(this).slideUp(e)
                }
            }]
        });

        $(".skills").repeater({
            show: function() {
                $(this).slideDown()
            },
            hide: function(e) {
                confirm("Are you sure you want to delete?") && $(this).slideUp(e)
            },
            ready: function(e) {}
        }), window.outerRepeater = $(".outer-repeater").repeater({
            show: function() {
                console.log("outer show"), $(this).slideDown()
            },
            hide: function(e) {
                console.log("outer delete"), $(this).slideUp(e)
            },
            repeaters: [{
                show: function() {
                    $(this).slideDown()
                },
                hide: function(e) {
                   $(this).slideUp(e)
                }
            }]
        });
    </script>
</body>
</html>
